<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Televiciones Controller
 *
 *
 * @method \App\Model\Entity\Televicione[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TelevicionesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $televiciones = $this->paginate($this->Televiciones);

        $this->set(compact('televiciones'));
    }

    /**
     * View method
     *
     * @param string|null $id Televicione id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $televicione = $this->Televiciones->get($id, [
            'contain' => [],
        ]);

        $this->set('televicione', $televicione);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $televicione = $this->Televiciones->newEntity();
        if ($this->request->is('post')) {
            $televicione = $this->Televiciones->patchEntity($televicione, $this->request->getData());
            if ($this->Televiciones->save($televicione)) {
                $this->Flash->success(__('The televicione has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The televicione could not be saved. Please, try again.'));
        }
        $medio=$this->Televiciones->Medios->find('all');
        $this->set(compact('televicione'));
        $this->set(compact('medio'));

        $encuentro=$this->Televiciones->Encuentro->find('all');
        $this->set(compact('televicione'));
        $this->set(compact('encuentro'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Televicione id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $televicione = $this->Televiciones->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $televicione = $this->Televiciones->patchEntity($televicione, $this->request->getData());
            if ($this->Televiciones->save($televicione)) {
                $this->Flash->success(__('The televicione has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The televicione could not be saved. Please, try again.'));
        }
        $medio=$this->Televiciones->Medios->find('all');
        $this->set(compact('televicione'));
        $this->set(compact('medio'));

        $encuentro=$this->Televiciones->Encuentro->find('all');
        $this->set(compact('televicione'));
        $this->set(compact('encuentro'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Televicione id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $televicione = $this->Televiciones->get($id);
        if ($this->Televiciones->delete($televicione)) {
            $this->Flash->success(__('The televicione has been deleted.'));
        } else {
            $this->Flash->error(__('The televicione could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
