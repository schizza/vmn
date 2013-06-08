<?php
 /**
  * default class for vmn
  * 
  * @package vmn
  * @copyright Copyright (c) 2013 Lukas Svoboda
  * @version ##VERSION##, ##DATE##
  */
 
 class vmn {

 	private $holidays = array();
 	
 	public function __construct ()
 	{
 		$this->fillHolidays($this->holidays);
 	}
 	
 	private function fillHolidays (&$hArray) {
 		$year = getdate();
 		$year = $year["year"];
 		
 		$hArray = array( mktime(null,null,null,"1","1",$year),
 					mktime(null,null,null,5,1,$year),
 					mktime(null,null,null,5,8,$year),
 					mktime(null,null,null,7,5,$year),
 					mktime(null,null,null,7,6,$year),
 					mktime(null,null,null,9,28,$year),
 					mktime(null,null,null,10,28,$year),
 					mktime(null,null,null,11,17,$year),
 					mktime(null,null,null,12,24,$year),
 					mktime(null,null,null,12,25,$year),
 					mktime(null,null,null,12,26,$year),
 					easter_date($year)+86400
 				);
 	}
 	
 	public function getjQueryHolidays() {
 		foreach ($this->holidays as $holiday) {
 			$tmp .=  "'" . date("n/j/Y",$holiday) . "',";
 		}
 		
 		return trim($tmp,",");
 		
 	}
 	
 	function printHolidays() {
 	 	print_r ($this->holidays,0);

 	}
 }
 
/**
 1. leden - Den obnovy samostatného českého státu,
 1. květen - Svátek práce,
 8. květen - Den vítězství,
 5. červenec - Den slovanských věrozvěstů Cyrila a Metoděje,
 6. červenec - Den upálení mistra Jana Husa,
 28. září - Den české státnosti,
 28. říjen - Den vzniku samostatného československého státu,
 17. listopad - Den boje za svobodu a demokracii.
 24. prosinec - Štědrý den,
 25. prosinec - 1. svátek vánoční,
 26. prosinec - 2. svátek vánoční.
 
 */
 ?>