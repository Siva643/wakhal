<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  
</head>
<body>
{{View::make('navbar')}}

<div class="container mb-5 d-flex align-items-center justify-content-center"  style="margin-top:150px;margin-bottom:350px;">
    <form style="border-radius:10px;" class="form-groups bg-warning p-5" action="{{ url('update/'.$edits->id) }}" method="post" style="margin-left:100px;" enctype="multipart/form-data">
      @csrf
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label fw-bold">Name</label>
          <input type="text" name="name" value="{{$edits->name}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label fw-bold">Price</label>
          <input type="text" name="price" value="{{$edits->price}}" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label fw-bold">Category</label>
            <input type="text" name="category" value="{{$edits->category}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label fw-bold">Description</label>
            <input type="text" name="description" value="{{$edits->description}}"  class="form-control" id="exampleInputPassword1">
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label fw-bold">Image</label>
            <img style="height:100px;width:100px;border-radius:50%;" src="{{ asset('images/'.$edits->image) }}">
            <input type="file" name="image" class="form-control mt-2" id="exampleInputPassword1">
          </div>
          
       
        <button type="submit" class="btn btn-primary w-100 mt-3">Update Product</button>
    </form>
</div>
{{View::make('footer')}}

</body>
</html>