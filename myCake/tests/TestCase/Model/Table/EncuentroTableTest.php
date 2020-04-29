<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EncuentroTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EncuentroTable Test Case
 */
class EncuentroTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\EncuentroTable
     */
    public $Encuentro;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Encuentro',
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
        $config = TableRegistry::getTableLocator()->exists('Encuentro') ? [] : ['className' => EncuentroTable::class];
        $this->Encuentro = TableRegistry::getTableLocator()->get('Encuentro', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Encuentro);

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
