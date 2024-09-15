<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * VehicleTypes Controller
 *
 * @property \App\Model\Table\VehicleTypesTable $VehicleTypes
 */
class VehicleTypesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->VehicleTypes->find();
        $vehicleTypes = $this->paginate($query);

        $this->set(compact('vehicleTypes'));
    }

    /**
     * View method
     *
     * @param string|null $id Vehicle Type id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $vehicleType = $this->VehicleTypes->get($id, contain: ['Services', 'VehicleFees']);
        $this->set(compact('vehicleType'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $vehicleType = $this->VehicleTypes->newEmptyEntity();
        if ($this->request->is('post')) {
            $vehicleType = $this->VehicleTypes->patchEntity($vehicleType, $this->request->getData());
            if ($this->VehicleTypes->save($vehicleType)) {
                $this->Flash->success(__('The vehicle type has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The vehicle type could not be saved. Please, try again.'));
        }
        $this->set(compact('vehicleType'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Vehicle Type id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $vehicleType = $this->VehicleTypes->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $vehicleType = $this->VehicleTypes->patchEntity($vehicleType, $this->request->getData());
            if ($this->VehicleTypes->save($vehicleType)) {
                $this->Flash->success(__('The vehicle type has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The vehicle type could not be saved. Please, try again.'));
        }
        $this->set(compact('vehicleType'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Vehicle Type id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $vehicleType = $this->VehicleTypes->get($id);
        if ($this->VehicleTypes->delete($vehicleType)) {
            $this->Flash->success(__('The vehicle type has been deleted.'));
        } else {
            $this->Flash->error(__('The vehicle type could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
