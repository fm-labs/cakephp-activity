<?php
namespace Activity\Test\TestCase\Model\Behavior;

use Activity\Model\Behavior\ActivityBehavior;
use Cake\TestSuite\TestCase;

/**
 * Activity\Model\Behavior\ActivityBehavior Test Case
 */
class ActivityBehaviorTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \Activity\Model\Behavior\ActivityBehavior
     */
    public $Activity;

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $this->Activity = new ActivityBehavior();
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Activity);

        parent::tearDown();
    }

    /**
     * Test initial setup
     *
     * @return void
     */
    public function testInitialization()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
