<?php
namespace MagentoHackathon\Composer\Magento;

/**
 * Generated by PHPUnit_SkeletonGenerator on 2012-10-27 at 15:56:01.
 */
class ModmanParserTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var ModmanParser
     */
    protected $object;

    /**
     * @var string
     */
    protected $modmanFileDir;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $baseTestClassName = substr(basename(__FILE__), 0, -4);
        $this->modmanFileDir = dirname(__FILE__) . 'data/' . $baseTestClassName . '/';
        $this->object = new ModmanParser();
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
    }

    /**
     * @covers MagentoHackathon\Composer\Magento\ModmanParser::setFile
     * @covers MagentoHackathon\Composer\Magento\ModmanParser::getFile
     */
    public function testSetGetFile()
    {
        $fileName = 'test/dummy/file';
        $this->object->setFile($fileName);
        $this->assertSame($fileName, $this->object->getFile());
    }

    /**
     * @covers MagentoHackathon\Composer\Magento\ModmanParser::getModmanFile
     */
    public function testGetModmanFile()
    {
        $this->object->setFile($this->modmanFileDir);
        $this->assertSame($this->modmanFileDir . 'modman', $this->object->getModmanFile());
    }

    /**
     * @covers MagentoHackathon\Composer\Magento\ModmanParser::getMappings
     */
    public function testGetMappings()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }
}
