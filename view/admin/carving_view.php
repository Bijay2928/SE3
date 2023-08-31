	<sction class="right">
		
	<h2>Carving category Block</h2>
	<h3><a class="add" href="addeditCarving">Add New carving</a></h3>
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
				$sn=1;
				foreach ($allFurnitures_list as $row) {//furniture list as row for each
					echo '<tr><td>'.$sn.' </td>'.'<td>'.$row['name'].'</td><td>'.$row['description'].//getting description from database table
					'</td><td>'.$row['price'].'</td><td>'.$row['dimention'].
					'</td><td>'.$row['material'].//getting material from database table
					'</td><td>'.$row['weight'].//getting weight from database table
					'</td><td>'.$row['auction_id'].//getting auctionid form database tabel
					'</td><td>'; if($row['status']==1) echo'active';else echo "sold";?></td><!--option sold -->
					<td style="padding: 0;"><a href="addeditCarving&caid=<?php echo $row['id'];?>">Edit</a><!-- giving id for edit button-->
					 <a onclick= "return confirm('Are you sure to delete?');" href="addeditCarving&dcaid=<?php echo $row['id']; ?>">Delete</a></td></tr><!--giving id for delte buttton -->
						<?php $sn++; ?>
			 <?php }
		?>
	</table>
		</section>
