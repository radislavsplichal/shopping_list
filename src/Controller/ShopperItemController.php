<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ShopperItem Controller
 *
 * @property \App\Model\Table\ShopperItemTable $ShopperItem
 *
 * @method \App\Model\Entity\ShopperItem[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ShopperItemController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $shopperItem = $this->paginate($this->ShopperItem);

        $this->set(compact('shopperItem'));
    }

    /**
     * View method
     *
     * @param string|null $id Shopper Item id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $shopperItem = $this->ShopperItem->get($id, [
            'contain' => []
        ]);

        $this->set('shopperItem', $shopperItem);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $shopperItem = $this->ShopperItem->newEntity();
        if ($this->request->is('post')) {
            $shopperItem = $this->ShopperItem->patchEntity($shopperItem, $this->request->getData());
            if ($this->ShopperItem->save($shopperItem)) {
                $this->Flash->success(__('The shopper item has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The shopper item could not be saved. Please, try again.'));
        }
        $this->set(compact('shopperItem'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Shopper Item id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $shopperItem = $this->ShopperItem->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $shopperItem = $this->ShopperItem->patchEntity($shopperItem, $this->request->getData());
            if ($this->ShopperItem->save($shopperItem)) {
                $this->Flash->success(__('The shopper item has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The shopper item could not be saved. Please, try again.'));
        }
        $this->set(compact('shopperItem'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Shopper Item id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $shopperItem = $this->ShopperItem->get($id);
        if ($this->ShopperItem->delete($shopperItem)) {
            $this->Flash->success(__('The shopper item has been deleted.'));
        } else {
            $this->Flash->error(__('The shopper item could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
