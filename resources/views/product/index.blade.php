<html>
    <title>Product</title>
    <body>
        <h2 align="center" class="mt-5">List Product</h2>
        <hr>
        @if(session()->has('success'))
            <h3>{{ session('success') }}</h3>
        @endif

        <div class="row">
            <div class="col-md-2">
            </div>
            <div class="col-md-8">
            <div class="form-area">
        
        <a href="{{ URL('product/create') }}">Create Product</a>

        <table >
            <thead>
                <tr>
                    <th >ID</th>
                    <th>Product</th>
                    <th>Price</th>
                    <th>Stock</th>
                    <th>Option</th>
                </tr>
            </thead>
            <tbody>
                @forelse($product as $data)

                <tr>
                    <th>{{  $data->id }}</th>
                    <th>{{  $data->product  }}</th>
                    <th>{{  $data->price }}</th>
                    <th>{{  $data->stock }}</th>
                    <th>
                        <a href="{{ URL ('product') }}/{{ $data->id }}/edit">Edit</a>
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        <form onsubmit="return confirm('Apakah anda yakin ?');" 
                            action="{{ URL('/product') }}/{{ $data->id }}"
                            method="POST">
                            @csrf
                            @method('DELETE')
                        
    
                        </form>
                    </th>
                </tr>
                @empty
                <tr>
                    <td colspan="4">List Product Empty</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </body>
</html>
                    