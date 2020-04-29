<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * PersonaFixture
 */
class PersonaFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'persona';
    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'nombre' => ['type' => 'string', 'length' => 255, 'null' => false, 'default' => null, 'collate' => 'utf8_spanish2_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'apellidoP' => ['type' => 'string', 'length' => 255, 'null' => false, 'default' => null, 'collate' => 'utf8_spanish2_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'apellidoM' => ['type' => 'string', 'length' => 255, 'null' => false, 'default' => null, 'collate' => 'utf8_spanish2_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'edad' => ['type' => 'string', 'length' => 255, 'null' => false, 'default' => null, 'collate' => 'utf8_spanish2_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'equipo_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'equipo_id' => ['type' => 'index', 'columns' => ['equipo_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'persona_ibfk_1' => ['type' => 'foreign', 'columns' => ['equipo_id'], 'references' => ['equipo', 'id'], 'update' => 'noAction', 'delete' => 'cascade', 'length' => []],
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
                'nombre' => 'Lorem ipsum dolor sit amet',
                'apellidoP' => 'Lorem ipsum dolor sit amet',
                'apellidoM' => 'Lorem ipsum dolor sit amet',
                'edad' => 'Lorem ipsum dolor sit amet',
                'equipo_id' => 1,
            ],
        ];
        parent::init();
    }
}
