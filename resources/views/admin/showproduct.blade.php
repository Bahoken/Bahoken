<!DOCTYPE html>
<html lang="en">
  <head>
      @include('admin.css')
  </head>
  <body>
      @include('admin.sidebar')
      <!-- partial -->
      @include('admin.navbar')
      <!-- container-scroller -->
      <!-- plugins:js -->

      

      <div class="pb-30 container-fluid page-body-wrapper">

          <div class="container" align="center">

          @if(session()->has('message'))

            <div class="mt-20 alert alert-danger">

            <button type="button" class="close" data-dismiss="alert">x</button>

            {{session()->get('message')}}

            </div>

           @endif
                <table class="mt-4">
                    <tr style="background-color: grey">
                        <td style="padding:20px;">Title</td>
                        <td style="padding:20px;">Description</td>
                        <td style="padding:20px;">Quantity</td>
                        <td style="padding:20px;">Price</td>
                        <td style="padding:20px;">Image</td>
                        <td style="padding:20px;">Action</td>
                    </tr>

                    @foreach($data as $product)
                    <tr align="center" style="background-color: black;">
                        <td style="padding:20px;">{{$product->title}}</td>
                        <td style="padding:20px;">{{$product->description}}</td>
                        <td style="padding:20px;">{{$product->quantity}}</td>
                        <td style="padding:20px;">{{$product->price}}</td>
                        <td style="padding:20px;">
                            <img height="100px" width="100px" src="/productimage/{{$product->image}}">
                        </td> 

                        <td style="padding:20px;">
                            <a class="btn btn-info" href="{{url('updateview',$product->id)}}">
                                UPDATE
                            </a>
                            <a class="btn btn-danger" href="{{url('deleteproduct',$product->id)}}">
                                DELETE
                            </a>
                        </td>
                    </tr>
                    @endforeach

                </table>
          </div>
      </div>
      @include('admin.js')
  </body>
</html>