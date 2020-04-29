<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EstadioTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EstadioTable Test Case
 */
class EstadioTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\EstadioTable
     */
    public $Estadio;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Estadio',
        'app.Direccion',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Estadio') ? [] : ['className' => EstadioTable::class];
        $this->Estadio = TableRegistry::getTableLocator()->get('Estadio', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Estadio);

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
