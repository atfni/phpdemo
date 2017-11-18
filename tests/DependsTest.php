<?php
use PHPUnit\Framework\TestCase;

/**
 * 测试的依赖关系
 * 用 @ depends 标注来表达测试方法之间的依赖关系。
 * 当某个测试所依赖的测试失败时，PHPUnit 会跳过这个测试
 * 如果生产者返回的是一个对象，那么传递给消费者的将是一个指向此对象的引用。
 * 如果需要传递对象的副本而非引用，则应当用 @ depends clone 替代 @ depends。
 */
class DependsTest extends TestCase
{
    public function testEmpty()
    {
        $stack = [];
        $this->assertEmpty($stack);

        return $stack;
    }

    /**
     * @depends testEmpty
     */
    public function testPush(array $stack)
    {
        array_push($stack, 'foo');
        $this->assertEquals('foo', $stack[count($stack)-1]);
        $this->assertNotEmpty($stack);

        return $stack;
    }

    /**
     * @depends testPush
     */
    public function testPop(array $stack)
    {
        $this->assertEquals('foo', array_pop($stack));
        $this->assertEmpty($stack);
    }

}
