<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Baru extends CI_Controller {
	
	public function index()
	{
		/*
		//Variables
		$a = 1; //Integer
		$b = "Nadine"; //String
		$c = 0.2; //Float
		$d = 'a'; //Char

		$e = array("Nadnad", "AwA", "UwU");
		$idx_e = array("x"=>"Andi", "y"=>"Budi", "z"=>"Cici");

		//Print
		echo "The value of a: $a";
		echo "The value of b: $b";
		echo "The value of c: $c";
		echo "The value of d: $d";
		echo "The value of e-1: $e[0]";
		echo "The value of e-2: $e[1]";
		echo "The value of e-3: $e[2]";
		echo "The value of indexed-array:", $idx_e["x"];
		echo "The value of indexed-array:", $idx_e["y"];
		echo "The value of indexed-array:", $idx_e["z"];

		//Numerical Operation
		$aa = $a + 1;
		$ab = $a + $c;
		//String Operation
		$ba = $b . $d;
		//Print the value of operations
		echo "Integer operation: $aa, Integer-float operation: $ab, String operation: $ba";

		//Array Operation
		echo "The value of e-1: $e[0] <br/>";
		echo "The value of e-2: $e[1] <br/>";
		echo "The value of e-3: $e[2] <br/>";
		$f = sort($e);

		//After sort
		echo "The value of f-1: $e[0] <br/>";
		echo "The value of f-1: $e[1] <br/>";
		echo "The value of f-1: $e[2] <br/>";

		for ($i=0;$i<count($e);$i++)
			echo "Nilai array e-$i: $e[$i] <br/>";
		
		$i=0;
		foreach ($idx_e as $idx=>$value) {
			echo "Nilai array e-$idx: $value <br/>";
			$i++;
		} 
		*/

		$this->load->view("Test HTML and CSS/Test");
	}

	/*public function printcaller($fname="First Name", $lname="Last Name")
	{
		echo "Passing parameter <br/>";
		$name = "$fname $lname";
		$this->_print($name); //$this is a reserved word
	}
	
	private function _print($printed_name="")
	{
		//echo "The printed name is $printed_name";
		$this->load->view("baru/printThis", array ("namename" => $printed_name));
	}
*/
	public function MuffKidnappingTemplate(){
		$this->load->view("common/header");
		$this->load->view("common/body");
		$this->load->view("common/footer");
	}
	public function viewListReviewers()
	{
		$this->load->model('master');
		$results = $this->master->getListReviewers();

		//echo 'The size of the array is ' . sizeof($results) . '<br>';

		//foreach ($results as $item) {
		//echo $item['id_reviewer'] . ' ' . $item['nama'] . '<br>';
		//}

		//$this->load->view("Baru/selectReviewer", array('reviewers' => $results));
		var_dump($results);
	}
}