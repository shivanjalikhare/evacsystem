<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Markers Controller
 *
 * @property \App\Model\Table\MarkersTable $Markers
 *
 * @method \App\Model\Entity\Marker[] paginate($object = null, array $settings = [])
 */
class MarkersController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $markers = $this->paginate($this->Markers);
        
        //$this->Markers->find()
        $this->set(compact('markers'));
        $this->set('_serialize', ['markers']);
        //$this->set('locationMarker', $this->Marker->locationMarker(location_Marker));
        $this->loadModel('Locations');

        $locations = $this->Locations->find('list',[
            'keyField' => 'id_locations',
            'valueField' => 'city',
        ]);
        $this->set(compact('locations'));
        $this->set('_serialize',['locations']);
    }

    /**
     * View method
     *
     * @param string|null $id Marker id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $markers = $this->paginate($this->Markers);

        $this->set('marker', $marker);
        $this->set('_serialize', ['marker']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $marker = $this->Markers->newEntity();
        if ($this->request->is('post')) {
            $marker = $this->Markers->patchEntity($marker, $this->request->getData());
            if ($this->Markers->save($marker)) {
                $this->Flash->success(__('The marker has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The marker could not be saved. Please, try again.'));
        }
        $this->set(compact('marker'));
        $this->set('_serialize', ['marker']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Marker id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        //$controllerName = $this->request->getParam('controller');
        //$controllerName = $this->request->param('controller');

        $markers = $this->paginate($this->Markers);
        
        
    //$this->Markers->find()
        $this->set(compact('markers'));
        $this->set('_serialize', ['markers']);
        //$this->set('locationMarker', $this->Marker->locationMarker(location_Marker));
        $this->loadModel('Locations');

        $locations = $this->Locations->find('list',[
            
            'valueField' => 'city',
        ]);
        $selected = $this->request->data('select');
        $locationsq = $this->Locations->find('all', 
                   array('conditions'=>array('Locations.id'=>$selected)));
   
        $locationsq1 = $this->Markers->find('all', 
                   array('conditions'=>array('Markers.name'=>$locationsq->first()['city'])));



        $markers = $locationsq1;
        $this->set(compact('locations'));
        $this->set('_serialize',['locations']);
       $this->set('markers', $markers);
        
        // $as = $this->Markers->find('id',$selected);
        // $result = $this->Marker->find('all',[
        // 'conditions'=> ['Markers.id >' => $_POST['location_bracket']],
        // 'contain' => ['lat', 'lng'], 
        // ]);
        // $this->set('result', $result);
        // echo $as;
    }

    /**
     * Delete method
     *
     * @param string|null $id Marker id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $marker = $this->Markers->get($id);
        if ($this->Markers->delete($marker)) {
            $this->Flash->success(__('The marker has been deleted.'));
        } else {
            $this->Flash->error(__('The marker could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
