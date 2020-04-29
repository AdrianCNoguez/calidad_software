<?php
use Migrations\AbstractMigration;

class CreateDireccion extends AbstractMigration
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
        $table = $this->table('direccion');
        $table->addColumn('calle', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);
        $table->addColumn('No', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => false,
        ]);
        $table->addColumn('Cp', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => false,
        ]);
        $table->create();

        $refTable =$this->table('direccion');
        $refTable->addColumn('colonia_id', 'integer', array('signed'=>'disable'))
            ->addForeignKey('colonia_id', 'colonia', 'id', array('delete'=>'CASCADE','update'=>'NO_ACTION'))
            ->update();


    }
}
