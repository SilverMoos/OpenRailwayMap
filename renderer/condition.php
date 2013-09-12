<?php
	/*
	OpenRailwayMap Copyright (C) 2012 Alexander Matheisen
	This program comes with ABSOLUTELY NO WARRANTY.
	This is free software, and you are welcome to redistribute it under certain conditions.
	See http://wiki.openstreetmap.org/wiki/OpenRailwayMap for details.
	*/


	// tag conditions for faster database queries, smaller tiles and faster rendering
	// conditions are hardcoded for better results, but could also be generated by a stylefile parser
	$condition = array
	(
		0 => "AND (tags->'usage'='main')",
		1 => "AND (tags->'usage'='main')",
		2 => "AND (tags->'usage'='main')",
		3 => "AND (tags->'usage'='main')",
		4 => "AND (tags->'usage'='main')",
		5 => "AND (tags->'usage'='main')",
		6 => "AND (tags->'usage'='main')",
		7 => "AND (tags->'usage'='main')",
		8 => "AND ((tags->'usage'='main') OR (tags->'usage'='branch'))",
		9 => "AND ((tags->'usage'='main') OR (tags->'usage'='branch') OR (tags->'railway'='disused') OR (tags->'railway'='abandoned') OR (tags->'railway'='proposed') OR (tags->'railway'='construction') OR (tags->'railway'='station') OR (tags->'railway'='narrow_gauge'))",
		10 => "AND ((tags->'railway'='rail') OR (tags->'railway'='disused') OR (tags->'railway'='abandoned') OR (tags->'railway'='proposed') OR (tags->'railway'='construction') OR (tags->'railway'='light_rail') OR (tags->'railway'='tram') OR (tags->'railway'='subway') OR (tags->'railway'='narrow_gauge') OR (tags->'railway'='station') OR (tags->'railway'='halt'))"
	);
?>
