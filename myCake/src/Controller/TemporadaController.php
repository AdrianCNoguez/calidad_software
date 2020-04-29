<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Temporada Controller
 *
 *
 * @method \App\Model\Entity\Temporada[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TemporadaController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $temporada = $this->paginate($this->Temporada);

        $this->set(compact('temporada'));
    }

    /**
     * View method
     *
     * @param string|null $id Temporada id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $temporada = $this->Temporada->get($id, [
            'contain' => [],
        ]);

        $this->set('temporada', $temporada);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $temporada = $this->Temporada->newEntity();
        if ($this->request->is('post')) {
            $temporada = $this->Temporada->patchEntity($temporada, $this->request->getData());
            if ($this->Temporada->save($temporada)) {
                $this->Flash->success(__('The temporada has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The temporada could not be saved. Please, try again.'));
        }
        $this->set(compact('temporada'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Temporada id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $temporada = $this->Temporada->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $temporada = $this->Temporada->patchEntity($temporada, $this->request->getData());
            if ($this->Temporada->save($temporada)) {
                $this->Flash->success(__('The temporada has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The temporada could not be saved. Please, try again.'));
        }
        $this->set(compact('temporada'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Temporada id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $temporada = $this->Temporada->get($id);
        if ($this->Temporada->delete($temporada)) {
            $this->Flash->success(__('The temporada has been deleted.'));
        } else {
            $this->Flash->error(__('The temporada could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
