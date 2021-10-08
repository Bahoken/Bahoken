<br><br><br><br><br>
<div class="container">

<h1><b>Update a product</b></h1>
<br>
<form action="{{url('updateproduct_script',$data->id)}}" method="post" enctype="multipart/form-data">
@csrf
    <div class="form-group">
        <label>Product Title</label>
        <input class="form-control" type="text" name="title" 
        value="{{ $data->title }}" required="">
    </div>

    <div class="form-group">
        <label>Product Price</label>
        <input class="form-control" type="number" name="price" 
        value="{{ $data->price }}" required="">
    </div>  

   
  <div class="form-group">
    <label>Description</label>
    <input class="form-control" type="text" name="description" 
    value="{{ $data->description }}" required="">
  </div>

  <div class="form-group">
    <label>Quantity</label>
    <input class="form-control" type="number" name="quantity" 
    value="{{ $data->quantity }}" required="">
  </div>

  <div class="form-group">
    <label>old image</label>
    <img height="100px" width="100px" src="/productimage/{{$data->image}}">
  </div>

  <div class="form-group">
    <label>Change image</label>
    <input class="form-control" type="file" name="file">
  </div>

  <button type="submit" class="btn btn-lg btn-block btn-info">Update this product</button>
</form>
</div>