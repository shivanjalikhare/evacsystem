<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * EmergencyContacts Controller
 *
 * @property \App\Model\Table\EmergencyContactsTable $EmergencyContacts
 *
 * @method \App\Model\Entity\EmergencyContact[] paginate($object = null, array $settings = [])
 */
class EmergencyContactsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $emergencyContacts = $this->paginate($this->EmergencyContacts);

        $this->set(compact('emergencyContacts'));
        $this->set('_serialize', ['emergencyContacts']);
    }

    /**
     * View method
     *
     * @param string|null $id Emergency Contact id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $emergencyContact = $this->EmergencyContacts->get($id, [
            'contain' => []
        ]);

        $this->set('emergencyContact', $emergencyContact);
        $this->set('_serialize', ['emergencyContact']);
    }
	
	public function sendEmail($user_email)
    {
      
        $email = new Email();
        $email->viewVars(['value' => 12345]);       
        
        $email
            ->template('emergency')
            ->emailFormat('html')
            ->to($user_email)
            ->send();   

        $this->Flash->success(__('Email sent.'));

        return $this->redirect(['controller'=>'EmergencyContacts','action' => 'index']);

    }
	
	

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $emergencyContact = $this->EmergencyContacts->newEntity();
        if ($this->request->is('post')) {
            $emergencyContact = $this->EmergencyContacts->patchEntity($emergencyContact, $this->request->getData());
            if ($this->EmergencyContacts->save($emergencyContact)) {
                $this->Flash->success(__('The emergency contact has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The emergency contact could not be saved. Please, try again.'));
        }
        $this->set(compact('emergencyContact'));
        $this->set('_serialize', ['emergencyContact']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Emergency Contact id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $emergencyContact = $this->EmergencyContacts->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $emergencyContact = $this->EmergencyContacts->patchEntity($emergencyContact, $this->request->getData());
            if ($this->EmergencyContacts->save($emergencyContact)) {
                $this->Flash->success(__('The emergency contact has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The emergency contact could not be saved. Please, try again.'));
        }
        $this->set(compact('emergencyContact'));
        $this->set('_serialize', ['emergencyContact']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Emergency Contact id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $emergencyContact = $this->EmergencyContacts->get($id);
        if ($this->EmergencyContacts->delete($emergencyContact)) {
            $this->Flash->success(__('The emergency contact has been deleted.'));
        } else {
            $this->Flash->error(__('The emergency contact could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
