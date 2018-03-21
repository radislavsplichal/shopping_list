<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ShopperUser Controller
 *
 * @property \App\Model\Table\ShopperUserTable $ShopperUser
 *
 * @method \App\Model\Entity\ShopperUser[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ShopperUserController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $shopperUser = $this->paginate($this->ShopperUser);

        $this->set(compact('shopperUser'));
    }

    /**
     * View method
     *
     * @param string|null $id Shopper User id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $shopperUser = $this->ShopperUser->get($id, [
            'contain' => []
        ]);

        $this->set('shopperUser', $shopperUser);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $shopperUser = $this->ShopperUser->newEntity();
        if ($this->request->is('post')) {
            $shopperUser = $this->ShopperUser->patchEntity($shopperUser, $this->request->getData());
            if ($this->ShopperUser->save($shopperUser)) {
                $this->Flash->success(__('The shopper user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The shopper user could not be saved. Please, try again.'));
        }
        $this->set(compact('shopperUser'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Shopper User id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $shopperUser = $this->ShopperUser->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $shopperUser = $this->ShopperUser->patchEntity($shopperUser, $this->request->getData());
            if ($this->ShopperUser->save($shopperUser)) {
                $this->Flash->success(__('The shopper user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The shopper user could not be saved. Please, try again.'));
        }
        $this->set(compact('shopperUser'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Shopper User id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $shopperUser = $this->ShopperUser->get($id);
        if ($this->ShopperUser->delete($shopperUser)) {
            $this->Flash->success(__('The shopper user has been deleted.'));
        } else {
            $this->Flash->error(__('The shopper user could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
