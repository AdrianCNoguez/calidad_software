<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Jugador Controller
 *
 *
 * @method \App\Model\Entity\Jugador[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class JugadorController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $jugador = $this->paginate($this->Jugador);

        $this->set(compact('jugador'));
    }

    /**
     * View method
     *
     * @param string|null $id Jugador id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $jugador = $this->Jugador->get($id, [
            'contain' => [],
        ]);

        $this->set('jugador', $jugador);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $jugador = $this->Jugador->newEntity();
        if ($this->request->is('post')) {
            $jugador = $this->Jugador->patchEntity($jugador, $this->request->getData());
            if ($this->Jugador->save($jugador)) {
                $this->Flash->success(__('The jugador has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The jugador could not be saved. Please, try again.'));
        }
        $persona = $this->Jugador->Persona->find('all');
        $this->set(compact('jugador')); //aqui se va traer nuestro dato a editar
        $this->set(compact('persona')); //aqui es a que tabla se lo voy a meter    }
    }

    /**
     * Edit method
     *
     * @param string|null $id Jugador id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $jugador = $this->Jugador->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $jugador = $this->Jugador->patchEntity($jugador, $this->request->getData());
            if ($this->Jugador->save($jugador)) {
                $this->Flash->success(__('The jugador has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The jugador could not be saved. Please, try again.'));
        }
        $persona = $this->Jugador->Persona->find('all');
        $this->set(compact('jugador')); //aqui se va traer nuestro dato a editar
        $this->set(compact('persona')); //aqui es a que tabla se lo voy a meter
    }

    /**
     * Delete method
     *
     * @param string|null $id Jugador id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $jugador = $this->Jugador->get($id);
        if ($this->Jugador->delete($jugador)) {
            $this->Flash->success(__('The jugador has been deleted.'));
        } else {
            $this->Flash->error(__('The jugador could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
