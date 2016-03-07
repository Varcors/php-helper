<?php
function get($variable, $validation = false, $if_false = false, $type = "string") {
	if(!is_string($variable)){
		die($variable." is Not A String");	
	}
    if (!isset($_GET[$variable])) {
        if (is_callable($if_false)) {
            return $if_false();
        } 
        else {
         if($if_false === false){
				return false; 
		 } else {
				switch ($type) {
				case 'int':
					$value = (int) $if_false;
					break;
				 case 'bool':
					$value =  (bool) $if_false;
					break;
				case 'float':
					$value =  (float) $if_false;
				default:
					$value =  (string) $if_false;
			}  
		 }
        }
    } 
    else {
        switch ($type) {
            case 'int':
                $value =  (int) $_GET[$variable];
                break;
             case 'bool':
                $value =  (bool) $_GET[$variable];
                break;
            case 'float':
                $value =  (float) $_GET[$variable];
            default:
                $value =  (string) $_GET[$variable];
        } 
    }
	 if (is_callable($validation)) {
            return $validation($value);
        }  else {
			return 	$value;
		}

}
function post($variable, $validation = false, $if_false = false, $type = "string") {
	if(!is_string($variable)){
		die($variable." is Not A String");	
	}
    if (!isset($_POST[$variable])) {
        if (is_callable($if_false)) {
            return $if_false();
        } 
        else {
         if($if_false === false){
				return false; 
		 } else {
				switch ($type) {
				case 'int':
					$value = (int) $if_false;
					break;
				 case 'bool':
					$value =  (bool) $if_false;
					break;
				case 'float':
					$value =  (float) $if_false;
				default:
					$value =  (string) $if_false;
			}  
		 }
        }
    } 
    else {
        switch ($type) {
            case 'int':
                $value =  (int) $_POST[$variable];
                break;
             case 'bool':
                $value =  (bool) $_POST[$variable];
                break;
            case 'float':
                $value =  (float) $_POST[$variable];
            default:
                $value =  (string) $_POST[$variable];
        } 
    }
	 if (is_callable($validation)) {
            return $validation($value);
        }  else {
			return 	$value;
		}
}
function cookie($variable, $validation = false, $if_false = false, $type = "string") {
	if(!is_string($variable)){
		die($variable." is Not A String");	
	}
    if (!isset($_COOKIE[$variable])) {
        if (is_callable($if_false)) {
            return $if_false();
        } 
        else {
         if($if_false === false){
				return false; 
		 } else {
				switch ($type) {
				case 'int':
					$value = (int) $if_false;
					break;
				 case 'bool':
					$value =  (bool) $if_false;
					break;
				case 'float':
					$value =  (float) $if_false;
				default:
					$value =  (string) $if_false;
			}  
		 }
        }
    } 
    else {
        switch ($type) {
            case 'int':
                $value =  (int) $_COOKIE[$variable];
                break;
             case 'bool':
                $value =  (bool) $_COOKIE[$variable];
                break;
            case 'float':
                $value =  (float) $_COOKIE[$variable];
            default:
                $value =  (string) $_COOKIE[$variable];
        } 
    }
	 if (is_callable($validation)) {
            return $validation($value);
        }  else {
			return 	$value;
		}
}
