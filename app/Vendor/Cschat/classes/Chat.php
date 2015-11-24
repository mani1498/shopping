<?php
//require_once __DIR__."/Db.php";
//require_once __DIR__."/Message.php";
//App::import('Vendor','Db' ,array('file'=>'Cschat/classes/Db.php'));
//App::import('Vendor','Message' ,array('file'=>'Cschat/classes/Message.php'));
/**
 * This class manages the chats
 */
class Chat{
    
    /**
     * Chat's id
     * @access public
     * @var int
     */
    public $id;
    
    /**
     * Chat's client_id
     * @access public
     * @var int
     */
    public $client_id;
    
    /**
     * Chat's user_id
     * @access private
     * @var int
     */
    private $user_id;
    
    /**
     * Chat's status (0=Unasigned,1=Active,2=Ended)
     * @access public
     * @var int
     */
    public $status;
    
    /**
     * Chat's start time
     * @access public
     * @var string
     */
    public $start_date;
    
    /**
     * Chat's end time
     * @access public
     * @var string
     */
    public $end_date;
    
    /**
     * Database conection for the instance
     */
    private $dbconection;
    
    /**
     * Creates a new Chat based on the data given
     * @param int $id Chat's id
     * @param int $client_id Client's id
     * @param string $start_date Chat's creation date
     * @param int $status Chat status
     * @param int $user_id User's id
     * @param string $end_date End date
     */
    private function __construct($id,$client_id,$start_date,$status,$user_id=null,$end_date=null){
        $this->id=$id;
        $this->client_id=$client_id;
        $this->start_date=$start_date;
        $this->status=$status;
        $this->user_id=$user_id;
        $this->end_date=$end_date;
        $this->dbconection=Db::getInstance();
    }
    
    /**
     * Creates a new chat to our client
     * @param int $client_id The Client's id
     * @return Chat
     */
    public static function getNewChat($client_id){
        $dbconection= Db::getInstance();
        $query="INSERT INTO chat (client_id) VALUES(?)";
        if($stmt=$dbconection->prepare($query)){
            $stmt->bindParam(1,$client_id,PDO::PARAM_INT);
            if($stmt->execute()){
                $id=$dbconection->getLastId();
                return Chat::getExistingChat($id);
            }else{
                throw new DbException("Statement error",$stmt);
            }
        }else{
            throw new DbException("Database error");
        }
    }
    
    /**
     * Get an existing chat
     * @param int $id The Chat's id
     * @return Chat
     * @throws ChatException
     */
    public static function getExistingChat($id){
        $dbconection= Db::getInstance();
       $query="SELECT * FROM chat WHERE id=?";
       if($stmt=$dbconection->prepare($query)){
           $stmt->bindParam(1,$id,PDO::PARAM_INT);
           if($stmt->execute()){
               if($row =$stmt->fetch(PDO::FETCH_ASSOC)){
                    return new self($row['id'],$row['client_id'],$row['start_date'],$row['status'],$row['user_id'],$row['end_date']);   
               }
               else {
                   throw new ChatException("Chat not found");
               }
           }else{
               throw new DbException("Statement error: ",$stmt);
           }
       }else{
           throw new DbException("Database error");
       }
    }
    
   /**
    * Get's an  array whit the unassigned chats
    * @return Array
    */ 
    public static function getUnasignedChats(){
        $dbconection= Db::getInstance();
        $query="SELECT * FROM chat WHERE status=0";
        if($stmt=$dbconection->prepare($query)){
            if($stmt->execute()){
                return $stmt->fetchAll(PDO::FETCH_ASSOC);
            }else{
                throw new DbException("Statement error",$stmt);
            }
        }else{
            throw new DbException("Database error");
        }
    }
    
	 public function getLastClient(){
		$db=Db::getInstance();
         //$query="SELECT * FROM chat WHERE status=3 OR status=1 ORDER BY end_date DESC ";
		 $query="SELECT * FROM chat WHERE status!=0  ORDER BY end_date DESC ";
        $stmt = $db->prepare($query);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
   }
	
	
    /**
     * Asign auser for the chat
     * @param int $id The id of the user it MUST ecist in the Db
     * @return boolean 
     * @throws DbException
     */
    public function setUser($id){
        $query="UPDATE chat SET user_id=?,status=1 WHERE id=?";
        if($stmt=$this->dbconection->prepare($query)){
            $stmt->bindParam(1,$id,PDO::PARAM_INT);
            $stmt->bindParam(2,$this->id,PDO::PARAM_INT);
            if($stmt->execute()){
                $user=User::getUser($id);
                Message::sendMessage($this->id, 3, $user->display_name." Has take your chat");
                $this->user_id=$id;
                $this->status=1;
                return true;
            }else{
                return false;
            }
        }else{
            throw new DbException("Database error");
        }
    }
    
    /**
     * Gets the id of the assigned user
     * @return int The id of the assigned user
     */
    public function getUser(){
        return $this->user_id;
    }
    
    public function finalize(){
        $db=Db::getInstance();
        Message::sendMessage($this->id, 3, 'The chat has been ended');
        $query = "UPDATE chat SET status = 3,end_date=NOW() WHERE id = $this->id";
        $stmt = $db->prepare($query);
        $stmt->execute();
    }
    
    public function getClientName(){
        $db=Db::getInstance();
        $query = "SELECT name FROM client WHERE id = $this->client_id";
        $stmt = $db->prepare($query);
        $stmt->execute();
        $result= $stmt->fetch(PDO::FETCH_ASSOC);
        return $result['name'];
    }
    
    
    public function getUserName(){
        $db=Db::getInstance();
        $query = "SELECT display_name FROM user WHERE id = $this->user_id";
        $stmt = $db->prepare($query);
        $stmt->execute();
        $result= $stmt->fetch(PDO::FETCH_ASSOC);
        return $result['display_name'];
    }
    
}

/**
 * Exception class for the user class
 */
class ChatException extends Exception{
    public function __construct($message, $code = 0, Exception $previous = null){
        parent::__construct($message, $code, $previous);
    }
    
    public function __toString() {
        return __CLASS__ . ": [{$this->code}]: {$this->message}\n";
    }
}
