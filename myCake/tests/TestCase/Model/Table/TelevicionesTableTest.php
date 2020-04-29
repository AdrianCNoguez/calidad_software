<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TelevicionesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TelevicionesTable Test Case
 */
class TelevicionesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\TelevicionesTable
     */
    public $Televiciones;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Televiciones',
        'app.Medios',
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
        $config = TableRegistry::getTableLocator()->exists('Televiciones') ? [] : ['className' => TelevicionesTable::class];
        $this->Televiciones = TableRegistry::getTableLocator()->get('Televiciones', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Televiciones);

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
