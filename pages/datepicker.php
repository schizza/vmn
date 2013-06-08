<?php 
/**
 * datepicker.php
 * 
 * @category include_pages
 * @package vmn
 * @copyright Copyrigt (c) 2013 Lukas Svoboda
 * @version ##VERSION##, ##DATE##
 * 
 */

 if (!isset($vmn)) {
 	print "Possible hack attack!";
 	exit();
 }
 
?>

<script type="text/javascript">
	var datesArray=[ <?php print_r($vmn->getjQueryHolidays());?>]
	$(function(){
		$('#datepicker').multiDatesPicker({
			 inline: true,
			 hidden: false,
			dayNamesMin:["Ne","Po","Út","St","Čt","Pá","So"], monthNames: ["leden","únor","březen","duben","květen","červen","červenec","srpen","září","říjen","listopad","prosinec"],
			dateFormat: "dd-mm-yy",
			firstDay: "1",
			altField: "#dateData",
			 beforeShowDay: function (date) {
				var theday = (date.getMonth()+1) +'/'+ 
							date.getDate()+ '/' + 
							date.getFullYear();
					return [true,$.inArray(theday, datesArray) >=0?"ui-state-error":''];
				}
		});
	});
	</script>
	
	<form name="dataselector" id="dateselector" action="?doAction&amp;prepData" method="post">
	<div id="datepicker"></div>
	<input type="hidden" name="dateData" id="dateData"></input>
	<button type="submit">Připravit formulář</button>
	</form>
	<script type="text/javascript">
		$("button").button({ icons: { primary: "ui-icon-gear"} });
	</script>