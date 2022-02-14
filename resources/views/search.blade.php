<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>search</title>
	<style>
		table, th, td {
		  border:1px solid black;
		}
		.container {
          padding: 30px;
         }
		 td,th {
			 padding: 3px;
		 }
		 td {
			 text-align: center;
		 }
	</style>
</head>
<body>
	<h4>Result For Books</h4>
	<form>
		@csrf
		<table style="width:100%">
			<tr>
			  <th>ID</th>		
			  <th>Book Name</th>
			  <th>Categories</th>
			  <th>Function</th>
			</tr>
			@foreach($data as $data)
			<tr>
			  <td >{{ $data->id }}</td>
			  <td >{{ $data->BookName }}</td>
			  <td >{{ $data->Categories }}</td>
			  <td>
				 <a href="{{ url('/editview',$data->id) }}">Edit</a>
			  </td>
			</tr>
			@endforeach
		  </table>
	 </form>
</body>
</html>