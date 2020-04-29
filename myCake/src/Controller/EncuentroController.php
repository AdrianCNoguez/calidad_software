<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Encuentro Controller
 *
 *
 * @method \App\Model\Entity\Encuentro[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class EncuentroController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $encuentro = $this->paginate($this->Encuentro);

        $this->set(compact('encuentro'));
    }

    /**
     * View method
     *
     * @param string|null $id Encuentro id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $encuentro = $this->Encuentro->get($id, [
            'contain' => [],
        ]);

        $this->set('encuentro', $encuentro);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $encuentro = $this->Encuentro->newEntity();
        if ($this->request->is('post')) {
            $encuentro = $this->Encuentro->patchEntity($encuentro, $this->request->getData());
            if ($this->Encuentro->save($encuentro)) {
                $this->Flash->success(__('The encuentro has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The encuentro could not be saved. Please, try again.'));
        }
        $equipo=$this->Encuentro->Equipo->find('all');
        $this->set(compact('encuentro')); //aqui se va traer nuestro dato a editar
        $this->set(compact('equipo')); //aqui es a que tabla se lo voy a meter
    }

    /**
     * Edit method
     *
     * @param string|null $id Encuentro id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $encuentro = $this->Encuentro->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $encuentro = $this->Encuentro->patchEntity($encuentro, $this->request->getData());
            if ($this->Encuentro->save($encuentro)) {
                $this->Flash->success(__('The encuentro has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The encuentro could not be saved. Please, try again.'));
        }
        $equipo=$this->Encuentro->Equipo->find('all');
        $this->set(compact('encuentro')); //aqui se va traer nuestro dato a editar
        $this->set(compact('equipo')); //aqui es a que tabla se lo voy a meter
    }

    /**
     * Delete method
     *
     * @param string|null $id Encuentro id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $encuentro = $this->Encuentro->get($id);
        if ($this->Encuentro->delete($encuentro)) {
            $this->Flash->success(__('The encuentro has been deleted.'));
        } else {
            $this->Flash->error(__('The encuentro could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
