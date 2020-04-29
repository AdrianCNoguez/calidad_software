<?php
namespace App\Controller;

use App\Controller\AppController;
use Plivo\RestClient;


/**
 * SMS Controller
 *
 *
 * @method \App\Model\Entity\SM[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SMSController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $sMS = $this->paginate($this->SMS);

        $this->set(compact('sMS'));
    }

    /**
     * View method
     *
     * @param string|null $id S M id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $sM = $this->SMS->get($id, [
            'contain' => [],
        ]);

        $this->set('sM', $sM);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
/*
$client = new RestClient("MAY2M3ODRMYTG4MMYXYZ", "ZDJlZDIwMDg5MGQ1YjczZjhkOWM2YzcyMWFkMTdm");
$message_created = $client->messages->create(
'+13862671187',
['+525525665055'],
'Hello, world!'
);*/
    //return $this->redirect(['action' => 'index']);
    public function add()
    {
        $sM = $this->SMS->newEntity();
        if ($this->request->is('post')) {
            $sM = $this->SMS->patchEntity($sM, $this->request->getData());
           echo $sM->telefono;
            echo gettype($sM);

            $client = new RestClient("MAY2M3ODRMYTG4MMYXYZ", "ZDJlZDIwMDg5MGQ1YjczZjhkOWM2YzcyMWFkMTdm");
            $message_created = $client->messages->create(
                '+13862671187',
                ['+52'.$sM->telefono],
                $sM->mensaje
            );


            if ($this->SMS->save($sM)) {
                $this->Flash->success(__('The s m has been saved.'));
                //echo var_dump($this->request);
                return $this->redirect(['action' => 'add']);
            }
            $this->Flash->error(__('The s m could not be saved. Please, try again.'));
        }
        $this->set(compact('sM'));
    }

    /**
     * Edit method
     *
     * @param string|null $id S M id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $sM = $this->SMS->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $sM = $this->SMS->patchEntity($sM, $this->request->getData());
            if ($this->SMS->save($sM)) {
                $this->Flash->success(__('The s m has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The s m could not be saved. Please, try again.'));
        }
        $this->set(compact('sM'));
    }

    /**
     * Delete method
     *
     * @param string|null $id S M id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $sM = $this->SMS->get($id);
        if ($this->SMS->delete($sM)) {
            $this->Flash->success(__('The s m has been deleted.'));
        } else {
            $this->Flash->error(__('The s m could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
