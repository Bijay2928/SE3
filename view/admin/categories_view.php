	<section class="right">
	<h2>Auction Blocks</h2>
	<h3><a class="add" href="addeditcat">Add New Auction</a></h3>

	<table class="tables">
		<thead>
			
		<tr>
			<th>SN</th>
			<th>Auction Name</th>
			<th>Lot Number</th>
			<th>Action</th>
		</tr>
		</thead>
		<tbody>
			
	
			<?php
				$sn=1;
				foreach ($allCategories_list as $row) {//foreach
					echo '<tr><td>'.$sn.' </td>'.'<td>'.$row['name'].' </td>'.'<td>'.$row['lotNumber'].' </td><td><a href="addeditcat&cid='.$row['id']. '">Edit</a>';?>  <a onclick= "return confirm('Are you sure to delete?');" href="addeditcat&dcid=<?php echo $row['id']; ?>">Delete</a></td><!--giving id for delte  -->
				<?php	$sn++; ?>
		<?php	}
		?>
			</tbody>
	</table>
		</sction>
