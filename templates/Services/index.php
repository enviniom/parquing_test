<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Service> $services
 */
?>
<div class="services index content">
    <?= $this->Html->link(__('New Service'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Services') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('vehicle_type_id') ?></th>
                    <th><?= $this->Paginator->sort('description') ?></th>
                    <th><?= $this->Paginator->sort('plate') ?></th>
                    <th><?= $this->Paginator->sort('datetime_start') ?></th>
                    <th><?= $this->Paginator->sort('datetime_end') ?></th>
                    <th><?= $this->Paginator->sort('value') ?></th>
                    <th><?= $this->Paginator->sort('user_id') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($services as $service): ?>
                <tr>
                    <td><?= $this->Number->format($service->id) ?></td>
                    <td><?= $service->hasValue('vehicle_type') ? $this->Html->link($service->vehicle_type->name, ['controller' => 'VehicleTypes', 'action' => 'view', $service->vehicle_type->id]) : '' ?></td>
                    <td><?= h($service->description) ?></td>
                    <td><?= h($service->plate) ?></td>
                    <td><?= h($service->datetime_start) ?></td>
                    <td><?= h($service->datetime_end) ?></td>
                    <td><?= $this->Number->format($service->value) ?></td>
                    <td><?= $service->hasValue('user') ? $this->Html->link($service->user->name, ['controller' => 'Users', 'action' => 'view', $service->user->id]) : '' ?></td>
                    <td><?= h($service->created) ?></td>
                    <td><?= h($service->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $service->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $service->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $service->id], ['confirm' => __('Are you sure you want to delete # {0}?', $service->id)]) ?>
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