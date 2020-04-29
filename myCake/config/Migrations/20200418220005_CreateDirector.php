<?php
use Migrations\AbstractMigration;

class CreateDirector extends AbstractMigration
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
        $table = $this->table('director');
        $table->addColumn('Alias', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);
        $table->addColumn('tiempo_club', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);
        $table->addColumn('Liguillas', 'integer', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);
        $table->addColumn('TorneosEquipo', 'integer', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);
        $table->create();
        $refTable =$this->table('director');
        $refTable->addColumn('persona_id', 'integer', array('signed'=>'disable'))
            ->addForeignKey('persona_id', 'persona', 'id', array('delete'=>'CASCADE','update'=>'NO_ACTION'))
            ->update();
    }
}
