﻿<?php

// funkcja pokazująca ilość minerałów w ekwipunku
// function showing the amount of minerals in the equipment

class AmountMinerals{

	public static function getAmount($mineral)
	{
		$query = require '../core/bootstrap.php';
		$amount = $query->select("SELECT * FROM user_data JOIN basic_equipment JOIN rare_equipment ON user_data.user = basic_equipment.user
			WHERE user_data.user = '$userName' AND basic_equipment.user = '$userName' AND rare_equipment.user = '$userName'");
		return $amount[$mineral];
	}
}	
	

?>
