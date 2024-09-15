<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Service Entity
 *
 * @property int $id
 * @property int $vehicle_type_id
 * @property string $description
 * @property string $plate
 * @property \Cake\I18n\DateTime $datetime_start
 * @property \Cake\I18n\DateTime $datetime_end
 * @property int $value
 * @property int $user_id
 * @property \Cake\I18n\DateTime $created
 * @property \Cake\I18n\DateTime $modified
 *
 * @property \App\Model\Entity\VehicleType $vehicle_type
 * @property \App\Model\Entity\User $user
 */
class Service extends Entity
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
        'description' => true,
        'plate' => true,
        'datetime_start' => true,
        'datetime_end' => true,
        'value' => true,
        'user_id' => true,
        'created' => true,
        'modified' => true,
        'vehicle_type' => true,
        'user' => true,
    ];
}
