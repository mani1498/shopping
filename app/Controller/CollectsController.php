<?php
App::uses('AppController', 'Controller');
/**
 * Collects Controller
 *
 * @property Collect $Collect
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class CollectsController extends AppController {

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
		$this->Collect->recursive = 0;
		$this->set('collects', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Collect->exists($id)) {
			throw new NotFoundException(__('Invalid collect'));
		}
		$options = array('conditions' => array('Collect.' . $this->Collect->primaryKey => $id));
		$this->set('collect', $this->Collect->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Collect->create();
			if ($this->Collect->save($this->request->data)) {
				$this->Flash->success(__('The collect has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The collect could not be saved. Please, try again.'));
			}
		}
		$categories = $this->Collect->Category->find('list');
		$products = $this->Collect->Product->find('list');
		$this->set(compact('categories', 'products'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Collect->exists($id)) {
			throw new NotFoundException(__('Invalid collect'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Collect->save($this->request->data)) {
				$this->Flash->success(__('The collect has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The collect could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Collect.' . $this->Collect->primaryKey => $id));
			$this->request->data = $this->Collect->find('first', $options);
		}
		$categories = $this->Collect->Category->find('list');
		$products = $this->Collect->Product->find('list');
		$this->set(compact('categories', 'products'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Collect->id = $id;
		if (!$this->Collect->exists()) {
			throw new NotFoundException(__('Invalid collect'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Collect->delete()) {
			$this->Flash->success(__('The collect has been deleted.'));
		} else {
			$this->Flash->error(__('The collect could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
