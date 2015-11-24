<?php
App::uses('AppController', 'Controller');
/**
 * SocialSharings Controller
 *
 * @property SocialSharing $SocialSharing
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class SocialSharingsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Flash', 'Session');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->SocialSharing->recursive = 0;
		$this->set('socialSharings', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->SocialSharing->exists($id)) {
			throw new NotFoundException(__('Invalid social sharing'));
		}
		$options = array('conditions' => array('SocialSharing.' . $this->SocialSharing->primaryKey => $id));
		$this->set('socialSharing', $this->SocialSharing->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->SocialSharing->create();
			if ($this->SocialSharing->save($this->request->data)) {
				$this->Flash->success(__('The social sharing has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The social sharing could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->SocialSharing->exists($id)) {
			throw new NotFoundException(__('Invalid social sharing'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->SocialSharing->save($this->request->data)) {
				$this->Flash->success(__('The social sharing has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The social sharing could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('SocialSharing.' . $this->SocialSharing->primaryKey => $id));
			$this->request->data = $this->SocialSharing->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->SocialSharing->id = $id;
		if (!$this->SocialSharing->exists()) {
			throw new NotFoundException(__('Invalid social sharing'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->SocialSharing->delete()) {
			$this->Flash->success(__('The social sharing has been deleted.'));
		} else {
			$this->Flash->error(__('The social sharing could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->SocialSharing->recursive = 0;
		$this->set('socialSharings', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->SocialSharing->exists($id)) {
			throw new NotFoundException(__('Invalid social sharing'));
		}
		$options = array('conditions' => array('SocialSharing.' . $this->SocialSharing->primaryKey => $id));
		$this->set('socialSharing', $this->SocialSharing->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->SocialSharing->create();
			if ($this->SocialSharing->save($this->request->data)) {
				$this->Flash->success(__('The social sharing has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The social sharing could not be saved. Please, try again.'));
			}
		}
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->SocialSharing->exists($id)) {
			throw new NotFoundException(__('Invalid social sharing'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->SocialSharing->save($this->request->data)) {
				$this->Flash->success(__('The social sharing has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The social sharing could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('SocialSharing.' . $this->SocialSharing->primaryKey => $id));
			$this->request->data = $this->SocialSharing->find('first', $options);
		}
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->SocialSharing->id = $id;
		if (!$this->SocialSharing->exists()) {
			throw new NotFoundException(__('Invalid social sharing'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->SocialSharing->delete()) {
			$this->Flash->success(__('The social sharing has been deleted.'));
		} else {
			$this->Flash->error(__('The social sharing could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
