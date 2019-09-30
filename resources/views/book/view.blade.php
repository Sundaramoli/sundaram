<!DOCTYPE html>
<html>
<head>
	<title>All Books</title>
</head>
	<body>
		@if(count($books) > 0)
					<?php $count = 0; ?>
		<h1>All Books</h1>
		<a href="{{ route('book.create')}}" class="btn btn-success text-white">Create</a>
		<div class="container-fluid">
	     
	      <table class="table">
	      <thead style="background: #006064; color:#fff;">
	        <tr>
	        	<th>#</th>
	          <th>Name</th>
	          <th>Price</th>
	          <th>Publication</th>
	         
	          <th>Action</th>
	        
	          
	            </tr>
	      </thead>
	      <tbody>
	      @foreach($books as $book)
	      <?php $count++; ?>
	      <tr>
	      	<td><?php echo $count; ?></td>
	      	<td><?php echo $book->book_name; ?></td>
	      	<td><?php echo $book->price; ?></td>
	      	<td><?php echo $book->publication; ?></td>
	      
		<td>
		<a href="{{ route('book.edit', $book->id)}}" class="btn btn-primary text-white">Edit</a>
		<a href="{{ route('book.destroy', $book->id)}}" class="btn btn-danger text-white" method="DELETE">delete</a>
		</td></tr>
		@endforeach
		</tbody>
	</table>
</div>
@else
No books found
@endif

	</body>
</html>