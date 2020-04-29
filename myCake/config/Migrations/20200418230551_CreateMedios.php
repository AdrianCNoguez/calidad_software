<?php
use Migrations\AbstractMigration;

class CreateMedios extends AbstractMigration
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
        $table = $this->table('medios');
        $table->addColumn('tipo', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);
        $table->create();
        $refTable =$this->table('medios');
        $refTable->addColumn('equipo_id', 'integer', array('signed'=>'disable'))
            ->addForeignKey('equipo_id', 'equipo', 'id', array('delete'=>'CASCADE','update'=>'NO_ACTION'))
            ->update();

    }
}
