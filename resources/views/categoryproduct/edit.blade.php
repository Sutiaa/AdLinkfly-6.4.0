<html>
    <title>Edit Category Product<html>
    <title>Edit Category Product</title>
    <body>
        <h2>Edit Category Product</h2>
        <hr>
        @if($errors->any())
            <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
            </ul>
        @endif
      <form action="{{ URL ('categoryproduct') }}/{{ $categoryproduct->id }}" method="POST" enctype="multipart/form-data">
        @csrf  
        @method('PUT')
        <table>
               <tr>
                    <th>Judul</th>
                    <td>
                        <input type="text" name="judul" value="{{ $categoryproduct->judul }}" required>
                    </td>
                </tr>
                <tr>
                    <th>Isi</th>
                    <td>
                        <input type="text" name="isi" value="{{ $categoryproduct->isi }}"required>
                    </td>
                </tr>
                <tr>
                    <th>Created by</th>
                    <td>
                        <input type="text" name="createdby" value="{{ $categoryproduct->createdby }}"required>
                    </td>
                </tr>
                <tr>
                    <th>Gambar</th>
                    <td>
                        <input type="image" name="isi" value="{{ $categoryproduct->gambar }}"required>
                    </td>
                </tr>
        </table>
        <button type="submit">Save</button>
      </form>  
    </body>
</html>
  