
<?php
include('product-comparision.php');
include('category.php');

function table_summary($devices) {
	global $comparision;
	global $categories;
	?>

<table border="0" cellpadding="0" cellspacing="0" id="compare-products">
	<tr>
	<?php if(count($devices)>0) { ?>

				<td><table style = "border: 1px solid #ccc">
					<tr><td style = "border-bottom: 1px solid #ccc">category</td></tr>
					<?php foreach($categories as $category) { ?>
						<tr><td style = "border-bottom: 1px solid #ccc"><?php echo $category ?></td></tr>
					<?php	
						}
					?>
				</table></td>
	<?php }

	foreach($devices as $device) {
		$details = $comparision[$device];
		?>
		<td><table style = "border: 1px solid #ccc">
					<tr><td style = "border-bottom: 1px solid #ccc"><?php echo $device ?></td></tr>
		<?php
			foreach($details as $prodDetails) { ?>
				<tr><td style = "border-bottom: 1px solid #ccc"><?php echo $prodDetails['circle']; ?> </td></tr>
		<?php
			}
		?>
		</table></td>
	<?php	
	}
?>
	</tr>
</table>
<?php
}
?>