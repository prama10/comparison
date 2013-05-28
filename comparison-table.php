
<?php
// include('http://www.voltaicsystems.com/doctype.shtml' );
include('../src/template-header.php' );
include('product-comparison.php');
include('compare-category.php');

function table_summary($devices) {
	global $comparision;
	global $categories;
	?>
<div id="comparison">
	<div class="template-heading">
			<h1 style="text-align:left">Product Comparison Table</h1>
	</div>
	<table border="0" cellpadding="0" cellspacing="0" id="compare-products">
		<tr>
		<?php if(count($devices)>0) { ?>

					<td style="margin: 0; padding: 0;">
						<table class="comp-table">
							<tr><td class="table-heading">category</td></tr>
							<tr><td class="category-col" style="color: #fff" >test</td></tr>
							<?php foreach($categories as $category) { ?>
								<tr><td class="category-col"><?php echo $category ?></td></tr>
							<?php
								}
							?>
						</table>
					</td>
		<?php }
		$count = 0;
		foreach($devices as $device) {
			$details = $comparision[$device];
			$productsArr = $details['category'];
			if($count%2 == 0) {
				$type = 'comparison-even';
			} else {
				$type = 'comparison-odd';
			}
			?>
			<td style="margin: 0; padding: 0;" class="<?php echo $type ?>"><table class="comp-table">
				<tr><td class="table-heading"><?php echo $device ?></td></tr>
					<tr>
						<td class="comparison-image">
							<?php if($details['image']) { ?>
								<img width="35" height="35" id="" src="<?php echo $details['image']; ?> ">
							<?php } else {?>
								<span>No image found</span>
							<?php } ?>
						</td>
					</tr>
			<?php
				foreach($productsArr as $prodDetails) { ?>
					<tr>
						<td class = "comparison-image" style = "">
							<?php if($prodDetails['circle']) { ?>
								<img width="35" height="35" id="" src="<?php echo $prodDetails['circle']; ?> ">
							<?php } else {?>
								<span></span>
							<?php } ?>
						</td>
					</tr>
			<?php
				}
			?>
			</table></td>
		<?php
			$count++;
		}
	?>
		</tr>
	</table>
</div>
<?php
}
?>