<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ShopperUserTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ShopperUserTable Test Case
 */
class ShopperUserTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ShopperUserTable
     */
    public $ShopperUser;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.shopper_user'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('ShopperUser') ? [] : ['className' => ShopperUserTable::class];
        $this->ShopperUser = TableRegistry::get('ShopperUser', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ShopperUser);

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
