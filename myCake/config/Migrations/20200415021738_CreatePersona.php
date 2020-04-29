<?php
use Migrations\AbstractMigration;

class CreatePersona extends AbstractMigration
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
        $table = $this->table('persona');
        $table->addColumn('nombre', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);
        $table->addColumn('apellidoP', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);
        $table->addColumn('apellidoM', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);
        $table->addColumn('edad', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);
        $table->create();
        $refTable =$this->table('persona');
        $refTable->addColumn('equipo_id', 'integer', array('signed'=>'disable'))
            ->addForeignKey('equipo_id', 'equipo', 'id', array('delete'=>'CASCADE','update'=>'NO_ACTION'))
            ->update();

    }
}
