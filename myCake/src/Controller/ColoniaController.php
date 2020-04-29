<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Colonia Controller
 *
 * @property \App\Model\Table\ColoniaTable $Colonia
 *
 * @method \App\Model\Entity\Colonia[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ColoniaController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Municipio'],
        ];
        $colonia = $this->paginate($this->Colonia);

        $this->set(compact('colonia'));
    }

    /**
     * View method
     *
     * @param string|null $id Colonia id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $colonia = $this->Colonia->get($id, [
            'contain' => ['Municipio'],
        ]);

        $this->set('colonia', $colonia);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $colonia = $this->Colonia->newEntity();
        if ($this->request->is('post')) {
            $colonia = $this->Colonia->patchEntity($colonia, $this->request->getData());
            if ($this->Colonia->save($colonia)) {
                $this->Flash->success(__('La colonia se ha creado de manera correcta .'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('La colonia no se guardó. Por favor intentelo de nuevo.'));
        }
        /*$municipio = $this->Colonia->Municipio->find('list', ['limit' => 200]);
        $this->set(compact('colonium', 'municipio'));*/

       #Con esto te sale el combobox pero solo el id -->Este si sirve
        /*$municipio = $this->Colonia->Municipio->find('list', ['limit' => 200]);
        $this->set(compact('colonia', 'municipio'));*/

       #Así se debe de ser
       /* $municipio=$this->Colonia->Municipio->find('all', array('fields'=>array('municipio','municipio')));
        $this->set(compact('colonia'));
        $this->set(compact('municipio'));*/

       #prueba 2
        /*
        $municipio=$this->Colonia->Municipio->find('all', array('fields'=>array('municipio','municipio')));
        $this->set(compact('colonia'));
        $this->set(compact('municipio'));*/

        #Prueba 3
        $municipio=$this->Colonia->Municipio->find('all');
        $this->set(compact('colonia')); //aqui se va traer nuestro dato a editar
        $this->set(compact('municipio')); //aqui es a que tabla se lo voy a meter
    }

    /**
     * Edit method
     *
     * @param string|null $id Colonia id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $colonia = $this->Colonia->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $colonia = $this->Colonia->patchEntity($colonia, $this->request->getData());
            if ($this->Colonia->save($colonia)) {
                $this->Flash->success(__('The colonia has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The colonia could not be saved. Please, try again.'));
        }
        #Original
        /*
        $municipio = $this->Colonia->Municipio->find('list', ['limit' => 200]);
        $this->set(compact('colonia', 'municipio'));*/

        #Prueba.5
       /* $municipio = $this->Colonia->Municipio->find('list', ['municipio', 'municipio']);
        $this->set(compact('colonia', 'municipio'));*/

        #prueba 1
      /*  $municipio=$this->Colonia->Municipio->find('all', array('fields'=>array('municipio','municipio')));
        $this->set(compact('colonia'));
        $this->set(compact('municipio'));*/

      #prueba 1.5
        /*$municipio = $this->Colonia->Municipio->find('all', ['limit' => 200]);
        $this->set(compact('colonia', 'municipio')); */

        #prueba 2
      /*  $municipio = $this->Colonia->Municipio->find('list', ['limit' => 200]);
        $this->set(compact('colonia', 'municipio'));*/

      #prueba 2.5
       // $municipio = $this->Colonia->Municipio->find('list', ['municipio', 'municipio']);
        /*$municipio=$this->Colonia->Municipio->find('all', array('fields'=>array('municipio')));
        $this->set(compact('colonia'));
        $this->set(compact('municipio'));*/

        #Prueba 3
        $municipio=$this->Colonia->Municipio->find('all');
        $this->set(compact('colonia')); //aqui se va traer nuestro dato a editar
        $this->set(compact('municipio')); //aqui es a que tabla se lo voy a meter


    }

    /**
     * Delete method
     *
     * @param string|null $id Colonia id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $colonia = $this->Colonia->get($id);
        if ($this->Colonia->delete($colonia)) {
            $this->Flash->success(__('The colonia has been deleted.'));
        } else {
            $this->Flash->error(__('The colonia could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
