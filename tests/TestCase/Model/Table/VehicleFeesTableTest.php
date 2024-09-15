<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\VehicleFeesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\VehicleFeesTable Test Case
 */
class VehicleFeesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\VehicleFeesTable
     */
    protected $VehicleFees;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'app.VehicleFees',
        'app.VehicleTypes',
        'app.ServiceTypes',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('VehicleFees') ? [] : ['className' => VehicleFeesTable::class];
        $this->VehicleFees = $this->getTableLocator()->get('VehicleFees', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->VehicleFees);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\VehicleFeesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\VehicleFeesTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
