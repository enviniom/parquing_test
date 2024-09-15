<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\VehicleFee $vehicleFee
 * @var string[]|\Cake\Collection\CollectionInterface $vehicleTypes
 * @var string[]|\Cake\Collection\CollectionInterface $serviceTypes
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $vehicleFee->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $vehicleFee->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Vehicle Fees'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="vehicleFees form content">
            <?= $this->Form->create($vehicleFee) ?>
            <fieldset>
                <legend><?= __('Edit Vehicle Fee') ?></legend>
                <?php
                    echo $this->Form->control('vehicle_type_id', ['options' => $vehicleTypes]);
                    echo $this->Form->control('service_type_id', ['options' => $serviceTypes]);
                    echo $this->Form->control('value');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
