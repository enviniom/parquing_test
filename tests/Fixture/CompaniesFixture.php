<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CompaniesFixture
 */
class CompaniesFixture extends TestFixture
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
                'name' => 'Lorem ipsum dolor sit amet',
                'address' => 'Lorem ipsum dolor sit amet',
                'identification' => 'Lorem ipsum dolor ',
                'created' => '2024-09-15 12:39:32',
                'modified' => '2024-09-15 12:39:32',
            ],
        ];
        parent::init();
    }
}
