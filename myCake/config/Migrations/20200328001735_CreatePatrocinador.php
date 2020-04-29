<?php
use Migrations\AbstractMigration;

class CreatePatrocinador extends AbstractMigration
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
        $table = $this->table('patrocinador');
        $table->addColumn('patro', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);
        $table->create();

        $refTable =$this->table('patrocinador');
        $refTable->addColumn('estadio_id', 'integer', array('signed'=>'disable'))
            ->addForeignKey('estadio_id', 'estadio', 'id', array('delete'=>'CASCADE','update'=>'NO_ACTION'))
            ->update();
    }


}
