<?php


App::uses('AppController', 'Controller');
App::import('Vendor','User' ,array('file'=>'Cschat/classes/User.php'));

/**
 * Points Controller
 *
 * @property Point $Point
 */
class AdminsController extends AppController {
/**
 * This controller does not use a model
 *
 * @var array
 */
	public $uses = array('User');
	
	//public $components = array('Image');

/**
 * index method
 *
 * @return void
 */
	function index() { 
		$this->layout = 'admin';
		if($this->Session->read('user_id')){
		
			//pr($chats);exit;
			//echo '<pre>';print_r($this->Session);
			//echo 'admin'.$this->Session->read('user_id');exit;
		}
		else
		$this->redirect(array('action'=>'login'));	
	}
	
	function login(){
	    $this->layout = 'adminlogin';
		//$this->session_initializer();
		if($this->Session->read('User.id')){
		   $this->Session->write('user_id',$this->Session->read('User.aid'));
		 //  $this->Session->write('user_id',true);
	       $this->redirect(array('action'=>'index'));		
		}else{
		 if(!empty($this->request->data)){ 
			  if($id=User::validateUser($this->request->data['email'], $this->request->data['password'])){
				  $this->Session->write('user_id',$id);
				 // $this->Session->write('user_id',true);
				  $this->redirect(array('action'=>'index'));		
				  }else{
					$this->set('message','Invalid credentials');
				  }
		 }
		}
	}
	
	function logout(){
		$this->layout = 'adminlogin';
		if($this->Session->read('user_id')){
		$client =User::getUser($this->Session->read('user_id'));
		//$client->getChats()->finalize();
		$this->Session->delete('user_id');
		$this->redirect(array('action'=>'index'));
		}
		else
		$this->redirect(array('action'=>'index'));
		
	}
}
