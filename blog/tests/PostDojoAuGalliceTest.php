<?php
 
class PostDojoAuGalliceTest extends PHPUnit_Framework_TestCase {

	public function setUp() {
		$this->post = new Post();
 		$this->post->setTitle('Dojo au Gallice');
		$this->post->setContent("Panini à donf !");
	}

	/** @test */
	public function titleShouldBeDojoAuGallice() {
		$this->assertEquals('Dojo au Gallice',
												$this->post->getTitle());
	}

	/** @test */
	public function contentShouldBePaniniADonf() {
		$this->assertEquals("Panini à donf !",
												$this->post->getContent());
	}

	/** 
	 * @test
	 * @expectedException MessageNotUnderstood 
	 */
	public function getZorkShouldRaiseInvalidMethodException() {
		$this->post->zork();
	}

	/**
	 * @test
	 * @expectedException MessageNotUnderstood
	 */
	public function aaaTitleShoulsRaiseInvalidMethodException() {
		$this->post->aaaTitle();
	} 


  /** 
	 * @test
	 */
	public function tagsShouldBeCoding() {
		$this->post->setTags("Coding");
		$this->assertEquals("Coding", $this->post->getTags());
	}


	/**
	 * @test
	 * @expectedException MessageNotUnderstood
	 */
	public function setTagsWithoutParameterShouldRaiseMessageNotUnderstood() {
		$this->post->setTags();
	}
}

?>