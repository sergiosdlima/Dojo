<?php
require_once('simpletest/autorun.php');
require_once('../classes/miojo.php');
	
class TestMiojo extends UnitTestCase {

	function setUp() {
		$this->miojo = new Miojo();
	}

	function test3min() {
		$this->assertEqual($this->miojo->calcularTempo(5, 7, 3), 10);
	}

	function test3minACalc() {
		$this->assertIdentical($this->miojo->calc(5, 7, 3, 5, 7), 10);
	}

	function test3minBCalc() {
		$this->assertIdentical($this->miojo->calc(5, 7, 3, 3, 7), 3);
	}

	function test2minBCalc() {
		$this->assertIdentical($this->miojo->calc(5, 7, 2, 5, 2), 2);
	}

	function testCozimentoMenorAmpulheta1() {
		$this->assertEqual($this->miojo->calcularTempo(5, 7, 5), "tempo de cozimento invalido");
 	}

	function testCozimentoMenorAmpulheta2() {
		$this->assertEqual($this->miojo->calcularTempo(7, 5, 5), "tempo de cozimento invalido");
 	}

	function test2min() {
		$this->assertEqual($this->miojo->calcularTempo(5, 7, 2), 7);
	}

	function test4minInvalido() {
		$this->assertEqual($this->miojo->calcularTempo(4, 4, 2), "tempo de cozimento invalido");
	}

}	
?>
