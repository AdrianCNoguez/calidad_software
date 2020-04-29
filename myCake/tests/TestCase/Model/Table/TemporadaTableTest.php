<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TemporadaTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TemporadaTable Test Case
 */
class TemporadaTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\TemporadaTable
     */
    public $Temporada;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Temporada',
        'app.Ligas',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Temporada') ? [] : ['className' => TemporadaTable::class];
        $this->Temporada = TableRegistry::getTableLocator()->get('Temporada', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Temporada);

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
