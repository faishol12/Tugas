<?php
	function validateKosong(&$errors, $field_list, $field_name){ //satu
		if (empty($field_list[$field_name])) $errors[$field_name] = 'Form is empty';
	}
	function validateAlpha(&$errors, $field_list, $field_name){ //dua
		$pattern = "/^[a-zA-Z' -]+$/";
		if (!preg_match($pattern, $field_list[$field_name])) $errors[$field_name] = 'field must contain alphabets only';
	}
	function validateNum(&$errors, $field_list, $field_name){ //tiga
		$pattern = "/^[0-9]+$/";
		if (!preg_match($pattern, $field_list[$field_name])) $errors[$field_name] = 'field must contain numeric only';
	}
	function validateEmail(&$errors, $field_list, $field_name){ //empat
		$pattern = "/^[a-zA-Z0-9_.]+@[a-zA-Z0-9]+.[a-zA-Z0-9]+$/";
		if (!preg_match($pattern, $field_list[$field_name])) $errors[$field_name] = 'invalid email address';
	}
	function validateLenNum(&$errors, $field_list, $field_name){ //lima
		$pattern = "/^\d{11,}$/";
		if (!preg_match($pattern, $field_list[$field_name])) $errors[$field_name] = 'Number is less than 11';
	}
	function validateLenChar(&$errors, $field_list, $field_name){ //enam
		$pattern = "/.{6,}$/";
		if (!preg_match($pattern, $field_list[$field_name])) $errors[$field_name] = 'Password too weak. Consider using more than 6 chars';
	}
	function validateAlnum(&$errors, $field_list, $field_name){ //tujuh
		$pattern = "/(?=.*\d)(?=.*[a-z])(?=.*[A-Z])/";
		if (!preg_match($pattern, $field_list[$field_name])) $errors[$field_name] = 'Password must contain at least one UPPERCASE, lowercase, and number';
	}
	function validateSame(&$errors, $field_list, $field_name_a, $field_name_b){ //lapan
		$pattern = "/^$field_list[$field_name_a]$/";
		if (!preg_match($pattern, $field_list[$field_name_b])) $errors[$field_name_b] = 'Wrong Password';
	}
	
?>