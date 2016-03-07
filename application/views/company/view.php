
 <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>


<table class="table table-bordered">
	<tr>
		<th colspan = '6'>Company Table</th>
		<th colspan = '2'><a href="<?php echo site_url('company/edit/null' ); ?>">Add New</a></th>
	</tr>
	<tr>
		<th>Action</th>
		<th>Name</th>
		<th>person</th>
		<th>designation</th>
		<th>email</th>
		<th>phone</th>
		<th>comment</th>
		<th>address</th>
	</tr>
<?php
	foreach($querys as $query){
		echo '<tr><td>';
		echo '<a class="btn btn-sm btn-info" href="'. site_url('company/edit/' . $query->uid ) .'">Edit</a> ';
		echo '<a class="btn btn-sm btn-danger" href="'. site_url('company/trash/' . $query->uid ) .'">Delete</a>';
		echo '</td><td>';
		echo $query->person;
		echo '</td><td>';
		echo $query->designation;
		echo '</td><td>';
		echo $query->email;
		echo '</td><td>';
		echo $query->phone;
		echo '</td><td>';
		echo $query->comment;
		echo '</td><td>';
		echo $query->address;
		echo '</td><td>';
		echo $query->name;
		echo '</tr></td>';
	}
?>
</table> 