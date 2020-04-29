<?php
use Migrations\AbstractMigration;

class CreateArticulo extends AbstractMigration
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
        $table = $this->table('articulo');
        $table->addColumn('nombreArt', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);
        $table->addColumn('precio', 'float', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('promocion', 'float', [
            'default' => null,
            'null' => false,
        ]);
        $table->create();

        $refTable =$this->table('articulo');
        $refTable->addColumn('tienda_id', 'integer', array('signed'=>'disable'))
            ->addForeignKey('tienda_id', 'tienda', 'id', array('delete'=>'CASCADE','update'=>'NO_ACTION'))
            ->update();
    }
}
