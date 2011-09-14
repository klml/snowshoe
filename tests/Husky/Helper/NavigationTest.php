<?php
/**
 *
 * @author Ed van Beinum <edwin@sessiondigital.com>
 * @version $Id$
 * @copyright Ibuildings 07/08/2011
 * @package HuskyTest
 */


require_once dirname(__FILE__) .  '/../../../Husky/bootstrap.php';

/**
 * Test class for Navigation.
 * Generated by PHPUnit on 2011-09-10 at 09:25:42.
 */
class NavigationTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Husky\Helper\Navigation
     */
    protected $_navigation;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $mockParser = $this->getMock('\Husky\Parser\Parser');
        $this->_navigation = new \Husky\Helper\Navigation($mockParser);
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
        unset($this->_navigation);
    }

    /**
     * @todo Implement testBuildPrimaryNavigation().
     */
    public function testBuildPrimaryNavigation()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @test
     */
    public function getUrlFromFilePath_returns_expected_string()
    {
        $path = APPLICATION_PATH . \Husky\Config::CONTENT_PATH . 'test.md';
        $expected = \Husky\Config::ROOT_URL . 'test.html';

        $this->assertSame($expected, $this->_navigation->getUrlFromFilePath($path));
    }

        /**
     * @test
     */
    public function getUrlFromFilePath_with_subdirsreturns_expected_string()
    {
        $path = APPLICATION_PATH . \Husky\Config::CONTENT_PATH . 'testDir/test.md';
        $expected = \Husky\Config::ROOT_URL . 'testDir/test.html';

        $this->assertSame($expected, $this->_navigation->getUrlFromFilePath($path, \Husky\Config::ROOT_URL));
    }
}

?>
