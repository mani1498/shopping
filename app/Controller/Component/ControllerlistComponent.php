<?php
class ControllerlistComponent extends Component {
    public function get() {
        $controllerClasses = App::objects('controller');
		foreach($controllerClasses as $controller) {
			if ($controller != 'AppController' && $controller != 'WebpageController') { 
				$lists[] = str_replace('Controller', '', $controller);
			}
		}		     
        return $lists;  
    }
}
