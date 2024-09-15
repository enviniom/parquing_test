<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\VehicleFee> $vehicleFees
 */
?>
<div class="vehicleFees index content">
    <?= $this->Html->link(__('New Vehicle Fee'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Vehicle Fees') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('vehicle_type_id') ?></th>
                    <th><?= $this->Paginator->sort('service_type_id') ?></th>
                    <th><?= $this->Paginator->sort('value') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($vehicleFees as $vehicleFee): ?>
                <tr>
                    <td><?= $this->Number->format($vehicleFee->id) ?></td>
                    <td><?= $vehicleFee->hasValue('vehicle_type') ? $this->Html->link($vehicleFee->vehicle_type->name, ['controller' => 'VehicleTypes', 'action' => 'view', $vehicleFee->vehicle_type->id]) : '' ?></td>
                    <td><?= $vehicleFee->hasValue('service_type') ? $this->Html->link($vehicleFee->service_type->name, ['controller' => 'ServiceTypes', 'action' => 'view', $vehicleFee->service_type->id]) : '' ?></td>
                    <td><?= $this->Number->format($vehicleFee->value) ?></td>
                    <td><?= h($vehicleFee->created) ?></td>
                    <td><?= h($vehicleFee->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $vehicleFee->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $vehicleFee->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $vehicleFee->id], ['confirm' => __('Are you sure you want to delete # {0}?', $vehicleFee->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>