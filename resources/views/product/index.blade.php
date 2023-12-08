<html>
    <title>Product</title>
    <body>
        <h2>List Product</h2>
        <hr>
        <a href="{{ URL('product/create') }}">Create Product</a>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Product</th>
                    <th>Price</th>
                    <th>Stock</th>
                </tr>
            </thead>
            <tbody>
                @forelse($product as $data)
                <tr>
                    <th>{{  $data->id }}</th>
                    <th>{{  $data->product }}</th>
                    <th>{{  $data->price }}</th>
                    <th>{{  $data->stock }}</th>
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
                    