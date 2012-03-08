<?php
	class StaticTester {
		private static $id = 0;
		
		function __construct() {
			self::$id +=1;
		}
		
		public static function checkIdFromStaticMethod() {
			echo "Id from static method ".self::$id."<br />";
		}
		public function checkIdFromNonStaticMethod() {
			echo "Id from non static method ".self::$id."<br />";
		}
	}
/*
	$st1 = new StaticTester();
	StaticTester::checkIdFromStaticMethod();
	$st1->checkIdFromNonStaticMethod();
	$st1->checkIdFromStaticMethod();
	$st2 = new StaticTester();
	$st2->checkIdFromNonStaticMethod();
	$st2->checkIdFromStaticMethod();
	StaticTester::checkIdFromStaticMethod();
*/
?>
