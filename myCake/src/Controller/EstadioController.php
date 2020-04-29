<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Estadio Controller
 *
 *
 * @method \App\Model\Entity\Estadio[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class EstadioController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $estadio = $this->paginate($this->Estadio);

        $this->set(compact('estadio'));
    }

    /**
     * View method
     *
     * @param string|null $id Estadio id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $estadio = $this->Estadio->get($id, [
            'contain' => [],
        ]);

        $this->set('estadio', $estadio);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $estadio = $this->Estadio->newEntity();
        if ($this->request->is('post')) {
            $estadio = $this->Estadio->patchEntity($estadio, $this->request->getData());
            if ($this->Estadio->save($estadio)) {
                $this->Flash->success(__('The estadio has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The estadio could not be saved. Please, try again.'));
        }
        #Original
        /*$this->set(compact('estadio'));*/

        #Prueba 1
        $direccion=$this->Estadio->Direccion->find('all');
        $this->set(compact('estadio')); //aqui se va traer nuestro dato a editar
        $this->set(compact('direccion')); //aqui es a que tabla se lo voy a meter
    }

    /**
     * Edit method
     *
     * @param string|null $id Estadio id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $estadio = $this->Estadio->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $estadio = $this->Estadio->patchEntity($estadio, $this->request->getData());
            if ($this->Estadio->save($estadio)) {
                $this->Flash->success(__('The estadio has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The estadio could not be saved. Please, try again.'));
        }
        #Prueba 1
        /*$this->set(compact('estadio'));*/
        #Prueba 1.5
        /*$estado=$this->Municipio->Estado->find('all');
        $this->set(compact('municipio')); //aqui se va traer nuestro dato a editar
        $this->set(compact('estado')); //aqui es a que tabla se lo voy a meter*/


        #Prueba 3
        $direccion=$this->Estadio->Direccion->find('all');
        $this->set(compact('estadio')); //aqui se va traer nuestro dato a editar
        $this->set(compact('direccion')); //aqui es a que tabla se lo voy a meter
    }

    /**
     * Delete method
     *
     * @param string|null $id Estadio id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $estadio = $this->Estadio->get($id);
        if ($this->Estadio->delete($estadio)) {
            $this->Flash->success(__('The estadio has been deleted.'));
        } else {
            $this->Flash->error(__('The estadio could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
