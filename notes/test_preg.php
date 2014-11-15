<?php
	
	function check_characters($test_string){
		$result = preg_match('/[^0-9A-Za-z]/', $test_string);
		echo "$test_string is $result <br/>";
		}
		
		check_characters("dgdfg");
		check_characters("DF465");
		check_characters("#$SDF");
		check_characters("dfg.fgh");
		check_characters("fgh ghj");
?>