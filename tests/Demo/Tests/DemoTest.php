<?php
namespace lihsai0\Tests;

use PHPUnit\Framework\TestCase;

use lihsai0\Demo\Demo;

class DemoTest extends TestCase
{
  function testDemo()
  {
    $demo = new Demo();
    list($resp, $err) = $demo->fetch("http://localhost:9000/ok.php");
    $this->assertNull($err);
  }
}

