<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Tienda Controller
 *
 *
 * @method \App\Model\Entity\Tienda[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TiendaController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $tienda = $this->paginate($this->Tienda);

        $this->set(compact('tienda'));
    }

    /**
     * View method
     *
     * @param string|null $id Tienda id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $tienda = $this->Tienda->get($id, [
            'contain' => [],
        ]);

        $this->set('tienda', $tienda);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $tienda = $this->Tienda->newEntity();
        if ($this->request->is('post')) {
            $tienda = $this->Tienda->patchEntity($tienda, $this->request->getData());
            if ($this->Tienda->save($tienda)) {
                $this->Flash->success(__('The tienda has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tienda could not be saved. Please, try again.'));
        }
        $estadio=$this->Tienda->Estadio->find('all');
        $this->set(compact('tienda')); //aqui se va traer nuestro dato a editar
        $this->set(compact('estadio')); //aqui es a que tabla se lo voy a meter

        $patrocinador=$this->Tienda->Patrocinador->find('all');
        $this->set(compact('tienda')); //aqui se va traer nuestro dato a editar
        $this->set(compact('patrocinador')); //aqui es a que tabla se lo voy a meter



    }

    /**
     * Edit method
     *
     * @param string|null $id Tienda id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $tienda = $this->Tienda->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tienda = $this->Tienda->patchEntity($tienda, $this->request->getData());
            if ($this->Tienda->save($tienda)) {
                $this->Flash->success(__('The tienda has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tienda could not be saved. Please, try again.'));
        }
        $this->set(compact('tienda'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Tienda id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $tienda = $this->Tienda->get($id);
        if ($this->Tienda->delete($tienda)) {
            $this->Flash->success(__('The tienda has been deleted.'));
        } else {
            $this->Flash->error(__('The tienda could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
