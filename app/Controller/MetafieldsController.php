<?php
App::uses('AppController', 'Controller');
/**
 * Metafields Controller
 *
 * @property Metafield $Metafield
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class MetafieldsController extends AppController {

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
		$this->Metafield->recursive = 0;
		$this->set('metafields', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Metafield->exists($id)) {
			throw new NotFoundException(__('Invalid metafield'));
		}
		$options = array('conditions' => array('Metafield.' . $this->Metafield->primaryKey => $id));
		$this->set('metafield', $this->Metafield->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Metafield->create();
			if ($this->Metafield->save($this->request->data)) {
				$this->Flash->success(__('The metafield has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The metafield could not be saved. Please, try again.'));
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
		if (!$this->Metafield->exists($id)) {
			throw new NotFoundException(__('Invalid metafield'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Metafield->save($this->request->data)) {
				$this->Flash->success(__('The metafield has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The metafield could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Metafield.' . $this->Metafield->primaryKey => $id));
			$this->request->data = $this->Metafield->find('first', $options);
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
		$this->Metafield->id = $id;
		if (!$this->Metafield->exists()) {
			throw new NotFoundException(__('Invalid metafield'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Metafield->delete()) {
			$this->Flash->success(__('The metafield has been deleted.'));
		} else {
			$this->Flash->error(__('The metafield could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Metafield->recursive = 0;
		$this->set('metafields', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Metafield->exists($id)) {
			throw new NotFoundException(__('Invalid metafield'));
		}
		$options = array('conditions' => array('Metafield.' . $this->Metafield->primaryKey => $id));
		$this->set('metafield', $this->Metafield->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Metafield->create();
			if ($this->Metafield->save($this->request->data)) {
				$this->Flash->success(__('The metafield has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The metafield could not be saved. Please, try again.'));
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
		if (!$this->Metafield->exists($id)) {
			throw new NotFoundException(__('Invalid metafield'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Metafield->save($this->request->data)) {
				$this->Flash->success(__('The metafield has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The metafield could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Metafield.' . $this->Metafield->primaryKey => $id));
			$this->request->data = $this->Metafield->find('first', $options);
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
		$this->Metafield->id = $id;
		if (!$this->Metafield->exists()) {
			throw new NotFoundException(__('Invalid metafield'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Metafield->delete()) {
			$this->Flash->success(__('The metafield has been deleted.'));
		} else {
			$this->Flash->error(__('The metafield could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
