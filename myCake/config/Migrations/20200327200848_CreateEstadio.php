<?php
use Migrations\AbstractMigration;

class CreateEstadio extends AbstractMigration
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
        $table = $this->table('estadio');
        $table->addColumn('sede', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);
        $table->addColumn('capacidad', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => false,
        ]);
        $table->create();

        $refTable =$this->table('estadio');
        $refTable->addColumn('direccion_id', 'integer', array('signed'=>'disable'))
            ->addForeignKey('direccion_id', 'direccion', 'id', array('delete'=>'CASCADE','update'=>'NO_ACTION'))
            ->update();

    }
}
