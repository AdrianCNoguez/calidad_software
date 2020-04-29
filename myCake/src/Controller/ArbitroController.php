<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Arbitro Controller
 *
 *
 * @method \App\Model\Entity\Arbitro[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ArbitroController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $arbitro = $this->paginate($this->Arbitro);

        $this->set(compact('arbitro'));
    }

    /**
     * View method
     *
     * @param string|null $id Arbitro id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $arbitro = $this->Arbitro->get($id, [
            'contain' => [],
        ]);

        $this->set('arbitro', $arbitro);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $arbitro = $this->Arbitro->newEntity();
        if ($this->request->is('post')) {
            $arbitro = $this->Arbitro->patchEntity($arbitro, $this->request->getData());
            if ($this->Arbitro->save($arbitro)) {
                $this->Flash->success(__('The arbitro has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The arbitro could not be saved. Please, try again.'));
        }
        $this->set(compact('arbitro'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Arbitro id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $arbitro = $this->Arbitro->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $arbitro = $this->Arbitro->patchEntity($arbitro, $this->request->getData());
            if ($this->Arbitro->save($arbitro)) {
                $this->Flash->success(__('The arbitro has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The arbitro could not be saved. Please, try again.'));
        }
        $this->set(compact('arbitro'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Arbitro id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $arbitro = $this->Arbitro->get($id);
        if ($this->Arbitro->delete($arbitro)) {
            $this->Flash->success(__('The arbitro has been deleted.'));
        } else {
            $this->Flash->error(__('The arbitro could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
