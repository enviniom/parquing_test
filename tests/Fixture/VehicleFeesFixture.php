<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * VehicleFeesFixture
 */
class VehicleFeesFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'vehicle_type_id' => 1,
                'service_type_id' => 1,
                'value' => 1,
                'created' => '2024-09-15 12:42:21',
                'modified' => '2024-09-15 12:42:21',
            ],
        ];
        parent::init();
    }
}
