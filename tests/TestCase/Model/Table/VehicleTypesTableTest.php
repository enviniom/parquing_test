<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\VehicleTypesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\VehicleTypesTable Test Case
 */
class VehicleTypesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\VehicleTypesTable
     */
    protected $VehicleTypes;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'app.VehicleTypes',
        'app.Services',
        'app.VehicleFees',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('VehicleTypes') ? [] : ['className' => VehicleTypesTable::class];
        $this->VehicleTypes = $this->getTableLocator()->get('VehicleTypes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->VehicleTypes);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\VehicleTypesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
