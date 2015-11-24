<?php
App::uses('AppController', 'Controller');
/**
 * Login Controller
 *
 * @property Login $Login
 */
class LoginController extends AppController {		
/**
 * Controller name
 *
 * @var string
 * @access public
 */
	public $name = 'Login';	

/**
 * Default helper
 *
 * @var array
 * @access public
 */
  	public $helpers = array('Session');
	
/**
 * This Companents  does not use a model
 *
 * @var array
 * @access public
 */
	public $components = array('Session');//,'Auth','Security');
		
/**
 * Those models are used in site for common
 *
 * @var array
 * @access public
 */
	public $uses = array('User');
	
	
/**
 * Default layout
 *
 * @var array
 * @access public
 */
	public $layout = 'adminlogin';
	
	public function admin_index() {
        
		if($this->request->is('post')){
			if(!empty($this->request->data['User']['email'])){
				$check=$this->User->find(array('email'=>$this->request->data['Adminuser']['email'],'status'=>'Active'));
				if(!empty($check))
				{
					$values = array($check['User']['first_ame'],$check['User']['last_name'],'admin1','<a href="'.BASE_URL.'admin/login">'.BASE_URL.'admin/login</a>',$check['User']['email']);
					$this->emailoptions(9, $values);
					
					$check['User']['password'] = md5('admin1');
					$this->User->save($check);
					$this->Session->setFlash("<div class='success msg'>Your password details sent to your email address.</div>",'');
					$this->redirect(array('action'=>'index'));
				}
				else
					$this->Session->setFlash("<div class='error msg'>Invalid email address.</div>",'');
					$this->set('result','forgot');
			}
			else{
				$check = $this->User->find(array('email'=>$this->request->data['User']['email']));
				
				if(!empty($check)){
					if($check['User']['password'] == md5($this->request->data['User']['password'])){//sha1($this->request->data['Adminuser']['password'])){
						if($check['User']['status'] == 'Active'){
							$this->Session->write($check);	
							$this->Session->write('user_id',$this->Session->read('User.id'));
							$this->redirect(array('controller'=>'dashboard','action'=>'index'));
						}
						else
							$this->Session->setFlash("<div class='error msg'>Account suspended.</div>,Sorry. Your account has been suspended by site admin.",'');
					}
					else
						$this->Session->setFlash("<div class='error msg'>Invalid Password.</div>,You entered an incorrect password. Please try again.",'');
				}
				else
					$this->Session->setFlash("<div class='error msg'>Invalid Username.</div>,You entered an incorrect username. Please try again.",'');
				$this->set('result','login');
			}
		}
		else
			$this->set('result','login');
	}
}
