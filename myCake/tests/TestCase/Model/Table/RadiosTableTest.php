<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\RadiosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\RadiosTable Test Case
 */
class RadiosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\RadiosTable
     */
    public $Radios;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Radios',
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
        $config = TableRegistry::getTableLocator()->exists('Radios') ? [] : ['className' => RadiosTable::class];
        $this->Radios = TableRegistry::getTableLocator()->get('Radios', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Radios);

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
