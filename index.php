<?php
require_once('CustomSmarty.php');

class Flight{
	public $company;
	public $from;
	public $to;

	public function __construct(){
		$this->company 	= 'South African Airways';
		$this->from 	= 'Accra';
		$this->to 	= 'Cape Town'; 
	}
}

$courses = array(
	array('name' => 'Programming using BASIC', 'credit' => 2, 'score' => 70),
	array('name' => 'Web 2.0', 'credit' => 1, 'score' => 60),
	array('name' => 'RESTful API Design', 'credit' => 3, 'score' => 80),
	array('name' => 'Compiler Design & Construction', 'credit' => 2, 'score' => 49),
);

$countries = array(
	'gh' => 'Ghana',
	'ng' => 'Nigeria',
	'lr' => 'Liberia',
);

$smarty = new CustomSmarty();

$smarty->assign('flight', new Flight());
$smarty->assign('courses', $courses);
$smarty->assign('countries', $countries);
$smarty->assign('countryKeys', array_keys($countries));
$smarty->assign('selectedCountries', array('gh'));
$smarty->assign('posted', date('d m, Y'));

$smarty->display('index.html');
?>
