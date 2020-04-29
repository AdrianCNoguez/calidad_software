<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\JugadorTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\JugadorTable Test Case
 */
class JugadorTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\JugadorTable
     */
    public $Jugador;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Jugador',
        'app.Persona',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Jugador') ? [] : ['className' => JugadorTable::class];
        $this->Jugador = TableRegistry::getTableLocator()->get('Jugador', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Jugador);

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
