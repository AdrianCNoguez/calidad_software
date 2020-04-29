<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\RedTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\RedTable Test Case
 */
class RedTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\RedTable
     */
    public $Red;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Red',
        'app.Equipo',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Red') ? [] : ['className' => RedTable::class];
        $this->Red = TableRegistry::getTableLocator()->get('Red', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Red);

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
