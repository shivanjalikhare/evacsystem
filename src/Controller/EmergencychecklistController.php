<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Emergencychecklist Controller
 *
 * @property \App\Model\Table\EmergencychecklistTable $Emergencychecklist
 *
 * @method \App\Model\Entity\Emergencychecklist[] paginate($object = null, array $settings = [])
 */
class EmergencychecklistController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $emergencychecklist = $this->paginate($this->Emergencychecklist);

        $this->set(compact('emergencychecklist'));
        $this->set('_serialize', ['emergencychecklist']);
     
    }


    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $emergencychecklist = $this->Emergencychecklist->newEntity();
        if ($this->request->is('post')) {
            $emergencychecklist = $this->Emergencychecklist->patchEntity($emergencychecklist, $this->request->getData());
            if ($this->Emergencychecklist->save($emergencychecklist)) {
                $this->Flash->success(__('The emergencychecklist has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The emergencychecklist could not be saved. Please, try again.'));
        }
        $this->set(compact('emergencychecklist'));
        $this->set('_serialize', ['emergencychecklist']);

        
    }

    
    /**
     * Delete method
     *
     * @param string|null $id Emergencychecklist id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $emergencychecklist = $this->Emergencychecklist->get($id);
        if ($this->Emergencychecklist->delete($emergencychecklist)) {
            $this->Flash->success(__('The emergencychecklist has been deleted.'));
        } else {
            $this->Flash->error(__('The emergencychecklist could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'add']);
    }
}
