<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ArticuloTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ArticuloTable Test Case
 */
class ArticuloTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ArticuloTable
     */
    public $Articulo;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Articulo',
        'app.Tienda',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Articulo') ? [] : ['className' => ArticuloTable::class];
        $this->Articulo = TableRegistry::getTableLocator()->get('Articulo', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Articulo);

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
