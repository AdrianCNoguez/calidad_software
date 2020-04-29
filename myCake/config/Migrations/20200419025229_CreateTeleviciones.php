<?php
use Migrations\AbstractMigration;

class CreateTeleviciones extends AbstractMigration
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
        $table = $this->table('televiciones');
        $table->addColumn('tvPublic', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);
        $table->addColumn('canalPublic', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);
        $table->addColumn('tvPriv', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);
        $table->addColumn('canalPriv', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);
        $table->create();
        $refTable =$this->table('televiciones');
        $refTable->addColumn('medios_id', 'integer', array('signed'=>'disable'))
            ->addForeignKey('medios_id', 'medios', 'id', array('delete'=>'CASCADE','update'=>'NO_ACTION'))
            ->update();

        $refTable =$this->table('televiciones');
        $refTable->addColumn('encuentro_id', 'integer', array('signed'=>'disable'))
            ->addForeignKey('encuentro_id', 'encuentro', 'id', array('delete'=>'CASCADE','update'=>'NO_ACTION'))
            ->update();
    }
}
