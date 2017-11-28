<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Mailer\Email;
use Cake\Mailer\MailerAwareTrait;
use Cake\Mailer\Mailer;
/**
 * Volunteerregistration Controller
 *
 * @property \App\Model\Table\VolunteerregistrationTable $Volunteerregistration
 *
 * @method \App\Model\Entity\Volunteerregistration[] paginate($object = null, array $settings = [])
 */
class VolunteerregistrationController extends AppController
{
    use MailerAwareTrait;

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $volunteerregistration = $this->paginate($this->Volunteerregistration);

        $this->set(compact('volunteerregistration'));
        $this->set('_serialize', ['volunteerregistration']);
    }

    /**
     * View method
     *
     * @param string|null $id Volunteerregistration id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $volunteerregistration = $this->Volunteerregistration->get($id, [
            'contain' => []
        ]);

        $this->set('volunteerregistration', $volunteerregistration);
        $this->set('_serialize', ['volunteerregistration']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $volunteerregistration = $this->Volunteerregistration->newEntity();
        if ($this->request->is('post')) {
            $volunteerregistration = $this->Volunteerregistration->patchEntity($volunteerregistration, $this->request->getData());
            if ($this->Volunteerregistration->save($volunteerregistration)) {
                $this->Flash->success(__('The volunteerregistration has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The volunteerregistration could not be saved. Please, try again.'));
        }
        $this->set(compact('volunteerregistration'));
        $this->set('_serialize', ['volunteerregistration']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Volunteerregistration id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $volunteerregistration = $this->Volunteerregistration->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $volunteerregistration = $this->Volunteerregistration->patchEntity($volunteerregistration, $this->request->getData());
            if ($this->Volunteerregistration->save($volunteerregistration)) {
                $this->Flash->success(__('The volunteerregistration has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The volunteerregistration could not be saved. Please, try again.'));
        }
        $this->set(compact('volunteerregistration'));
        $this->set('_serialize', ['volunteerregistration']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Volunteerregistration id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $volunteerregistration = $this->Volunteerregistration->get($id);
        if ($this->Volunteerregistration->delete($volunteerregistration)) {
            $this->Flash->success(__('The volunteerregistration has been deleted.'));
        } else {
            $this->Flash->error(__('The volunteerregistration could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function sendEmail($user_email)
    {
      
        $loggedinuser = $this->request->session()->read('Auth.User');
        $email = new Email();
        $email->viewVars(['value' =>  $loggedinuser['email']]);  


        $email
            ->template('volunteer')
            ->emailFormat('html')
            ->subject(sprintf('Volunteer support'))
            ->viewVars(['username'=>$user_email ,'useremail'=>$user_email])
            ->to($user_email)
            ->send();   

        $this->Flash->success(__('Email sent.'));

        return $this->redirect(['action' => 'index']);
    }

}
