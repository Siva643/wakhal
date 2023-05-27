<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" integrity="sha384-b6lVK+yci+bfDmaY1u0zE8YYJt0TZxLEAFyYSLHId4xoVvsrQu3INevFKo+Xir8e" crossorigin="anonymous">
    
</head>
<body>
{{View::make('navbar')}}

    <div class="container">
      <table class="table"  style="margin-top:150px;margin-bottom:350px;">
       <tr>
           <th>ID</th>
           <th>Image</th>
           <th>UPDATE</th>
           <th>DELETE</th>
       </tr>
       @foreach($reads as $read)
       <tr>
           <td>{{$read->id}}</td>
        
           <td><img style="height:100px;width:100px;border-radius:50%;" src="{{ asset('imagesowl/'.$read->image) }}"></td>
           
           <td><a href="{{ url('editowl/'.$read->id) }}" class="btn btn-success"><i class="bi bi-pencil-square"></i></a></td>
           <td><a href="{{ url('deleteowl/'.$read->id) }}" class="btn btn-danger"><i class="bi bi-trash3"></i></a></td>

       </tr>
       @endforeach
      </table>
    </div>
{{View::make('footer')}}

</body>
</html>