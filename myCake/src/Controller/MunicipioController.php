<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Municipio Controller
 *
 *
 * @method \App\Model\Entity\Municipio[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class MunicipioController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $municipio = $this->paginate($this->Municipio);

        $this->set(compact('municipio'));
    }

    /**
     * View method
     *
     * @param string|null $id Municipio id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $municipio = $this->Municipio->get($id, [
            'contain' => [],
        ]);

        $this->set('municipio', $municipio);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $municipio = $this->Municipio->newEntity();
        if ($this->request->is('post')) {
            $municipio = $this->Municipio->patchEntity($municipio, $this->request->getData());
            if ($this->Municipio->save($municipio)) {
                $this->Flash->success(__('The municipio has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The municipio could not be saved. Please, try again.'));
        }
      //  $this->set(compact('municipio'));
      #Original
       /*$estado = $this->Municipio->Estado->find('list', ['limit' => 200]);
        $this->set(compact('municipio', 'estado'));*/

       #pueba .5
     /*  $estado=$this->Municipio->Estado->find('all',array('fields'=>array('estado','estado')));
        $this->set(compact('municipio'));
        $this->set(compact('estado'));*/

        #Prueba 1
       /*$municipio=$this->Municipio->Estado->find('all', array('fields'=>array('estado','estado')));
        $this->set(compact('municipio'));
        $this->set(compact('estado'));*/

        #Prueba 1.5
        $estado=$this->Municipio->Estado->find('all');
        $this->set(compact('municipio')); //aqui se va traer nuestro dato a editar
        $this->set(compact('estado')); //aqui es a que tabla se lo voy a meter
    }

    /**
     * Edit method
     *
     * @param string|null $id Municipio id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $municipio = $this->Municipio->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $municipio = $this->Municipio->patchEntity($municipio, $this->request->getData());
            if ($this->Municipio->save($municipio)) {
                $this->Flash->success(__('The municipio has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The municipio could not be saved. Please, try again.'));
        }
        #original
        #$this->set(compact('municipio'));

        #Copia
        /*
        $municipio=$this->Colonia->Municipio->find('all', array('fields'=>array('municipio','municipio')));
        $this->set(compact('colonia'));
        $this->set(compact('municipio'));*/

        #Prueba1
        /*
        $estado=$this->Municipio->Estado->find('all', array('fields'=>array('municipio')));
        $this->set(compact('municipio'));
        $this->set(compact('estado'));*/

        #Prueba 2
       //fk           //Pk      //fk                                        //Fk
     /*  $estado=$this->Municipio->Estado->find('all', array('fields'=>array('estado')));
       $this->set(compact('municipio')); //aqui se va traer nuestro dato a editar
       $this->set(compact('estado')); //aqui es a que tabla se lo voy a meter*/

        #Prueba 3
        $estado=$this->Municipio->Estado->find('all');
        $this->set(compact('municipio')); //aqui se va traer nuestro dato a editar
        $this->set(compact('estado')); //aqui es a que tabla se lo voy a meter


    }

    /**
     * Delete method
     *
     * @param string|null $id Municipio id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $municipio = $this->Municipio->get($id);
        if ($this->Municipio->delete($municipio)) {
            $this->Flash->success(__('The municipio has been deleted.'));
        } else {
            $this->Flash->error(__('The municipio could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
