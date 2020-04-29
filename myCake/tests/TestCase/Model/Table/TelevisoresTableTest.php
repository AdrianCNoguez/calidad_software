<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TelevisoresTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TelevisoresTable Test Case
 */
class TelevisoresTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\TelevisoresTable
     */
    public $Televisores;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Televisores',
        'app.Medios',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Televisores') ? [] : ['className' => TelevisoresTable::class];
        $this->Televisores = TableRegistry::getTableLocator()->get('Televisores', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Televisores);

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
