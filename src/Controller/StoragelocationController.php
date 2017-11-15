<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Storagelocation Controller
 *
 *
 * @method \App\Model\Entity\Storagelocation[] paginate($object = null, array $settings = [])
 */
class StoragelocationController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $storagelocation = $this->paginate($this->Storagelocation);

        $this->set(compact('storagelocation'));
        $this->set('_serialize', ['storagelocation']);

        $this->paginate = [
           'contain' => ['Storagemarkers','City'],
           'order'  =>['Storagemarkers.id'=>'DESC']
    }

    /**
     * View method
     *
     * @param string|null $id Storagelocation id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $storagelocation = $this->Storagelocation->get($id, [
            'contain' => []
        ]);

        $this->set('storagelocation', $storagelocation);
        $this->set('_serialize', ['storagelocation']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $storagelocation = $this->Storagelocation->newEntity();
        if ($this->request->is('post')) {
            $storagelocation = $this->Storagelocation->patchEntity($storagelocation, $this->request->getData());
            if ($this->Storagelocation->save($storagelocation)) {
                $this->Flash->success(__('The storagelocation has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The storagelocation could not be saved. Please, try again.'));
        }
        $this->set(compact('storagelocation'));
        $this->set('_serialize', ['storagelocation']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Storagelocation id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $storagelocation = $this->Storagelocation->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $storagelocation = $this->Storagelocation->patchEntity($storagelocation, $this->request->getData());
            if ($this->Storagelocation->save($storagelocation)) {
                $this->Flash->success(__('The storagelocation has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The storagelocation could not be saved. Please, try again.'));
        }
        $this->set(compact('storagelocation'));
        $this->set('_serialize', ['storagelocation']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Storagelocation id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $storagelocation = $this->Storagelocation->get($id);
        if ($this->Storagelocation->delete($storagelocation)) {
            $this->Flash->success(__('The storagelocation has been deleted.'));
        } else {
            $this->Flash->error(__('The storagelocation could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
