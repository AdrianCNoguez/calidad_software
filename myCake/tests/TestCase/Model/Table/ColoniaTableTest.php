<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ColoniaTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ColoniaTable Test Case
 */
class ColoniaTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ColoniaTable
     */
    public $Colonia;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Colonia',
        'app.Municipio',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Colonia') ? [] : ['className' => ColoniaTable::class];
        $this->Colonia = TableRegistry::getTableLocator()->get('Colonia', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Colonia);

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
