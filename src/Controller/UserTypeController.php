<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * UserType Controller
 *
 * @property \App\Model\Table\UserTypeTable $UserType
 *
 * @method \App\Model\Entity\UserType[] paginate($object = null, array $settings = [])
 */
class UserTypeController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $user_type = $this->paginate($this->user_type);

        $this->set(compact('user_type'));
        $this->set('_serialize', ['user_type']);
        $this->set('user_type',
            $this->user_type->find('list',array('fields'=>array('type')))
        );
    }

    /**
     * View method
     *
     * @param string|null $id User Type id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $user_type = $this->user_type->get($id, [
            'contain' => []
        ]);

        $this->set('user_type', $user_type);
        $this->set('_serialize', ['user_type']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $user_type = $this->user_type->newEntity();
        if ($this->request->is('post')) {
            $user_type = $this->user_type->patchEntity($user_type, $this->request->getData());
            if ($this->user_type->save($user_type)) {
                $this->Flash->success(__('The user type has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user type could not be saved. Please, try again.'));
        }
        $this->set(compact('userType'));
        $this->set('_serialize', ['user_type']);
    }

    /**
     * Edit method
     *
     * @param string|null $id User Type id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $user_type = $this->user_type->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user_type = $this->user_type->patchEntity($user_type, $this->request->getData());
            if ($this->user_type->save($user_type)) {
                $this->Flash->success(__('The user type has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user type could not be saved. Please, try again.'));
        }
        $this->set(compact('user_type'));
        $this->set('_serialize', ['user_type']);
    }

    /**
     * Delete method
     *
     * @param string|null $id User Type id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $user_type = $this->user_type->get($id);
        if ($this->user_type->delete($user_type)) {
            $this->Flash->success(__('The user type has been deleted.'));
        } else {
            $this->Flash->error(__('The user type could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function get_by_id($id=null) {

    $id = $this->request->data['user_type']['id'];
    $this->loadModel('type');
    $subcategories = $this->type->find('list',array(
        'conditions' => array('type.id' => $id),
        'fields' = 'description',
        'recursive' => -1
    ));
    $this->set('type',$subcategories);
    $this->layout = 'ajax';
   } 
}
