<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TiendaTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TiendaTable Test Case
 */
class TiendaTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\TiendaTable
     */
    public $Tienda;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Tienda',
        'app.Estadio',
        'app.Patrocinador',
        'app.Articulo',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Tienda') ? [] : ['className' => TiendaTable::class];
        $this->Tienda = TableRegistry::getTableLocator()->get('Tienda', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Tienda);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
