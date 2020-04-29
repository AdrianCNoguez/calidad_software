<?php
use Migrations\AbstractMigration;

class CreateTemporada extends AbstractMigration
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
        $table = $this->table('temporada');
        $table->addColumn('nombreTemporada', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);
        $table->create();
        $refTable =$this->table('temporada');
        $refTable->addColumn('ligas_id', 'integer', array('signed'=>'disable'))
            ->addForeignKey('ligas_id', 'ligas', 'id', array('delete'=>'CASCADE','update'=>'NO_ACTION'))
            ->update();
    }
}
