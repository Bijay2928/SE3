	<sction class="right">
		
	<h2>Photographic Image category Block</h2>
	<h3><a class="add" href="addeditPhotograph">Add New photograph</a></h3>
	<table class="tables">
	
			
		<tr>
			<th>SN</th>
			<th>Name</th>
			<th>Details</th>
			<th>Price</th>
			<th>Dimention</th>
			<th>Image Type</th>
			<th>Status</th>
			<th>Action</th>
		</tr>
	
		
			<?php
				$sn=1;//fetching all the information from database table to the page table
				foreach ($allFurnitures_list as $row) {
					echo '<tr><td>'.$sn.' </td>'.'<td>'.$row['name'].'</td><td>'.$row['description'].
					'</td><td>'.$row['price'].'</td><td>'.$row['auction_id'].'</td><td>'.$row['dimention'].'</td><td>'.$row['type'].'</td><td>'; if($row['status']==1) echo'active';else echo "sold";?></td>
					<td style="padding: 0;"><a href="addeditPhotograph&pid=<?php echo $row['id'];?>">Edit</a><!--setting id to the edit table -->
					 <a onclick= "return confirm('Are you sure to delete?');" href="addeditPhotograph&dpid=<?php echo $row['id']; ?>">Delete</a></td></tr><!-- setting id to the delete button-->
						<?php $sn++; ?>
			 <?php }
		?>
	</table>
		</section>
