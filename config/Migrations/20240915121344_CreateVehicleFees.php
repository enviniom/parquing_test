<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class CreateVehicleFees extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     * @return void
     */
    public function change(): void
    {
        $table = $this->table('vehicle_fees');
        $table->addColumn('vehicle_type_id', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => false,
        ]);
        $table->addColumn('service_type_id', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => false,
        ]);
        $table->addColumn('value', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => false,
        ]);
        $table->addColumn('created', 'datetime', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('modified', 'datetime', [
            'default' => null,
            'null' => false,
        ]);
        $table->create();
        
        $table->addForeignKey('vehicle_type_id', 'vehicle_types', 'id', [
            'delete'=> 'NO_ACTION', 'update'=> 'NO_ACTION'
        ]);
        $table->addForeignKey('service_type_id', 'service_types', 'id', [
            'delete'=> 'NO_ACTION', 'update'=> 'NO_ACTION'
        ]);
        $table->update();
    }
}
