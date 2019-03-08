<?php
namespace Activity\Test\TestCase\Model\Table;

use Activity\Model\Table\ActivitiesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * Activity\Model\Table\ActivitiesTable Test Case
 */
class ActivitiesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \Activity\Model\Table\ActivitiesTable
     */
    public $Activities;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'plugin.activity.activities'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Activities') ? [] : ['className' => 'Activity\Model\Table\ActivitiesTable'];
        $this->Activities = TableRegistry::get('Activities', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Activities);

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
