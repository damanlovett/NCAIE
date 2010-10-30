<?php

class SwitchesHelper extends AppHelper {
	
    function onOff($value, $on = 'Yes', $off = 'No') {
        if ($value == 1) {
        	return $on;
		}else{
			return $off;
		     }
        }
   
}

?>