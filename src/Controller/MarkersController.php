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

     * View method
     *
     * @param string|null $id Marker id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {

        $markers = $this->paginate($this->Markers);
        

        $this->set(compact('markers'));
        $this->set('_serialize', ['markers']);

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

       
    }
}
