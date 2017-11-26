<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\Mailer\Email;
use Cake\Mailer\MailerAwareTrait;
use App\Controller\Admin;
use App\Model\Table\UsersTable;
use Cake\ORM\TableRegistry;

/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 *
 * @method \App\Model\Entity\User[] paginate($object = null, array $settings = [])
 */
class AdminController extends AppController
{
	use MailerAwareTrait;
    //$this->Users = TableRegistry::get('Users');



    public function beforeFilter(Event $event){
        $this->Auth->allow(['signup','adminlogin']);
        //return $this->redirect(['action'=>'adminlogin']);
    }



	public function adminlogin()
    {
    	if($this->request->is('post')){//check if login form is submitted
        //if user is not already logged in, attempt to log in        
        	$user = $this->Auth->identify();
        	if($user['Type']==0) {
                //$this->Flash->error(__('Sorry, user type mismatch'));
                $this->Auth->setUser($user);
                //redirect
                $this->Flash->success(__('Admin Login Successful!'));
                return $this->redirect(['controller'=>'Admin', 'action'=>'adminUserDashboard']);   
            }


            $this->Flash->error(__('Sorry, the login was not successful'));

    								}
    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function indexUsersAdmin()
    {
        $userTable = $this->Users = TableRegistry::get('Users');
        $users = $this->paginate($this->Users);

        $this->set(compact('users'));
        $this->set('_serialize', ['users']);
     }   


     public function adminlogout()
    {
        
        $this->Flash->success("You are logged out");
        $url = $this->Auth->logout();
        $this->request->session()->destroy();
        return $this->redirect(['action'=>'adminlogin']);

    }

    public function adminUserDashboard()
    {

    }

    public function admindelete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $userTable = $this->Users = TableRegistry::get('Users');

        $user = $this->Users->get($id);
        if ($this->Users->delete($user)) {
            $this->Flash->success(__('The user has been deleted.'));
        } else {
            $this->Flash->error(__('The user could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index_users_admin']);
    }


    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        
        $this->Users = TableRegistry::get('Users');
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->getMailer('User')->send('registered', [$user]); // sends emails.
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index_users_admin']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $this->set(compact('user'));
        $this->set('_serialize', ['user']);
    }

    /**
     * View method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $this->Users = TableRegistry::get('Users');
        $user = $this->Users->get($id, [
            'contain' => []
        ]);

        $this->set('user', $user);
        $this->set('_serialize', ['user']);
    }

     /**
     * Edit method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $this->Users = TableRegistry::get('Users');
        $user = $this->Users->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index_users_admin']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $this->set(compact('user'));
        $this->set('_serialize', ['user']);
    }
	
	public function adminweatherforecast()
    {

    }
}
