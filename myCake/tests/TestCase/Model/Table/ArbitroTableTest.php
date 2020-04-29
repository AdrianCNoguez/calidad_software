<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ArbitroTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ArbitroTable Test Case
 */
class ArbitroTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ArbitroTable
     */
    public $Arbitro;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Arbitro',
        'app.Ligas',
        'app.Encuentro',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Arbitro') ? [] : ['className' => ArbitroTable::class];
        $this->Arbitro = TableRegistry::getTableLocator()->get('Arbitro', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Arbitro);

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
