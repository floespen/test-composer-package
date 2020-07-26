<?php

namespace TestComposerPackage\Test;

use TestComposerPackage\TestComposerPackage\SayHello;

require_once __DIR__ . '/../vendor/autoload.php';


class Test extends \PHPUnit\Framework\TestCase
{

	public function testHello()
	{
		SayHello::world();
		$this->expectOutputString('Hello World, Composer!'. PHP_EOL);
	}
}
