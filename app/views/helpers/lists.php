<?php

class ListsHelper extends AppHelper {
	var $lastTFM_nest = "";
	
    function nested($value){
		$TFM_nest = $value;
		if ($lastTFM_nest != $value) {
			$lastTFM_nest = $value;
			return $lastTFM;
		}
		
		
    }
}
?>