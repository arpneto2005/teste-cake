<?php
namespace App\Controller;

use App\Controller\AppController;
use \Cake\ORM\TableRegistry;

/**
 * Meuteste Controller
 *
 *
 * @method \App\Model\Entity\Meuteste[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class MeutesteController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->autoRender = false;
        $this->loadModel('Shippers');
        $Shippers = $this->Shippers->find('all')
                ->toArray();
        debug($Shippers);
        
        /*$query = $this->request->getQuery();
        var_dump($query);
        debug($query);
        echo 'Meu controller CAKE AutoRender';
        
        exit();
        $meuteste = $this->paginate($this->Meuteste);

        $this->set(compact('meuteste'));*/
    }
    
    public function view($id = null) {
        $this->autoRender = false;
        $this->loadModel('Shippers');
        $shipper = $this->Shippers->get($id);
        debug($shipper);
    }
    
    public function add($id = null) {
        $this->autoRender = false;
        $tableShippers = TableRegistry::get('Shippers');
    }
}
