<?php

	include('connection.php');
	session_start();

?>
	<table class="table" id="warehouse">
										<thead>
											<tr>

												<th>Student</th>
												<th>DOB</th>
												<th>Country</th>
												<th>class</th>
												<th>Action</th>
											</tr>
										</thead>
										<tbody>

											<?php
											$brands = $connection->query("SELECT * FROM students");

											while($row=$brands->fetch_array()){
											
												?>
											<tr>
												<td><?php echo $row['name']?></td>
												<td><?php echo $row['date_of_birth']?></td>
												<td><?php echo $row['country_id']?></td>
												<td><?php echo $row['class_id']?></td>
												<td><button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete_warehouse<?php echo $row['id']?>"><span class="glyphicon glyphicon-trash"></span></button>
												<button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#edit_warehouse<?php echo $row['id']?>"><span class="glyphicon glyphicon-edit"></span></button>
												</td>
											</tr>


											<?php }
											?>

										</tbody>

									</table>
