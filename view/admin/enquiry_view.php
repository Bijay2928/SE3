<sction class="right">
	
	<h2>List Of bids</h2>

	<table class="tables">
		<tr>
			<th>SN</th>
			<th>Name</th>
			<th>Email</th>
			<th>lot number</th>
			<th>bids</th>
			<th>item_name</th>
			<th>Action</th>
			<th>Reviewer</th>
		</tr>
			<?php
				$sn=1;
				foreach ($all_enquirieslist as $row) {
						if($row['sold']==0)
							//to check if mark is completed or not
				$complete = '<a href="enquiries&eid='.$row['id'].'">sell</a>'; 	else{$complete='sold';} 
						
				echo '<tr><td>'.$sn.' </td>'.'<td>'.$row['name'].'</td><td>'.$row['email'].
					'</td><td>'.$row['telephone'].'</td>'.'<td>'.$row['bid'].'</td>'.'<td>'.$row['item_name'].'</td>'.'<td>'.$complete;?><!-- complete option-->
						<a onclick= "return confirm('press agian to delete?');" href="enquiries&deid=<?php echo $row['id']; ?>">DELETE</a><!--giving id to delete button -->
					</td><td> <?php echo $row['admin']; ?></td>
					<?php $sn++; ?>
			<?php } ?>
	</table>
		</section>
