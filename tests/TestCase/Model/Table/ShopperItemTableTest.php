<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ShopperItemTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ShopperItemTable Test Case
 */
class ShopperItemTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ShopperItemTable
     */
    public $ShopperItem;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.shopper_item'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('ShopperItem') ? [] : ['className' => ShopperItemTable::class];
        $this->ShopperItem = TableRegistry::get('ShopperItem', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ShopperItem);

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
}
