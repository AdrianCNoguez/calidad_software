<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Radios Controller
 *
 *
 * @method \App\Model\Entity\Radio[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class RadiosController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $radios = $this->paginate($this->Radios);

        $this->set(compact('radios'));
    }

    /**
     * View method
     *
     * @param string|null $id Radio id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $radio = $this->Radios->get($id, [
            'contain' => [],
        ]);

        $this->set('radio', $radio);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $radio = $this->Radios->newEntity();
        if ($this->request->is('post')) {
            $radio = $this->Radios->patchEntity($radio, $this->request->getData());
            if ($this->Radios->save($radio)) {
                $this->Flash->success(__('The radio has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The radio could not be saved. Please, try again.'));
        }

        $medio=$this->Radios->Medios->find('all');
        $this->set(compact('radio'));
        $this->set(compact('medio'));

        $encuentro=$this->Radios->Encuentro->find('all');
        $this->set(compact('radio'));
        $this->set(compact('encuentro'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Radio id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $radio = $this->Radios->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $radio = $this->Radios->patchEntity($radio, $this->request->getData());
            if ($this->Radios->save($radio)) {
                $this->Flash->success(__('The radio has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The radio could not be saved. Please, try again.'));
        }
        $medio=$this->Radios->Medios->find('all');
        $this->set(compact('radio'));
        $this->set(compact('medio'));

        $encuentro=$this->Radios->Encuentro->find('all');
        $this->set(compact('radio'));
        $this->set(compact('encuentro'));    }

    /**
     * Delete method
     *
     * @param string|null $id Radio id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $radio = $this->Radios->get($id);
        if ($this->Radios->delete($radio)) {
            $this->Flash->success(__('The radio has been deleted.'));
        } else {
            $this->Flash->error(__('The radio could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
