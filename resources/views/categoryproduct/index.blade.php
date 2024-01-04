<html>
    <title>Category Product</title>
    <body>
        <h2>List Category Product</h2>
        <hr>
        @if(session()->has('success'))
            <h3>{{ session('success') }}</h3>
        @endif
        <a href="{{ URL('categoryproduct/create') }}">Create Category Product</a>
        <table>
            <thead>
                <tr>
                    <th>Judul</th>
                    <th>Isi</th>
                    <th>Createdby</th>
                    <th>Gambar</th>
                </tr>
            </thead>
            <tbody>
                @forelse($categoryproduct as $data)
                <tr>
                    <th>{{  $data->judul }}</th>
                    <th>{{  $data->isi }}</th>
                    <th>{{  $data->createdby }}</th>
                    <th>{{  $data->gambar }}</th>
                    <th>
                        <a href="{{ URL ('categoryproduct') }}/{{ $data->id }}/edit">Edit<a>
                            <button type="submit">Detele</button>
                        <form onsubmit="return confirm('Apakah anda yakin ?');" 
                            action="{{ URL('/categoryproduct') }}/{{ $data->id }}"
                            method="POST">
                            @csrf
                            @method('DELETE')
                            
                        </form>
                    </th>
                </tr>
                @empty
                <tr>
                    <td colspan="4">List Category Product Empty</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </body>
</html>
                    