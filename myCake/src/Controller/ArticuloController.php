<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Articulo Controller
 *
 *
 * @method \App\Model\Entity\Articulo[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ArticuloController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $articulo = $this->paginate($this->Articulo);

        $this->set(compact('articulo'));
    }

    /**
     * View method
     *
     * @param string|null $id Articulo id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $articulo = $this->Articulo->get($id, [
            'contain' => [],
        ]);

        $this->set('articulo', $articulo);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $articulo = $this->Articulo->newEntity();
        if ($this->request->is('post')) {
            $articulo = $this->Articulo->patchEntity($articulo, $this->request->getData());
            if ($this->Articulo->save($articulo)) {
                $this->Flash->success(__('The articulo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The articulo could not be saved. Please, try again.'));
        }
        $tienda=$this->Articulo->Tienda->find('all');
        $this->set(compact('articulo')); //aqui se va traer nuestro dato a editar
        $this->set(compact('tienda')); //aqui es a que tabla se lo voy a meter
    }

    /**
     * Edit method
     *
     * @param string|null $id Articulo id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $articulo = $this->Articulo->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $articulo = $this->Articulo->patchEntity($articulo, $this->request->getData());
            if ($this->Articulo->save($articulo)) {
                $this->Flash->success(__('The articulo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The articulo could not be saved. Please, try again.'));
        }
        $tienda=$this->Articulo->Tienda->find('all');
        $this->set(compact('articulo')); //aqui se va traer nuestro dato a editar
        $this->set(compact('tienda')); //aqui es a que tabla se lo voy a meter
    }

    /**
     * Delete method
     *
     * @param string|null $id Articulo id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $articulo = $this->Articulo->get($id);
        if ($this->Articulo->delete($articulo)) {
            $this->Flash->success(__('The articulo has been deleted.'));
        } else {
            $this->Flash->error(__('The articulo could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
