<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\VehicleType $vehicleType
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Vehicle Type'), ['action' => 'edit', $vehicleType->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Vehicle Type'), ['action' => 'delete', $vehicleType->id], ['confirm' => __('Are you sure you want to delete # {0}?', $vehicleType->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Vehicle Types'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Vehicle Type'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="vehicleTypes view content">
            <h3><?= h($vehicleType->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($vehicleType->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($vehicleType->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($vehicleType->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($vehicleType->modified) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Services') ?></h4>
                <?php if (!empty($vehicleType->services)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Vehicle Type Id') ?></th>
                            <th><?= __('Description') ?></th>
                            <th><?= __('Plate') ?></th>
                            <th><?= __('Datetime Start') ?></th>
                            <th><?= __('Datetime End') ?></th>
                            <th><?= __('Value') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($vehicleType->services as $service) : ?>
                        <tr>
                            <td><?= h($service->id) ?></td>
                            <td><?= h($service->vehicle_type_id) ?></td>
                            <td><?= h($service->description) ?></td>
                            <td><?= h($service->plate) ?></td>
                            <td><?= h($service->datetime_start) ?></td>
                            <td><?= h($service->datetime_end) ?></td>
                            <td><?= h($service->value) ?></td>
                            <td><?= h($service->user_id) ?></td>
                            <td><?= h($service->created) ?></td>
                            <td><?= h($service->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Services', 'action' => 'view', $service->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Services', 'action' => 'edit', $service->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Services', 'action' => 'delete', $service->id], ['confirm' => __('Are you sure you want to delete # {0}?', $service->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Vehicle Fees') ?></h4>
                <?php if (!empty($vehicleType->vehicle_fees)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Vehicle Type Id') ?></th>
                            <th><?= __('Service Type Id') ?></th>
                            <th><?= __('Value') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($vehicleType->vehicle_fees as $vehicleFee) : ?>
                        <tr>
                            <td><?= h($vehicleFee->id) ?></td>
                            <td><?= h($vehicleFee->vehicle_type_id) ?></td>
                            <td><?= h($vehicleFee->service_type_id) ?></td>
                            <td><?= h($vehicleFee->value) ?></td>
                            <td><?= h($vehicleFee->created) ?></td>
                            <td><?= h($vehicleFee->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'VehicleFees', 'action' => 'view', $vehicleFee->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'VehicleFees', 'action' => 'edit', $vehicleFee->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'VehicleFees', 'action' => 'delete', $vehicleFee->id], ['confirm' => __('Are you sure you want to delete # {0}?', $vehicleFee->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>