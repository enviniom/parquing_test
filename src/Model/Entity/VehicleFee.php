<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * VehicleFee Entity
 *
 * @property int $id
 * @property int $vehicle_type_id
 * @property int $service_type_id
 * @property int $value
 * @property \Cake\I18n\DateTime $created
 * @property \Cake\I18n\DateTime $modified
 *
 * @property \App\Model\Entity\VehicleType $vehicle_type
 * @property \App\Model\Entity\ServiceType $service_type
 */
class VehicleFee extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected array $_accessible = [
        'vehicle_type_id' => true,
        'service_type_id' => true,
        'value' => true,
        'created' => true,
        'modified' => true,
        'vehicle_type' => true,
        'service_type' => true,
    ];
}
