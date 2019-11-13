<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Datasource\ConnectionManager;

/**
 * Stock Controller
 *
 * @property \App\Model\Table\StockTable $Stock
 *
 * @method \App\Model\Entity\Stock[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class StockController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $stock = $this->paginate($this->Stock);

        $this->set(compact('stock'));
    }

    /**
     * View method
     *
     * @param string|null $id Stock id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $stock = $this->Stock->get($id, [
            'contain' => []
        ]);

        $this->set('stock', $stock);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $stock = $this->Stock->newEntity();
        if ($this->request->is('post')) {
            $stock = $this->Stock->patchEntity($stock, $this->request->getData());
            if ($this->Stock->save($stock)) {
                $this->Flash->success(__('The stock has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The stock could not be saved. Please, try again.'));
        }
        $this->set(compact('stock'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Stock id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $stock = $this->Stock->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $stock = $this->Stock->patchEntity($stock, $this->request->getData());
            if ($this->Stock->save($stock)) {
                $this->Flash->success(__('The stock has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The stock could not be saved. Please, try again.'));
        }
        $this->set(compact('stock'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Stock id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $stock = $this->Stock->get($id);
        if ($this->Stock->delete($stock)) {
            $this->Flash->success(__('The stock has been deleted.'));
        } else {
            $this->Flash->error(__('The stock could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    /** BY Julien
     * increment method
     *
     * @param string|null $id Stock id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function increment ($id = null) {
        // Get Entity + increment count
        $entity = $this->Stock->get($id);
        $entity->count = $entity->count+1;

        // Then you need to save your Entity using the Table Object
        if ($this->Stock->save($entity)) {
            $this->Flash->success(__('Stock count +1.'));
        }else{
             // If save fails
            $this->Flash->error(__('Stock increment failed :('));
        }
        return $this->redirect(['action' => 'index']);
    }

    /** BY Julien
     * decrement method
     *
     * @param string|null $id Stock id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function decrement ($id = null) {
        $entity = $this->Stock->get($id);
        $entity->count = $entity->count-1;
        if ($this->Stock->save($entity)) {
            $this->Flash->success(__('Stock count +1.'));
        }else{
            $this->Flash->error(__('Stock increment failed :('));
        }
        return $this->redirect(['action' => 'index']);
    }

    public function testajax ($text = null) {
        $this->request->allowMethod('ajax');
        $keyword = $this->request->query('keyword').' + prout';
        $this->set('_serialize', ['keyword']);
    }
}