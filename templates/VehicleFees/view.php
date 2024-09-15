<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\VehicleFee $vehicleFee
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Vehicle Fee'), ['action' => 'edit', $vehicleFee->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Vehicle Fee'), ['action' => 'delete', $vehicleFee->id], ['confirm' => __('Are you sure you want to delete # {0}?', $vehicleFee->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Vehicle Fees'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Vehicle Fee'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="vehicleFees view content">
            <h3><?= h($vehicleFee->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Vehicle Type') ?></th>
                    <td><?= $vehicleFee->hasValue('vehicle_type') ? $this->Html->link($vehicleFee->vehicle_type->name, ['controller' => 'VehicleTypes', 'action' => 'view', $vehicleFee->vehicle_type->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Service Type') ?></th>
                    <td><?= $vehicleFee->hasValue('service_type') ? $this->Html->link($vehicleFee->service_type->name, ['controller' => 'ServiceTypes', 'action' => 'view', $vehicleFee->service_type->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($vehicleFee->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Value') ?></th>
                    <td><?= $this->Number->format($vehicleFee->value) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($vehicleFee->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($vehicleFee->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>