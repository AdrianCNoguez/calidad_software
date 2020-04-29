<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * TiendaFixture
 */
class TiendaFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'tienda';
    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'Nom_tienda' => ['type' => 'string', 'length' => 255, 'null' => false, 'default' => null, 'collate' => 'utf8_spanish2_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'estadio_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'patrocinador_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'estadio_id' => ['type' => 'index', 'columns' => ['estadio_id'], 'length' => []],
            'patrocinador_id' => ['type' => 'index', 'columns' => ['patrocinador_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'tienda_ibfk_1' => ['type' => 'foreign', 'columns' => ['estadio_id'], 'references' => ['estadio', 'id'], 'update' => 'noAction', 'delete' => 'cascade', 'length' => []],
            'tienda_ibfk_2' => ['type' => 'foreign', 'columns' => ['patrocinador_id'], 'references' => ['patrocinador', 'id'], 'update' => 'noAction', 'delete' => 'cascade', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8_spanish2_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd
    /**
     * Init method
     *
     * @return void
     */
    public function init()
    {
        $this->records = [
            [
                'id' => 1,
                'Nom_tienda' => 'Lorem ipsum dolor sit amet',
                'estadio_id' => 1,
                'patrocinador_id' => 1,
            ],
        ];
        parent::init();
    }
}
