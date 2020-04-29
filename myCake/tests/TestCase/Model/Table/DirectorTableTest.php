<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DirectorTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DirectorTable Test Case
 */
class DirectorTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\DirectorTable
     */
    public $Director;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Director',
        'app.Persona',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Director') ? [] : ['className' => DirectorTable::class];
        $this->Director = TableRegistry::getTableLocator()->get('Director', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Director);

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
