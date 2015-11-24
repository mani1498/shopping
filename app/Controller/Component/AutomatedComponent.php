<?php
/**
* @author Alexandra Cernat
* @copyright (c) 2013 Alexandra Cernat
* @license MIT
* @version 1.0
*/

class AutomatedComponent extends Component
{
    /**
    * your SDL BeGlobal API Key
    * 
    * @var string
    */
    private $api_key;
    /**
    * the SDL BeGlobal API url
    * 
    * @var string
    */
    private $api_url = 'https://api.beglobal.com/';
    /**
    * the text to be translated - converted from array
    * ex: here I come|how are you|hello world
    * 
    * @var string
    */
    private $translate_text;
    /**
    * an array of index paths to the value to be translated 
    *               
    * @var array
    */
    private $index_array;
    /**
    * the current index of the $this->index_array
    *               
    * @var int
    */
    private $index;
    
/**
* Class constructor
* 
* @param string $api_key
* @return SDL_BeGlobal_Translation
*/
    public function __construct($api_key)
    {
        // Initialise global variables
        $this->api_key = $api_key;
    }
    
/**
* Recursive method to create the string to be translated and to create the index_array to reconstruct the translated array
* 
* @param mixed $item - the item parsed and translated
* @param string $parent_index - the index from the index_array of the item's key
*/
    private function create_string($item,$parent_index)
    {
        // check if the item is a string
        if (!is_array($item))
        {
            // item is an empty string transform it to space
            if ($item === '') $item = ' ';
            // add it to the string to be translated
            $this->translate_text .= '|'.urlencode($item);
        }
        else
        {
            // suppose that we are at the first item
            $first_item = true;
            // the index path of item's key (the path to the item)
            $previous = $this->index_array[$parent_index];
            // browse every value of the item
            foreach ($item as $id => $value)
            {
                // if we are at the first value
                if ($first_item)
                {
                    // turn of the first value flag
                    $first_item = false;
                    // set the parent index as current index
                    $current_index = $parent_index;
                }
                else
                {                  
                    // go to the next index of $this->index_array
                    $this->index++;
                    // set the current index
                    $current_index = $this->index;
                }   
                // create/rewrite the path for the current index                                        
                $this->index_array[$current_index] = $previous."['".$id."']";
                // add the value to the string to be translated
                $this->create_string($value,$current_index);
            }
        }
    }
    
/**
* Translate an array from a language to another
* 
* @param arrey $texts_array - the array with all the texts
* @param string $from - the source language - 3-letter language code (iso 639)
* @param string $to - the target language - 3-letter language code (iso 639)
*/
    public function translate($texts_array,$from,$to)
    {
        // Initialise global variables
        $this->translate_text = '';
        $this->index_array = array();
        $this->index = 0;
        
        // if the item to be translated is an array
        if (is_array($texts_array))
        {
            // for every value from texts_array 
            foreach ($texts_array as $id => $value)
            {    
                // add the index of the value in the array of index paths
                $this->index_array[$this->index] = "['".$id."']";
                // add the value to the string to be translated 
                $this->create_string($value,$this->index);
                // go to the next index
                $this->index++;                            
            }
            // set the text to be translated without the first vertical bar
            $this->translate_text = substr($this->translate_text,1);
        }
        else
        {
            // if the item to be translated is a string, set the text to be translated
            $this->translate_text = urlencode($texts_array);
        }
        
        // json containing the translation information for the API
        $json = '{  "text" : "'.$this->translate_text.'",
                    "from" : "'.$from.'",
                    "to" : "'.$to.'"}';
                    
        // build headers params for the API
        $headers = array("Content-Type: application/json","Authorization: apiKey=" . $this->api_key);
        
        // init cURL session
        $curl = curl_init(); 
        
        // set the URL to be accessed
        curl_setopt($curl, CURLOPT_URL, $this->api_url.'translate');
        // set option to return the transfer instead of outputting it directly  
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        // set the header 
        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
        // set the method
        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");
        // set the post fields
        curl_setopt($curl, CURLOPT_POSTFIELDS, $json);   
        // set option to stop the cURL from verify the peer's certificate
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false); 
        
        // execute cURL request
        $curl_response = curl_exec($curl);
        // get cURL response as array
        $response = json_decode($curl_response);
        // get the translated text as array
        $translated_texts = explode('|',$response->translation);
        
        // check if translated_texts is an array with more than 1 value => array of texts was translated
        if (is_array($translated_texts) && count($translated_texts) > 1 )
        {
            // for every translated text
            foreach ($translated_texts as $id => $value)
            {
                // get the original path to the translated text from $this->index_array
                $path = $this->index_array[$id];
                // create the translated texts array
                eval('$translated_texts_array'.$path.' = "'.addcslashes(trim($value,' '),'"').'";');
            }

            // return the translated texts array
            return $translated_texts_array;
        }
        
        // return simple text tanslated
        return $translated_texts[0];
    }
}                 
?> 