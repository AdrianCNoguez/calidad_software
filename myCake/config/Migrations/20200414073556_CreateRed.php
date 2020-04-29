<?php
use Migrations\AbstractMigration;

class CreateRed extends AbstractMigration
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
        $table = $this->table('red');
        $table->addColumn('Tw', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);
        $table->addColumn('Fb', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);
        $table->addColumn('Insta', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);
        $table->create();

        $refTable =$this->table('red');
        $refTable->addColumn('equipo_id', 'integer', array('signed'=>'disable'))
            ->addForeignKey('equipo_id', 'equipo', 'id', array('delete'=>'CASCADE','update'=>'NO_ACTION'))
            ->update();
    }
}
