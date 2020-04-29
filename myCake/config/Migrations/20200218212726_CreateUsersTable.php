<?php
use Migrations\AbstractMigration;

class CreateUsersTable extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        /*
        $table = $this->table('users');
        $table->addColum('first_name','varchar',array('limit'=>100))
            ->addColum('email','varchar', array('limit'=>100))
            ->addColum('password','string')
            ->addColum('role','enum', array('values'=>'admin, user'))
            ->addColum('active', 'boolean')
            ->addColum('created', 'datetime')
            ->addColum('modified', 'datatime')
            ->create();*/
        $table = $this->table('users');

        $table->addColumn('first_name', 'string', [
        'default' => null,
        'limit' => 100,
        'null' => false,
    ]);

        $table->addColumn('last_name', 'string', [
            'default' => null,
            'limit' => 100,
            'null' => false,
        ]);

        $table->addColumn('email', 'string', [
            'default' => null,
            'limit' => 100,
            'null' => false,
        ]);
        $table->addColumn('password', 'string', [
        'default' => null,
        'null' => false,
    ]);

        $table->addColumn('role', 'enum', [
            'default' => null,
            'null' => false,
            'values' =>'admin, user'
        ]);

        $table->addColumn('active', 'boolean', [
            'default' => null,
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

    }
}
