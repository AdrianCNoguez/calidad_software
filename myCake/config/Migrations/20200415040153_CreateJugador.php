<?php
use Migrations\AbstractMigration;

class CreateJugador extends AbstractMigration
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
        $table = $this->table('jugador');
        $table->addColumn('Nacionalidad', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);
        $table->addColumn('Estatura', 'float', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('Peso', 'float', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('MovilHabil', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);
        $table->addColumn('Posicion', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);
        $table->addColumn('Perfil', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);
        $table->addColumn('Pie_Debil', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);
        $table->create();
        $refTable =$this->table('jugador');
        $refTable->addColumn('persona_id', 'integer', array('signed'=>'disable'))
            ->addForeignKey('persona_id', 'persona', 'id', array('delete'=>'CASCADE','update'=>'NO_ACTION'))
            ->update();
    }
}
