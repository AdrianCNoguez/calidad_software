<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\RedSTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\RedSTable Test Case
 */
class RedSTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\RedSTable
     */
    public $RedS;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.RedS',
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
        $config = TableRegistry::getTableLocator()->exists('RedS') ? [] : ['className' => RedSTable::class];
        $this->RedS = TableRegistry::getTableLocator()->get('RedS', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->RedS);

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
