<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Storagemarkers Controller
 *
 * @property \App\Model\Table\StoragemarkersTable $Storagemarkers
 *
 * @method \App\Model\Entity\Storagemarker[] paginate($object = null, array $settings = [])
 */
class StoragemarkersController extends AppController
{

     /**
     * View method
     *
     * @param string|null $id Storagemarker id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {

        $storagemarkers = $this->paginate($this->Storagemarkers);
        
        $this->loadModel('Storagelocation');

        $storagelocation = $this->Storagelocation->find('list',[
            
            'valueField' => 'city',
        ]);
        $selected = $this->request->data('select');
        $locationsq = $this->Storagelocation->find('all', 
                   array('conditions'=>array('Storagelocation.id'=>$selected)));
   
        $locationsq1 = $this->Storagemarkers->find('all', 
                   array('conditions'=>array('Storagemarkers.name'=>$locationsq->first()['city'])));



        $storagemarkers = $locationsq1;
        $this->set(compact('storagelocation'));
        $this->set('_serialize',['storagelocation']);
        $this->set('storagemarkers', $storagemarkers);

       
    }
}
