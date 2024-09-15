<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class AddRoleToUsers extends AbstractMigration
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
        $table = $this->table('users');
        $table->addColumn('role_id', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => false,
            'after' => 'id',
        ]);
        $table->update();

        $table->addForeignKey('role_id', 'roles', 'id', [
            'update' => 'NO_ACTION',
            'delete' => 'NO_ACTION',
        ]);
        $table->update();
    }
}
