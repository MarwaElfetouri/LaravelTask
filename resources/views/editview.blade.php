<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Edit</title>
	<style>
		table, th, td {
		  border:1px solid black;
		}
		.container {
		padding: 30px;
        background-color: aliceblue;
        width: 300px;
        height: 200px;
        border-radius: 5px;         }
		
		 td,th {
			 padding: 3px;
		 }
		 td {
			 text-align: center;
		 }
		 
	</style>
</head>
 <body>
	 <div class="container">
	    	<h3>Edit The Book</h3>
	     <form action="{{ url('/update',$data->id) }}" method="POST" enctype="multipart/form-data">		 
			@csrf
			<label>Categories</label>
			<br>
			 <select name="Categories"">
				 <option>Drama</option>
				 <option>fantasy</option>
				 <option>suspense</option>
				 <option>Fun</option>
			 </select><br>
	
			 
				<label>Book name</label><br>
				<input type="text" name="BookName" value="{{ $data->BookName }}" required><br>
				<input type="submit" value="Save">
	     </form>
     </div>
 </body>
</html>