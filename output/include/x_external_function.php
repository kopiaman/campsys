<?php
function cgpa_moe($data){

if($data=='A'){
	$cgpa=4.0;
	}else if($data=='A-'){
		$cgpa=3.67;	
	}else if($data=='B+'){
		$cgpa=3.33;	
	}else if($data=='B'){
		$cgpa=3.00;
	}else if($data=='B-'){
		$cgpa=2.67;	
	}else if($data=='C+'){
		$cgpa=2.33;
	}else if($data=='C'){
		$cgpa=2.00;
	}else if($data=='D+'){
		$cgpa=1.67;
	}else if($data=='D'){
		$cgpa=1.33;
	}else if($data=='D-'){
		$cgpa=1.00;
	}else if($data=='E'){
		$cgpa=0;
	}else{ $cgpa='';  
	};
return $cgpa;
};
?>