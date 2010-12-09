<?php
 
class PostSoireeSalsaTest extends PHPUnit_Framework_TestCase {
	public function setUp() {
		$this->post = new Post();
		$this->post->setTitle('Soiree Salsa');
		$this->post->setContent('Ce soir à 20h');
	}


	public function testTitleShouldBeSoireeSalsa() {
		$this->assertEquals('Soiree Salsa',
												$this->post->getTitle());
	}


	public function testContentShouldBeCeSoir20h() {
		$this->assertEquals('Ce soir à 20h', 
												$this->post->getContent());
	}
	 
}

?>