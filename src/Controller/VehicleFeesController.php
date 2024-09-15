<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * VehicleFees Controller
 *
 * @property \App\Model\Table\VehicleFeesTable $VehicleFees
 */
class VehicleFeesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->VehicleFees->find()
            ->contain(['VehicleTypes', 'ServiceTypes']);
        $vehicleFees = $this->paginate($query);

        $this->set(compact('vehicleFees'));
    }

    /**
     * View method
     *
     * @param string|null $id Vehicle Fee id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $vehicleFee = $this->VehicleFees->get($id, contain: ['VehicleTypes', 'ServiceTypes']);
        $this->set(compact('vehicleFee'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $vehicleFee = $this->VehicleFees->newEmptyEntity();
        if ($this->request->is('post')) {
            $vehicleFee = $this->VehicleFees->patchEntity($vehicleFee, $this->request->getData());
            if ($this->VehicleFees->save($vehicleFee)) {
                $this->Flash->success(__('The vehicle fee has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The vehicle fee could not be saved. Please, try again.'));
        }
        $vehicleTypes = $this->VehicleFees->VehicleTypes->find('list', limit: 200)->all();
        $serviceTypes = $this->VehicleFees->ServiceTypes->find('list', limit: 200)->all();
        $this->set(compact('vehicleFee', 'vehicleTypes', 'serviceTypes'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Vehicle Fee id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $vehicleFee = $this->VehicleFees->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $vehicleFee = $this->VehicleFees->patchEntity($vehicleFee, $this->request->getData());
            if ($this->VehicleFees->save($vehicleFee)) {
                $this->Flash->success(__('The vehicle fee has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The vehicle fee could not be saved. Please, try again.'));
        }
        $vehicleTypes = $this->VehicleFees->VehicleTypes->find('list', limit: 200)->all();
        $serviceTypes = $this->VehicleFees->ServiceTypes->find('list', limit: 200)->all();
        $this->set(compact('vehicleFee', 'vehicleTypes', 'serviceTypes'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Vehicle Fee id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $vehicleFee = $this->VehicleFees->get($id);
        if ($this->VehicleFees->delete($vehicleFee)) {
            $this->Flash->success(__('The vehicle fee has been deleted.'));
        } else {
            $this->Flash->error(__('The vehicle fee could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
