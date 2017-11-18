<?php
use PHPUnit\Framework\TestCase;

/**
 * 对 PHP 错误进行测试
 */
class ExpectedErrorTest extends TestCase
{
    /**
     * @expectedException PHPUnit\Framework\Error\Error
     */
    public function testFailingInclude()
    {
        include 'not_existing_file.php';
    }
}