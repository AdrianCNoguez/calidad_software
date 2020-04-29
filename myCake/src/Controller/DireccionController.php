<?php
namespace App\Controller;

use App\Controller\AppController;
use App\Model\Entity\Municipio;

/**
 * Direccion Controller
 *
 *
 * @method \App\Model\Entity\Direccion[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class DireccionController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $direccion = $this->paginate($this->Direccion);

        $this->set(compact('direccion'));
    }

    /**
     * View method
     *
     * @param string|null $id Direccion id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $direccion = $this->Direccion->get($id, [
            'contain' => [],
        ]);

        $this->set('direccion', $direccion);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $direccion = $this->Direccion->newEntity();
        if ($this->request->is('post')) {
            $direccion = $this->Direccion->patchEntity($direccion, $this->request->getData());
            if ($this->Direccion->save($direccion)) {
                $this->Flash->success(__('The direccion has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The direccion could not be saved. Please, try again.'));
        }
        #Original
        //$this->set(compact('direccion'));

        #Prueba 1
        $colonia=$this->Direccion->Colonia->find('all');
        $this->set(compact('direccion')); //aqui se va traer nuestro dato a editar
        $this->set(compact('colonia')); //aqui es a que tabla se lo voy a meter
    }

    /**
     * Edit method
     *
     * @param string|null $id Direccion id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $direccion = $this->Direccion->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $direccion = $this->Direccion->patchEntity($direccion, $this->request->getData());
            if ($this->Direccion->save($direccion)) {
                $this->Flash->success(__('La direccion se ha guardado.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('La direccion no se ha podido borrar. Porfavor intentalo de nuevo.'));
        }

        #Original

        $colonia=$this->Direccion->Colonia->find('all');
        $this->set(compact('direccion')); //aqui se va traer nuestro dato a editar
        $this->set(compact('colonia')); //aqui es a que tabla se lo voy a meter


        #Prueba Royman
        /*
        $query = $this->Direccion->find();
        $query->contain(['Colonia', 'Municipio','Estado']);
        $this->set(compact('query'));
        $this->set(compact('query'));
        $this->set(compact('query'));*/


        /*
        $query = $this->Direccion->find();
        $query->contain(['Colonia', 'Municipio','Estado']);
        $this->set(compact('query'));*/

    }

    /**
     * Delete method
     *
     * @param string|null $id Direccion id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $direccion = $this->Direccion->get($id);
        if ($this->Direccion->delete($direccion)) {
            $this->Flash->success(__('La direccion ha sido borrada.'));
        } else {
            $this->Flash->error(__('La direccion no se ha podido borrar. Porfavor intentalo de nuevo.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
