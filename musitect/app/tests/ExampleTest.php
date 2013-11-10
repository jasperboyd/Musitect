<?php

use Mockery;

//Example mock test using Mockery and PhpUnit
class Foo {
	protect $bar; 

	public function __construct (Bar $bar) 
	 { 
	 	$this->bar = $bar; 
	}

	public function fire ()
	{
		echo 'do a bunch of things'

		$this->bar->doIt();
	}

	public function doIt ()
	{
		return 'doing it'; 
	}

}

class Bar { 

}

class ExampleTest extends TestCase {

	public function tearDown()
	{
		Mockery::close(); 
	}
	
	/**
	 * A basic functional test example.
	 *
	 * @return void
	 */
	public function testBasicExample()
	{
		$bar = Mockery::mock('Bar');
		$bar->shouldRecieve('doIt')->once()->andReturn('mocked');  
		$foo = new Foo($bar);
		$output = $foo->fire(); 

		$this->assertEquals('doing it', $output);	
	}

}