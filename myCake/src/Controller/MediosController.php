<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Medios Controller
 *
 *
 * @method \App\Model\Entity\Medio[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class MediosController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $medios = $this->paginate($this->Medios);

        $this->set(compact('medios'));
    }

    /**
     * View method
     *
     * @param string|null $id Medio id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $medio = $this->Medios->get($id, [
            'contain' => [],
        ]);

        $this->set('medio', $medio);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $medio = $this->Medios->newEntity();
        if ($this->request->is('post')) {
            $medio = $this->Medios->patchEntity($medio, $this->request->getData());
            if ($this->Medios->save($medio)) {
                $this->Flash->success(__('The medio has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The medio could not be saved. Please, try again.'));
        }
        $equipo=$this->Medios->Equipo->find('all');
        $this->set(compact('medio')); //aqui se va traer nuestro dato a editar
        $this->set(compact('equipo'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Medio id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $medio = $this->Medios->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $medio = $this->Medios->patchEntity($medio, $this->request->getData());
            if ($this->Medios->save($medio)) {
                $this->Flash->success(__('The medio has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The medio could not be saved. Please, try again.'));
        }
        $equipo=$this->Medios->Equipo->find('all');
        $this->set(compact('medio')); //aqui se va traer nuestro dato a editar
        $this->set(compact('equipo'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Medio id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $medio = $this->Medios->get($id);
        if ($this->Medios->delete($medio)) {
            $this->Flash->success(__('The medio has been deleted.'));
        } else {
            $this->Flash->error(__('The medio could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
