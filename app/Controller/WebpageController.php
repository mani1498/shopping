<?php
App::uses('AppController', 'Controller');
/**
 * Pricings Controller
 *
 * @property Pricing $Pricing
 */
class WebpageController extends AppController {

	public $layout = 'webpage';
	
	var $helpers = array('Html','General','Date','Rgbconvert');
	
	var $uses = array('Slide','Staticpage','Refrence');
	
	var $components = array('Image','Cookie');
/**
 * admin_index method
 *
 * @return void
 */
	public function index() {
    	
	}
	
	
}
