<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Director Controller
 *
 *
 * @method \App\Model\Entity\Director[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class DirectorController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $director = $this->paginate($this->Director);

        $this->set(compact('director'));
    }

    /**
     * View method
     *
     * @param string|null $id Director id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $director = $this->Director->get($id, [
            'contain' => [],
        ]);

        $this->set('director', $director);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $director = $this->Director->newEntity();
        if ($this->request->is('post')) {
            $director = $this->Director->patchEntity($director, $this->request->getData());
            if ($this->Director->save($director)) {
                $this->Flash->success(__('The director has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The director could not be saved. Please, try again.'));
        }
        $persona = $this->Director->Persona->find('all');
        $this->set(compact('director')); //aqui se va traer nuestro dato a editar
        $this->set(compact('persona'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Director id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $director = $this->Director->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $director = $this->Director->patchEntity($director, $this->request->getData());
            if ($this->Director->save($director)) {
                $this->Flash->success(__('The director has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The director could not be saved. Please, try again.'));
        }
        $persona = $this->Director->Persona->find('all');
        $this->set(compact('director')); //aqui se va traer nuestro dato a editar
        $this->set(compact('persona'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Director id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $director = $this->Director->get($id);
        if ($this->Director->delete($director)) {
            $this->Flash->success(__('The director has been deleted.'));
        } else {
            $this->Flash->error(__('The director could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
