<?php
App::uses('AppController', 'Controller');
/**
 * ProductVarients Controller
 *
 * @property ProductVarient $ProductVarient
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class ProductVarientsController extends AppController {

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
		$this->ProductVarient->recursive = 0;
		$this->set('productVarients', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ProductVarient->exists($id)) {
			throw new NotFoundException(__('Invalid product varient'));
		}
		$options = array('conditions' => array('ProductVarient.' . $this->ProductVarient->primaryKey => $id));
		$this->set('productVarient', $this->ProductVarient->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ProductVarient->create();
			if ($this->ProductVarient->save($this->request->data)) {
				$this->Flash->success(__('The product varient has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The product varient could not be saved. Please, try again.'));
			}
		}
		$products = $this->ProductVarient->Product->find('list');
		$this->set(compact('products'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->ProductVarient->exists($id)) {
			throw new NotFoundException(__('Invalid product varient'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->ProductVarient->save($this->request->data)) {
				$this->Flash->success(__('The product varient has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The product varient could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ProductVarient.' . $this->ProductVarient->primaryKey => $id));
			$this->request->data = $this->ProductVarient->find('first', $options);
		}
		$products = $this->ProductVarient->Product->find('list');
		$this->set(compact('products'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->ProductVarient->id = $id;
		if (!$this->ProductVarient->exists()) {
			throw new NotFoundException(__('Invalid product varient'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->ProductVarient->delete()) {
			$this->Flash->success(__('The product varient has been deleted.'));
		} else {
			$this->Flash->error(__('The product varient could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->ProductVarient->recursive = 0;
		$this->set('productVarients', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->ProductVarient->exists($id)) {
			throw new NotFoundException(__('Invalid product varient'));
		}
		$options = array('conditions' => array('ProductVarient.' . $this->ProductVarient->primaryKey => $id));
		$this->set('productVarient', $this->ProductVarient->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->ProductVarient->create();
			if ($this->ProductVarient->save($this->request->data)) {
				$this->Flash->success(__('The product varient has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The product varient could not be saved. Please, try again.'));
			}
		}
		$products = $this->ProductVarient->Product->find('list');
		$this->set(compact('products'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->ProductVarient->exists($id)) {
			throw new NotFoundException(__('Invalid product varient'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->ProductVarient->save($this->request->data)) {
				$this->Flash->success(__('The product varient has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The product varient could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ProductVarient.' . $this->ProductVarient->primaryKey => $id));
			$this->request->data = $this->ProductVarient->find('first', $options);
		}
		$products = $this->ProductVarient->Product->find('list');
		$this->set(compact('products'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->ProductVarient->id = $id;
		if (!$this->ProductVarient->exists()) {
			throw new NotFoundException(__('Invalid product varient'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->ProductVarient->delete()) {
			$this->Flash->success(__('The product varient has been deleted.'));
		} else {
			$this->Flash->error(__('The product varient could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
