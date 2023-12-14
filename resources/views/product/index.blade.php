<html>
    <title>Product</title>
    <body>
        <h2>List Product</h2>
        <hr>
        @if(session()->has('success'))
            <h3>{{ session('success') }}</h3>
        @endif
        <a href="{{ URL('product/create') }}">Create Product</a>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Product</th>
                    <th>Price</th>
                    <th>Stock</th>
                    <th>Opsi</th>
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
                        <a href="{{ URL ('product') }}/{{ $data->id }}/edit">Edit<a>
                        <a href="{{ route ('product.edit', $data->id) }}">Edit<a>
                        <form onsubmit="return confirm('Apakah anda yakin ?');" 
                            action="{{ URL('/product') }}/{{ $data->id }}"
                            method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Detele</button>
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
                    