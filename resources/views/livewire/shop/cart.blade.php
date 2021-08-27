<div class="container">
    <div class="row justify-content-center">
        <div class="col-md">
            <div class="card">
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Price</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($cart['products'] as $product)
                                <tr>
                                    <td>{{ $product->title}}</td>
                                    <td>Rp{{ number_format($product->price,2, ",",".")}}</td>
                                    <td>
                                        <button  wire:click="removeFromCart({{$product->id }})" class="btn btn-sm btn-danger">Remove</button>
                                    </td>
                                </tr>
                                
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="3">
                                    <a href="{{route('shop.checkout')}}" class="btn btn-sm btn-primary float-right">Chack Out</a>
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>