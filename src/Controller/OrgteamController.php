<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Orgteam Controller
 *
 * @property \App\Model\Table\OrgteamTable $Orgteam
 *
 * @method \App\Model\Entity\Orgteam[] paginate($object = null, array $settings = [])
 */
class OrgteamController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $orgteam = $this->paginate($this->Orgteam);

        $this->set(compact('orgteam'));
        $this->set('_serialize', ['orgteam']);
    }

    /**
     * View method
     *
     * @param string|null $id Orgteam id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $orgteam = $this->Orgteam->get($id, [
            'contain' => []
        ]);

        $this->set('orgteam', $orgteam);
        $this->set('_serialize', ['orgteam']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $orgteam = $this->Orgteam->newEntity();
        if ($this->request->is('post')) {
            $orgteam = $this->Orgteam->patchEntity($orgteam, $this->request->getData());
            if ($this->Orgteam->save($orgteam)) {
                $this->Flash->success(__('The orgteam has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The orgteam could not be saved. Please, try again.'));
        }
        $this->set(compact('orgteam'));
        $this->set('_serialize', ['orgteam']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Orgteam id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $orgteam = $this->Orgteam->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $orgteam = $this->Orgteam->patchEntity($orgteam, $this->request->getData());
            if ($this->Orgteam->save($orgteam)) {
                $this->Flash->success(__('The orgteam has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The orgteam could not be saved. Please, try again.'));
        }
        $this->set(compact('orgteam'));
        $this->set('_serialize', ['orgteam']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Orgteam id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $orgteam = $this->Orgteam->get($id);
        if ($this->Orgteam->delete($orgteam)) {
            $this->Flash->success(__('The orgteam has been deleted.'));
        } else {
            $this->Flash->error(__('The orgteam could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
