	<sction class="right">
		
	<h2>Sculpture category Block</h2>
	<h3><a class="add" href="addeditSculpture">Add New Sculpture</a></h3>
	<table class="tables">
	
			
		<tr>
			<th>SN</th>
			<th>Name</th>
			<th>Details</th>
			<th>Price</th>
			<th>Dimention</th>
			<th>material</th>
			<th>weight in KG</th>
			<th>Status</th>
			<th>Action</th>
		</tr>
	
		
			<?php
				$sn=1;//fetching datas from database table to the page table
				foreach ($allFurnitures_list as $row) {
					echo '<tr><td>'.$sn.' </td>'.'<td>'.$row['name'].'</td><td>'.$row['description'].
					'</td><td>'.$row['price'].'</td><td>'.$row['dimention'].'</td><td>'.$row['material'].'</td><td>'.$row['weight'].'</td><td>'; if($row['status']==1) echo'active';else echo "sold";?></td>
					<td style="padding: 0;"><a href="addeditSculpture&scid=<?php echo $row['id'];?>">Edit</a><!--id for edit button -->
					 <a onclick= "return confirm('Are you sure to delete?');" href="addeditSculpture&dscid=<?php echo $row['id']; ?>">Delete</a></td></tr><!--id for delete button -->
						<?php $sn++; ?>
			 <?php }
		?>
	</table>
		</section>
