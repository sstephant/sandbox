<?php
/**
 * Tests liés à PHP
 *
 * @author   Sylvain Stéphant <sstephant+github@gmail.com>>
 * @since    08/06/2015
 *
 * @version  $Id: $
 *
 * @category Test
 * @package  Php
 *
 * PHP Version 5
 */
class SimpleTest extends
    PHPUnit_Framework_TestCase
{
    /**
     * @test
     * @small
     * @coversNothing
     */
    public function testStringConcat()
    {
        $a = 'a';
        $b = 'b';
        $c = $a . $b;
        $this->assertEquals('ab', $c);
    }
}
