<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * TelevicionesFixture
 */
class TelevicionesFixture extends TestFixture
{
    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'tvPublic' => ['type' => 'string', 'length' => 255, 'null' => false, 'default' => null, 'collate' => 'utf8_spanish2_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'canalPublic' => ['type' => 'string', 'length' => 255, 'null' => false, 'default' => null, 'collate' => 'utf8_spanish2_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'tvPriv' => ['type' => 'string', 'length' => 255, 'null' => false, 'default' => null, 'collate' => 'utf8_spanish2_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'canalPriv' => ['type' => 'string', 'length' => 255, 'null' => false, 'default' => null, 'collate' => 'utf8_spanish2_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'medios_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'encuentro_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'medios_id' => ['type' => 'index', 'columns' => ['medios_id'], 'length' => []],
            'encuentro_id' => ['type' => 'index', 'columns' => ['encuentro_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'televiciones_ibfk_1' => ['type' => 'foreign', 'columns' => ['medios_id'], 'references' => ['medios', 'id'], 'update' => 'noAction', 'delete' => 'cascade', 'length' => []],
            'televiciones_ibfk_2' => ['type' => 'foreign', 'columns' => ['encuentro_id'], 'references' => ['encuentro', 'id'], 'update' => 'noAction', 'delete' => 'cascade', 'length' => []],
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
                'tvPublic' => 'Lorem ipsum dolor sit amet',
                'canalPublic' => 'Lorem ipsum dolor sit amet',
                'tvPriv' => 'Lorem ipsum dolor sit amet',
                'canalPriv' => 'Lorem ipsum dolor sit amet',
                'medios_id' => 1,
                'encuentro_id' => 1,
            ],
        ];
        parent::init();
    }
}
