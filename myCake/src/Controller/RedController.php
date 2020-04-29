<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Red Controller
 *
 *
 * @method \App\Model\Entity\Red[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class RedController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $red = $this->paginate($this->Red);

        $this->set(compact('red'));
    }

    /**
     * View method
     *
     * @param string|null $id Red id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $red = $this->Red->get($id, [
            'contain' => [],
        ]);

        $this->set('red', $red);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $red = $this->Red->newEntity();
        if ($this->request->is('post')) {
            $red = $this->Red->patchEntity($red, $this->request->getData());
            if ($this->Red->save($red)) {
                $this->Flash->success(__('The red has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The red could not be saved. Please, try again.'));
        }
        $equipo=$this->Red->Equipo->find('all');
        $this->set(compact('red')); //aqui se va traer nuestro dato a editar
        $this->set(compact('equipo')); //aqui es a que tabla se lo voy a meter
    }

    /**
     * Edit method
     *
     * @param string|null $id Red id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $red = $this->Red->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $red = $this->Red->patchEntity($red, $this->request->getData());
            if ($this->Red->save($red)) {
                $this->Flash->success(__('The red has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The red could not be saved. Please, try again.'));
        }
        $equipo=$this->Red->Equipo->find('all');
        $this->set(compact('red')); //aqui se va traer nuestro dato a editar
        $this->set(compact('equipo')); //aqui es a que tabla se lo voy a meter
    }

    /**
     * Delete method
     *
     * @param string|null $id Red id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $red = $this->Red->get($id);
        if ($this->Red->delete($red)) {
            $this->Flash->success(__('The red has been deleted.'));
        } else {
            $this->Flash->error(__('The red could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
