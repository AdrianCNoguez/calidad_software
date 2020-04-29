<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Patrocinador Controller
 *
 *
 * @method \App\Model\Entity\Patrocinador[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PatrocinadorController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $patrocinador = $this->paginate($this->Patrocinador);

        $this->set(compact('patrocinador'));
    }

    /**
     * View method
     *
     * @param string|null $id Patrocinador id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $patrocinador = $this->Patrocinador->get($id, [
            'contain' => [],
        ]);

        $this->set('patrocinador', $patrocinador);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $patrocinador = $this->Patrocinador->newEntity();
        if ($this->request->is('post')) {
            $patrocinador = $this->Patrocinador->patchEntity($patrocinador, $this->request->getData());
            if ($this->Patrocinador->save($patrocinador)) {
                $this->Flash->success(__('The patrocinador has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The patrocinador could not be saved. Please, try again.'));
        }
        #original
       // $this->set(compact('patrocinador'));

        #Prueba 0
        $estadio=$this->Patrocinador->Estadio->find('all');
        $this->set(compact('patrocinador')); //aqui se va traer nuestro dato a editar
        $this->set(compact('estadio')); //aqui es a que tabla se lo voy a meter



    }

    /**
     * Edit method
     *
     * @param string|null $id Patrocinador id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $patrocinador = $this->Patrocinador->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $patrocinador = $this->Patrocinador->patchEntity($patrocinador, $this->request->getData());
            if ($this->Patrocinador->save($patrocinador)) {
                $this->Flash->success(__('The patrocinador has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The patrocinador could not be saved. Please, try again.'));
        }
       // $this->set(compact('patrocinador'));

        #Prueba 0
        $estadio=$this->Patrocinador->Estadio->find('all');
        $this->set(compact('patrocinador')); //aqui se va traer nuestro dato a editar
        $this->set(compact('estadio')); //aqui es a que tabla se lo voy a meter
    }

    /**
     * Delete method
     *
     * @param string|null $id Patrocinador id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $patrocinador = $this->Patrocinador->get($id);
        if ($this->Patrocinador->delete($patrocinador)) {
            $this->Flash->success(__('The patrocinador has been deleted.'));
        } else {
            $this->Flash->error(__('The patrocinador could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
