<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Persona Controller
 *
 *
 * @method \App\Model\Entity\Persona[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PersonaController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $persona = $this->paginate($this->Persona);

        $this->set(compact('persona'));
    }

    /**
     * View method
     *
     * @param string|null $id Persona id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $persona = $this->Persona->get($id, [
            'contain' => [],
        ]);

        $this->set('persona', $persona);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $persona = $this->Persona->newEntity();
        if ($this->request->is('post')) {
            $persona = $this->Persona->patchEntity($persona, $this->request->getData());
            if ($this->Persona->save($persona)) {
                $this->Flash->success(__('The persona has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The persona could not be saved. Please, try again.'));
        }
        $equipo=$this->Persona->Equipo->find('all');
        $this->set(compact('persona')); //aqui se va traer nuestro dato a editar
        $this->set(compact('equipo')); //aqui es a que tabla se lo voy a meter
    }

    /**
     * Edit method
     *
     * @param string|null $id Persona id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $persona = $this->Persona->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $persona = $this->Persona->patchEntity($persona, $this->request->getData());
            if ($this->Persona->save($persona)) {
                $this->Flash->success(__('The persona has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The persona could not be saved. Please, try again.'));
        }
        $equipo=$this->Persona->Equipo->find('all');
        $this->set(compact('persona')); //aqui se va traer nuestro dato a editar
        $this->set(compact('equipo')); //aqui es a que tabla se lo voy a meter
        }

    /**
     * Delete method
     *
     * @param string|null $id Persona id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $persona = $this->Persona->get($id);
        if ($this->Persona->delete($persona)) {
            $this->Flash->success(__('The persona has been deleted.'));
        } else {
            $this->Flash->error(__('The persona could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
