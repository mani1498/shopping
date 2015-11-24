<?php
App::uses('AppController', 'Controller');
/**
 * Wishlists Controller
 *
 * @property Wishlist $Wishlist
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class WishlistsController extends AppController {

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
		$this->Wishlist->recursive = 0;
		$this->set('wishlists', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Wishlist->exists($id)) {
			throw new NotFoundException(__('Invalid wishlist'));
		}
		$options = array('conditions' => array('Wishlist.' . $this->Wishlist->primaryKey => $id));
		$this->set('wishlist', $this->Wishlist->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Wishlist->create();
			if ($this->Wishlist->save($this->request->data)) {
				$this->Flash->success(__('The wishlist has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The wishlist could not be saved. Please, try again.'));
			}
		}
		$customers = $this->Wishlist->Customer->find('list');
		$products = $this->Wishlist->Product->find('list');
		$this->set(compact('customers', 'products'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Wishlist->exists($id)) {
			throw new NotFoundException(__('Invalid wishlist'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Wishlist->save($this->request->data)) {
				$this->Flash->success(__('The wishlist has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The wishlist could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Wishlist.' . $this->Wishlist->primaryKey => $id));
			$this->request->data = $this->Wishlist->find('first', $options);
		}
		$customers = $this->Wishlist->Customer->find('list');
		$products = $this->Wishlist->Product->find('list');
		$this->set(compact('customers', 'products'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Wishlist->id = $id;
		if (!$this->Wishlist->exists()) {
			throw new NotFoundException(__('Invalid wishlist'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Wishlist->delete()) {
			$this->Flash->success(__('The wishlist has been deleted.'));
		} else {
			$this->Flash->error(__('The wishlist could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Wishlist->recursive = 0;
		$this->set('wishlists', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Wishlist->exists($id)) {
			throw new NotFoundException(__('Invalid wishlist'));
		}
		$options = array('conditions' => array('Wishlist.' . $this->Wishlist->primaryKey => $id));
		$this->set('wishlist', $this->Wishlist->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Wishlist->create();
			if ($this->Wishlist->save($this->request->data)) {
				$this->Flash->success(__('The wishlist has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The wishlist could not be saved. Please, try again.'));
			}
		}
		$customers = $this->Wishlist->Customer->find('list');
		$products = $this->Wishlist->Product->find('list');
		$this->set(compact('customers', 'products'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Wishlist->exists($id)) {
			throw new NotFoundException(__('Invalid wishlist'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Wishlist->save($this->request->data)) {
				$this->Flash->success(__('The wishlist has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The wishlist could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Wishlist.' . $this->Wishlist->primaryKey => $id));
			$this->request->data = $this->Wishlist->find('first', $options);
		}
		$customers = $this->Wishlist->Customer->find('list');
		$products = $this->Wishlist->Product->find('list');
		$this->set(compact('customers', 'products'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Wishlist->id = $id;
		if (!$this->Wishlist->exists()) {
			throw new NotFoundException(__('Invalid wishlist'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Wishlist->delete()) {
			$this->Flash->success(__('The wishlist has been deleted.'));
		} else {
			$this->Flash->error(__('The wishlist could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
