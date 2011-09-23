<?php
/**
 *
 * @author Ed van Beinum <e@edvanbeinum.com>
 * @version $Id$
 * @copyright Ibuildings 07/08/2011
 * @package HuskyTest
 */

require_once dirname(__FILE__) . '/../../../Husky/bootstrap.php';
require_once 'vfsStream/vfsStream.php';

/**
 * Test class for Page.
 * Generated by PHPUnit on 2011-08-07 at 21:53:52.
 */
class PageTest extends PHPUnit_Framework_TestCase
{

    /**
     * Helper function that creates a mock FormatterFactory and will set the value returned by caliing execute() on the
     * created formatter class
     *
     * @param $returnValue
     * @return PHPUnit_Framework_MockObject_MockObject
     */
    protected function _getMockFormatterFactory($returnValue)
    {
        $mockFormatter = $this->getMock('\Husky\Formatter\Adapter\Markdown');
        $mockFormatter->expects($this->any())
                ->method('execute')
                ->will($this->returnValue($returnValue));

        $mockFactory = $this->getMock('\Husky\Formatter\Factory', array('getFormatter'));
        $mockFactory->expects($this->any())
                ->method('getFormatter')
                ->will($this->returnValue($mockFormatter));

        return $mockFactory;
    }

    /**
     * Helper function that returns a new instance of the Page Helper object
     *
     * @param $mockFactory
     * @return Husky\Helper\Page
     */
    protected function _getPage($mockFactory)
    {
        return $this->_page = new \Husky\Helper\Page($mockFactory);
    }

    /**
     * @test
     */
    public function getPageTitle_returns_expected_string_with_h1()
    {
        $expected = "This is nice";
        $page = $this->_getPage($this->_getMockFormatterFactory('<h1>This is nice</h1>'));
        $this->assertSame($expected, $page->getPageTitle('dummy', 'test-file'));
    }

    /**
     * @test
     */
    public function getPageTitle_returns_expected_string_with_h2()
    {
        $expected = "This is nice";
        $page = $this->_getPage($this->_getMockFormatterFactory('<h2>This is nice</h2>'));
        $this->assertSame($expected, $page->getPageTitle('dummy', 'test-file'));
    }

    /**
     * @test
     */
    public function getPageTitle_returns_expected_string_from_filename()
    {
        $expected = "This Is Nice";
        $page = $this->_getPage($this->_getMockFormatterFactory('<p>This is nice</p>'));
        $this->assertSame($expected, $page->getPageTitle('dummy', 'this-is-nice'));
    }

}