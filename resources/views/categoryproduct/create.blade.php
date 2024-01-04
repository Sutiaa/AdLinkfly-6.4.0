<html>
    <title>Create Category Product</title>
    <body>
        <h2>Create Category Product</h2>
        <hr>
        @if($errors->any())
            <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
            </ul>
        @endif
      <form action="{{ URL ('categoryproduct') }}" method="POST" enctype="multipart/form-data">
        @csrf  
        <table>
               <tr>
                    <th>Judul</th>
                    <td>
                        <input type="text" name="judul" required>
                    </td>
                </tr>
                <tr>
                    <th>Isi</th>
                    <td>
                        <input type="text" name="isi" required>
                    </td>
                </tr>
                <tr>
                    <th>Created by</th>
                    <td>
                        <input type="text" name="createdby" required>
                    </td>
                </tr>
                <tr>
                    <th>Gambar</th>
                    <td>
                        <input type="file" name="gambar" required>
                    </td>
                </tr>
        </table>
        <button type="submit">Save</button>
      </form>  
    </body>
</html>
                    