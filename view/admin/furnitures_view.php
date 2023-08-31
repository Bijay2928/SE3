	<sction class="right">
		
	<h2>Paintings category Block</h2>
	<h3><a class="add" href="addeditFurnitures">Add New painting</a></h3>
	<table class="tables">
	
			
		<tr>
			<th>SN</th>
			<th>Name</th>
			<th>Details</th>
			<th>auction location id</th>
			<th>Price</th>
			<th>Type</th>
			<th>Framing</th>
			<th>Status</th>
			<th>Action</th>
		</tr>
	
		
			<?php
				$sn=1;
				foreach ($allFurnitures_list as $row) {//fetching all the details from painting table
					echo '<tr><td>'.$sn.' </td>'.'<td>'.$row['painting_name'].'</td><td>'.$row['details'].
					'</td><td>'.$row['name'].'</td><td>'.$row['price'].'</td><td>'.$row['type'].'</td><td>'.$row['frame'].'</td><td>'; if($row['status']==1) echo'active';else echo "sold";?></td>
					<td style="padding: 0;"><a href="addeditFurnitures&fid=<?php echo $row['id'];?>">Edit</a><!--giving id to the edit buttton -->
					 <a onclick= "return confirm('Are you sure to delete?');" href="addeditFurnitures&dfid=<?php echo $row['id']; ?>">Delete</a></td></tr><!--giving id to delte butoon -->
						<?php $sn++; ?>
			 <?php }
		?>
		
	</table>
		</section>
