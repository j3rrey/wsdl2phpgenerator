<?php
require_once 'PHPUnit/Framework.php';

require_once dirname(__FILE__).'/../../cli/Flag.php';

/**
 * Test class for Flag.
 * Generated by PHPUnit on 2009-10-25 at 02:55:14.
 */
class FlagTest extends PHPUnit_Framework_TestCase
{
  /**
   * @var Flag
   */
  protected $object;

  /**
   * Sets up the fixture, for example, opens a network connection.
   * This method is called before a test is executed.
   */
  protected function setUp()
  {
    $this->object = new Flag('-f', '');
  }

  /**
   * Tears down the fixture, for example, closes a network connection.
   * This method is called after a test is executed.
   */
  protected function tearDown()
  {
  }

  /**
   * 
   */
  public function testAddAlias()
  {
    $this->assertEquals(0, count($this->object->getAliases()));
    $this->object->addAlias('-g');
    $this->assertEquals(1, count($this->object->getAliases()));
    $this->object->addAlias('-h');
    $this->assertEquals(2, count($this->object->getAliases()));
    $this->object->addAlias('-i');
    $this->assertEquals(3, count($this->object->getAliases()));
    $this->object->addAlias('-j');
    $this->assertEquals(4, count($this->object->getAliases()));

    $this->setExpectedException('Exception');
    $this->object->addAlias('-k');
  }
}
?>
