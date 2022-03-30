@extends('includes.app')
@section('product')
    <div class="row">
        <div class="col-md-4 offset-0 mt-5">
           <form action="/pu" method="post">
               @csrf
            <table class="table">
                <thead>
                <tr>

                    <th scope="col">Item Name</th>
                    <th scope="col">Item price</th>
                    <th scope="col">Item Quantity</th>
                </tr>
                </thead>
                <tbody>
                  @foreach($products as $product )
                <tr>

                    <td>
                       <select name="item_name[]">
                           <option value="{{$product->product_name}}" >{{$product->product_name}}</option>

                       </select>

                    </td>
                    <td>
                      <input type="text" name="price[]" value="{{$product->price}}" readonly >

                    </td>
                    <td>
                        <select name="quantity[]">
                            @for ($i = 0; $i <= $product->stock; $i++)<option value={{$i}}>{{$i}}</option>@endfor;

                        </select>
                    </td>
                </tr>
                  @endforeach
                </tbody>
            </table>
               <button type="submit" class="btn btn-primary offset-md-5">Submit</button>
           </form>
        </div>

            <div class="col-md-5 offset-md-1">
                <table class="table">
                    <thead>
                    <tr>

                        <th scope="col">Item Name</th>
                        <th scope="col">price</th>
                        <th scope="col"> Quantity</th>
                        <th scope="col"> Total</th>
                    </tr>
                    </thead>
                    <tbody>
                      @foreach($products1 as $product )
                    <tr>

                        <td>

                            <input type="text" name="name" value="{{$product->item_name}}"  readonly>

                        </td>
                        <td>
                          <input type="text" name="price" value="{{$product->price}}" readonly >

                        </td>
                        <td>
                            <input type="text" name="quantity" value="{{$product->quantity}}">
                        </td>
                    </tr>
                      @endforeach
                    </tbody>
                </table>
            </div>

    </div>
@endsection
