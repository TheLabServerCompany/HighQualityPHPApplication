<?php

$twoMonthsBehind = date("U", mktime(0,0,0,date("m")-1,1,date("Y")));
	if (isset($row["user"])) {
		$archivesSelect = myQ("
			SELECT `date`,`id` 
			FROM `[x]blogs` 
			WHERE `user`='{$row["user"]}' 
			AND `date` >= '{$twoMonthsBehind}'
		");
	}

?>
