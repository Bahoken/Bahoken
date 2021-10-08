<div class="latest-products">
        <div class="container">
            <div class="row">

                <div class="col-md-12">
                    <div style="border-bottom: 0px;" class="section-heading">
                        <h2>Latest Products</h2>
                        <a  style="color: white" class="mb-4 btn btn-primary" href="{{url('addproduct')}}">
                            Add a product <i class="fa fa-plus"></i>
                        </a>
                    </div>

                </div>

                @foreach($data as $product)
                <div class="col-md-4">
                    <div class="product-item">
                        
                        <a href="#">
                            <center>
                                <img style="height: 300px; width: 210px;" src="/productimage/{{$product->image}}" alt="">
                            </center>
                        </a>

                        <div class="down-content">
                            <a href="#">
                                <h4>{{$product->title}}</h4>
                            </a>
                            <h6>{{$product->price}} FCFA</h6>
                            <p>{{$product->description}}</p>
                            
                            <div class="inline-form">
                                <a href="{{url('trashproduct',$product->id)}}" class="btn btn-danger">
                                    Delete
                                    <i class="fa fa-trash"></i>
                                </a>
                                <a href="{{url('viewupdate',$product->id)}}" class="btn btn-success">
                                    Update
                                    <i class="fa fa-pencil"></i>
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
                @endforeach
                
                <div class="d-flex justify-content-center">
                
                    {!! $data->links() !!}    

                </div>
    
                
            </div>
        </div>
    </div>