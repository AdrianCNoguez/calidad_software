<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MiembroTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MiembroTable Test Case
 */
class MiembroTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\MiembroTable
     */
    public $Miembro;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Miembro',
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
        $config = TableRegistry::getTableLocator()->exists('Miembro') ? [] : ['className' => MiembroTable::class];
        $this->Miembro = TableRegistry::getTableLocator()->get('Miembro', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Miembro);

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
