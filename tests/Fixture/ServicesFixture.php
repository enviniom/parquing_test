<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ServicesFixture
 */
class ServicesFixture extends TestFixture
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
                'description' => 'Lorem ipsum dolor sit amet',
                'plate' => 'Lorem ipsum d',
                'datetime_start' => '2024-09-15 12:41:56',
                'datetime_end' => '2024-09-15 12:41:56',
                'value' => 1,
                'user_id' => 1,
                'created' => '2024-09-15 12:41:56',
                'modified' => '2024-09-15 12:41:56',
            ],
        ];
        parent::init();
    }
}
