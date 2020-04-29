<?php
use Migrations\AbstractMigration;

class CreateTienda extends AbstractMigration
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
        $table = $this->table('tienda');
        $table->addColumn('Nom_tienda', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);
        $table->create();

        $refTable =$this->table('tienda');
        $refTable->addColumn('estadio_id', 'integer', array('signed'=>'disable'))
            ->addForeignKey('estadio_id', 'estadio', 'id', array('delete'=>'CASCADE','update'=>'NO_ACTION'))
            ->update();

        $refTable =$this->table('tienda');
        $refTable->addColumn('patrocinador_id', 'integer', array('signed'=>'disable'))
            ->addForeignKey('patrocinador_id', 'patrocinador', 'id', array('delete'=>'CASCADE','update'=>'NO_ACTION'))
            ->update();



    }
}
