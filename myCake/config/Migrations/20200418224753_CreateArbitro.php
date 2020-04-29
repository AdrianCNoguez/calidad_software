<?php
use Migrations\AbstractMigration;

class CreateArbitro extends AbstractMigration
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
        $table = $this->table('arbitro');
        $table->addColumn('posicion', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);
        $table->addColumn('partidosJ', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);
        $table->create();
        $refTable =$this->table('arbitro');
        $refTable->addColumn('ligas_id', 'integer', array('signed'=>'disable'))
            ->addForeignKey('ligas_id', 'ligas', 'id', array('delete'=>'CASCADE','update'=>'NO_ACTION'))
            ->update();
        $refTable =$this->table('arbitro');
        $refTable->addColumn('encuentro_id', 'integer', array('signed'=>'disable'))
            ->addForeignKey('encuentro_id', 'encuentro', 'id', array('delete'=>'CASCADE','update'=>'NO_ACTION'))
            ->update();

    }
}
