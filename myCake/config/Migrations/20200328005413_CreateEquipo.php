<?php
use Migrations\AbstractMigration;

class CreateEquipo extends AbstractMigration
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
        $table = $this->table('equipo');
        $table->addColumn('nomEquipo', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);
        $table->addColumn('Atq', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => false,
        ]);
        $table->addColumn('Med', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => false,
        ]);
        $table->addColumn('Def', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => false,
        ]);
        $table->addColumn('valor', 'string', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('calidad', 'float', [
            'default' => null,
            'limit' => 11,
            'null' => false,
        ]);
        $table->create();

        $refTable =$this->table('equipo');
        $refTable->addColumn('estadio_id', 'integer', array('signed'=>'disable'))
            ->addForeignKey('estadio_id', 'estadio', 'id', array('delete'=>'CASCADE','update'=>'NO_ACTION'))
            ->update();

    }
}
