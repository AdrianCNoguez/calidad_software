<?php
use Migrations\AbstractMigration;

class CreateEncuentro extends AbstractMigration
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
        $table = $this->table('encuentro');
        $table->addColumn('NombreEcuentro', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);
        $table->addColumn('local', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);
        $table->addColumn('visinte', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);
        $table->addColumn('fecha', 'date', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('hora', 'time', [
            'default' => null,
            'null' => false,
        ]);
        $table->create();
        $refTable =$this->table('encuentro');
        $refTable->addColumn('equipo_id', 'integer', array('signed'=>'disable'))
            ->addForeignKey('equipo_id', 'equipo', 'id', array('delete'=>'CASCADE','update'=>'NO_ACTION'))
            ->update();
    }
}
