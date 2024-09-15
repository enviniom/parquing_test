<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class CreateServices extends AbstractMigration
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
        $table = $this->table('services');
        $table->addColumn('vehicle_type_id', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => false,
        ]);
        $table->addColumn('description', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);
        $table->addColumn('plate', 'string', [
            'default' => null,
            'limit' => 15,
            'null' => false,
        ]);
        $table->addColumn('datetime_start', 'datetime', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('datetime_end', 'datetime', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('value', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => false,
        ]);
        $table->addColumn('user_id', 'integer', [
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
        $table->addForeignKey('user_id', 'users', 'id', [
            'delete'=> 'NO_ACTION', 'update'=> 'NO_ACTION'
        ]);
        $table->update();
    }
}
