<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ServiceType $serviceType
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Service Type'), ['action' => 'edit', $serviceType->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Service Type'), ['action' => 'delete', $serviceType->id], ['confirm' => __('Are you sure you want to delete # {0}?', $serviceType->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Service Types'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Service Type'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="serviceTypes view content">
            <h3><?= h($serviceType->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($serviceType->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($serviceType->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($serviceType->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($serviceType->modified) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Vehicle Fees') ?></h4>
                <?php if (!empty($serviceType->vehicle_fees)) : ?>
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
                        <?php foreach ($serviceType->vehicle_fees as $vehicleFee) : ?>
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