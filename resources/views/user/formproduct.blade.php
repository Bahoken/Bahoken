<br><br><br><br><br>
<div class="container">

<h1><b>Add a product</b></h1>
<br>
<form action="{{url('addproduct_script')}}" method="post" enctype="multipart/form-data">
@csrf
    <div class="form-group">
        <label>Product Title</label>
        <input class="form-control" type="text" name="title" placeholde="Give the product title" required="">
    </div>

    <div class="form-group">
        <label>Product Price</label>
        <input class="form-control" type="number" name="price" placeholde="Give the product price" required="">
    </div>  

   
  <div class="form-group">
    <label>Description</label>
    <input class="form-control" type="text" name="description" placeholde="Give the product description" required="">
  </div>

  <div class="form-group">
    <label>Quantity</label>
    <input class="form-control" type="number" name="quantity" placeholde="Give the product quantity" required="">
  </div>

  <div class="form-group">
    <label>Image</label>
    <input class="form-control" type="file" name="file">
  </div>

  <button type="submit" class="btn btn-lg btn-block btn-info">Add a product</button>
</form>
</div>