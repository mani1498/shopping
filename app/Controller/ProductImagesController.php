<?php
App::uses('AppController', 'Controller');
/**
 * ProductImages Controller
 *
 * @property ProductImage $ProductImage
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class ProductImagesController extends AppController {

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
		$this->ProductImage->recursive = 0;
		$this->set('productImages', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ProductImage->exists($id)) {
			throw new NotFoundException(__('Invalid product image'));
		}
		$options = array('conditions' => array('ProductImage.' . $this->ProductImage->primaryKey => $id));
		$this->set('productImage', $this->ProductImage->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ProductImage->create();
			if ($this->ProductImage->save($this->request->data)) {
				$this->Flash->success(__('The product image has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The product image could not be saved. Please, try again.'));
			}
		}
		$products = $this->ProductImage->Product->find('list');
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
		if (!$this->ProductImage->exists($id)) {
			throw new NotFoundException(__('Invalid product image'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->ProductImage->save($this->request->data)) {
				$this->Flash->success(__('The product image has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The product image could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ProductImage.' . $this->ProductImage->primaryKey => $id));
			$this->request->data = $this->ProductImage->find('first', $options);
		}
		$products = $this->ProductImage->Product->find('list');
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
		$this->ProductImage->id = $id;
		if (!$this->ProductImage->exists()) {
			throw new NotFoundException(__('Invalid product image'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->ProductImage->delete()) {
			$this->Flash->success(__('The product image has been deleted.'));
		} else {
			$this->Flash->error(__('The product image could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->ProductImage->recursive = 0;
		$this->set('productImages', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->ProductImage->exists($id)) {
			throw new NotFoundException(__('Invalid product image'));
		}
		$options = array('conditions' => array('ProductImage.' . $this->ProductImage->primaryKey => $id));
		$this->set('productImage', $this->ProductImage->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->ProductImage->create();
			if ($this->ProductImage->save($this->request->data)) {
				$this->Flash->success(__('The product image has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The product image could not be saved. Please, try again.'));
			}
		}
		$products = $this->ProductImage->Product->find('list');
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
		if (!$this->ProductImage->exists($id)) {
			throw new NotFoundException(__('Invalid product image'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->ProductImage->save($this->request->data)) {
				$this->Flash->success(__('The product image has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The product image could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ProductImage.' . $this->ProductImage->primaryKey => $id));
			$this->request->data = $this->ProductImage->find('first', $options);
		}
		$products = $this->ProductImage->Product->find('list');
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
		$this->ProductImage->id = $id;
		if (!$this->ProductImage->exists()) {
			throw new NotFoundException(__('Invalid product image'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->ProductImage->delete()) {
			$this->Flash->success(__('The product image has been deleted.'));
		} else {
			$this->Flash->error(__('The product image could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
