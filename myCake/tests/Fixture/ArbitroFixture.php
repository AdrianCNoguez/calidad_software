<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ArbitroFixture
 */
class ArbitroFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'arbitro';
    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'posicion' => ['type' => 'string', 'length' => 255, 'null' => false, 'default' => null, 'collate' => 'utf8_spanish2_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'partidosJ' => ['type' => 'string', 'length' => 255, 'null' => false, 'default' => null, 'collate' => 'utf8_spanish2_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'ligas_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'encuentro_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'ligas_id' => ['type' => 'index', 'columns' => ['ligas_id'], 'length' => []],
            'encuentro_id' => ['type' => 'index', 'columns' => ['encuentro_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'arbitro_ibfk_1' => ['type' => 'foreign', 'columns' => ['ligas_id'], 'references' => ['ligas', 'id'], 'update' => 'noAction', 'delete' => 'cascade', 'length' => []],
            'arbitro_ibfk_2' => ['type' => 'foreign', 'columns' => ['encuentro_id'], 'references' => ['encuentro', 'id'], 'update' => 'noAction', 'delete' => 'cascade', 'length' => []],
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
                'posicion' => 'Lorem ipsum dolor sit amet',
                'partidosJ' => 'Lorem ipsum dolor sit amet',
                'ligas_id' => 1,
                'encuentro_id' => 1,
            ],
        ];
        parent::init();
    }
}
