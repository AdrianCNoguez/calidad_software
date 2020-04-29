<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MunicipioTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MunicipioTable Test Case
 */
class MunicipioTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\MunicipioTable
     */
    public $Municipio;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Municipio',
        'app.Estado',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Municipio') ? [] : ['className' => MunicipioTable::class];
        $this->Municipio = TableRegistry::getTableLocator()->get('Municipio', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Municipio);

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
