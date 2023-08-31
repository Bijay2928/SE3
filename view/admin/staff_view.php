<section class="right">
	<h2>manage client blocks</h2>
	<h4><a class="add" href="addEditAdmin">Add New Client</a></h4>

	<table class="tables">
		<tr>
			<th>SN</th>
			<th>Name</th>
			<th>Type</th>
			<th>Action</th>
		</tr>
			<?php
				$sn=1;
				foreach ($allStaff_list as $row) {//fetching all the information from database to table
					echo '<tr><td>'.$sn.' </td>'.'<td>'.$row['username'].'</td><td>'.$row['role'].'</td>'.
					' <td><a href="addEditAdmin&aid='.$row['id']. '">Edit</a>';//setting id for edit button
					if($row['role']=='regular') {?>
					<a onclick= "return confirm('Are you sure to delete?');" href="addEditAdmin&daid=<?php echo $row['id']; ?>">Delete</a></td><!--setting id for delete button -->
					<?php $sn++; ?>
		<?php	}}
		?>
	</table>
</section>