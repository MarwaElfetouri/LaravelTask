<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>books</title>
	<style>
		table, th, td {
		  border:1px solid black;
		}
		.container2 {
          padding: 30px;
         }
		 td,th {
			 padding: 3px;
		 }
		 td {
			 text-align: center;
		 }
		.container1 {
        padding: 30px;
        background: aliceblue;
        width: 400px;
        border-radius: 5px;
		margin: auto;
        }
		input[type="text"] {
        width: 100%;
        padding: 3px;
		margin-top: 5px;
        } 
		select {
         width: 100%;
         padding: 3px;
		}
		.required{
			color: #d80404;
		}
		a {
        text-decoration: none;
        }

		input[type="submit"] {
         width: 100%;
         height: 25px;
         color: #fff;
         background-color: #824b7a;
         border: none;
         border-radius: 5px;
		 cursor: pointer;
         }
	</style>
</head>
<body>
	{{-- Search --}}
	<div class="container1">
	<h2>Add A New Book</h2>
	<form method="get" action="/search">
	<input type="text" name="query" placeholder="search">
	<button type="submit">search </button><br>
    </form>


	{{-- Add Books --}}
	<form action="{{url('addbook')}}" method="POST" enctype="multipart/form-data">
		@csrf

        <label>Categories</label>
		<span class="required">*</span>
		<span style="color: #d80404">
			@error('Categories')
			{{ $message }}
			@enderror
		</span>
		<br>
         <select name="Categories"">
			 <option>Drama</option>
			 <option>fantasy</option>
			 <option>suspense</option>
			 <option>Fun</option>
		 </select>


        <label>Book name</label>
		<span class="required">*</span>
		<span  style="color: #d80404">
			@error('BookName')
			{{ $message }}
			@enderror
		</span>
		<br>
        <input type="text" name="BookName"><br>


        <label>Author</label>
		<span class="required">*</span>
		<span  style="color: #d80404">
			@error('Author')
			{{ $message }}
			@enderror
		</span>
		<br>
        <input type="text" name="Author"><br>


        <label>Publisher</label>
		<span class="required">*</span>
		<span  style="color: #d80404">
			@error('Publisher')
			{{ $message }}
			@enderror
		</span>
		<br>
		<select name="Publisher">
			<option>Marwa</option>
			<option>Anna</option>
			<option>Max</option>
			<option>Alex</option>
		</select>


        <label>ISBN</label>
		<span class="required">*</span>
		<span  style="color: #d80404">
			@error('ISBN')
			{{ $message }}
			@enderror
		</span>
        <input type="text" name="ISBN"><br>


        <label>Barcode</label><br>
        <input type="text" name="Barcode"><br>


        <label>Key word</label>
		<span class="required">*</span>
		<span  style="color: #d80404">
			@error('KeyWord')
			{{ $message }}
			@enderror
		</span>
		<br>
        <input type="text" name="KeyWord"><br>


        <label>Description</label><br>
        <input type="text" name="Description">
        <br>
        </br>

		<input type="submit" value="Save">
	</form>
	</div>
	{{--Show The Books --}}

	<div class="container2">
	<h3>All Books</h3>
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
	</div>
</body>
</html>