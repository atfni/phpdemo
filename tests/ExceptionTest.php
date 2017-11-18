<?php
use PHPUnit\Framework\TestCase;

/**
 * 对异常进行测试
 */
class ExceptionTest extends TestCase
{
    public function testException()
    {
        $this->expectException(InvalidArgumentException::class);
    }

    /**
     * @expectedException InvalidArgumentException
     */
    public function testException2()
    {
    }
}