<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PatrocinadorTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PatrocinadorTable Test Case
 */
class PatrocinadorTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\PatrocinadorTable
     */
    public $Patrocinador;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Patrocinador',
        'app.Estadio',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Patrocinador') ? [] : ['className' => PatrocinadorTable::class];
        $this->Patrocinador = TableRegistry::getTableLocator()->get('Patrocinador', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Patrocinador);

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
