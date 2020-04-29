<?php
use Migrations\AbstractMigration;

class CreateRadios extends AbstractMigration
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
        $table = $this->table('radios');
        $table->addColumn('Radiodifusora', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);
        $table->addColumn('sintonia', 'float', [
            'default' => null,
            'null' => false,
        ]);
        $table->create();

        $refTable =$this->table('radios');
        $refTable->addColumn('medios_id', 'integer', array('signed'=>'disable'))
            ->addForeignKey('medios_id', 'medios', 'id', array('delete'=>'CASCADE','update'=>'NO_ACTION'))
            ->update();

        $refTable =$this->table('radios');
        $refTable->addColumn('encuentro_id', 'integer', array('signed'=>'disable'))
            ->addForeignKey('encuentro_id', 'encuentro', 'id', array('delete'=>'CASCADE','update'=>'NO_ACTION'))
            ->update();
    }
}
