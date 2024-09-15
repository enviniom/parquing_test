<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Service $service
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Service'), ['action' => 'edit', $service->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Service'), ['action' => 'delete', $service->id], ['confirm' => __('Are you sure you want to delete # {0}?', $service->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Services'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Service'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="services view content">
            <h3><?= h($service->description) ?></h3>
            <table>
                <tr>
                    <th><?= __('Vehicle Type') ?></th>
                    <td><?= $service->hasValue('vehicle_type') ? $this->Html->link($service->vehicle_type->name, ['controller' => 'VehicleTypes', 'action' => 'view', $service->vehicle_type->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Description') ?></th>
                    <td><?= h($service->description) ?></td>
                </tr>
                <tr>
                    <th><?= __('Plate') ?></th>
                    <td><?= h($service->plate) ?></td>
                </tr>
                <tr>
                    <th><?= __('User') ?></th>
                    <td><?= $service->hasValue('user') ? $this->Html->link($service->user->name, ['controller' => 'Users', 'action' => 'view', $service->user->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($service->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Value') ?></th>
                    <td><?= $this->Number->format($service->value) ?></td>
                </tr>
                <tr>
                    <th><?= __('Datetime Start') ?></th>
                    <td><?= h($service->datetime_start) ?></td>
                </tr>
                <tr>
                    <th><?= __('Datetime End') ?></th>
                    <td><?= h($service->datetime_end) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($service->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($service->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>