	<sction class="right">
		
	<h2>Drawing category Block</h2>
	<h3><a class="add" href="addeditDrawing">Add New Drawing</a></h3>
	<table class="tables">
	
			
		<tr>
			<th>SN</th>
			<th>Name</th>
			<th>Price</th>
			<th>auction location id</th>
			<th>Dimention</th>
			<th>medium</th>
			<th>framing</th>
			<th>Status</th>
			<th>Action</th>
		</tr>
	
		
			<?php
				$sn=1;
				foreach ($allFurnitures_list as $row) {//fetching datas from table 
					echo '<tr><td>'.$sn.' </td>'.'<td>'.$row['name'].'</td><td>'.$row['description'].
					'</td><td>'.$row['price'].'</td><td>'.$row['auction_id'].'</td><td>'.$row['dimention'].'</td><td>'.$row['medium'].'</td><td>'.$row['frame'].'</td><td>'; if($row['status']==1) echo'active';else echo "sold";?></td>
					<td style="padding: 0;"><a href="addeditDrawing&daid=<?php echo $row['id'];?>">Edit</a><!--giving id to edit button -->
					 <a onclick= "return confirm('Are you sure to delete?');" href="addeditDrawing&ddaid=<?php echo $row['id']; ?>">Delete</a></td></tr><!--giving id to delete button -->
						<?php $sn++; ?>
			 <?php }
		?>
	</table>
		</section>
