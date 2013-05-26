
<?php
include('product-comparision.php');

function table_summary($devices) {
	global $comparision;
	// var_dump($comparision);

	foreach($devices as $device) {
		$details = $comparision[$device]; ?>
		<div><?php var_dump($details['3-watt'])?></div>
<?php
	}
}
?>