<?php

use org\bovigo\vfs\ {
    vfsStreamWrapper as vfsStreamWrapper,
    vfsStreamDirectory as vfsStreamDirectory,
    vfsStream as vfsStream
};

use App\Library\DirectoryCreator;

/**
 * Class DirectoryCreatorTest
 */
class DirectoryCreatorTest extends \PHPUnit\Framework\TestCase
{
    /**
     * Setup
     */
    public function setUp()
    {
        vfsStreamWrapper::register();
        vfsStreamWrapper::setRoot(new vfsStreamDirectory('exampleDir'));
    }

    /**
     * Test for create directory
     */
    public function testDirectoryIsCreated()
    {
        $example = new DirectoryCreator('id');
        $this->assertFalse(vfsStreamWrapper::getRoot()->hasChild('id'));

        $example->setDirectory(vfsStream::url('exampleDir'));
        $this->assertTrue(vfsStreamWrapper::getRoot()->hasChild('id'));
    }
}