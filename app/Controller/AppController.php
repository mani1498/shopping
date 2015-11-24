<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {
    
   /**
 * Components
 *
 * @var array
 */
	//public $components = array('Image','Paypal','Session','Recaptcha','Cookie');//,'Pagination'// class variables
	
/**
 * Helpers
 *
 * @var array
 */
	public $helpers = array('Session');//,'Pagination'
	
/**
 * Those models are used in site for common
 *
 * @var array
 * @access public
 */
	public $uses = array('User','Setting','Category');
	
	/* 
    
    
    /**
 * checkadmin method
 *
 * @return void
 */
	public function checkadmin(){
		//pr($this->Session->read());
		if(!$this->Session->read('User')){//echo 'hi1';exit;
			$this->redirect(array('controller'=>'login','action'=>'index'));
		}
		else{//echo 'hi';exit;
			$this->set('adminuser', $this->User->find(array('id'=>$this->Session->read('User.id'))));
		}
	}
	
}
