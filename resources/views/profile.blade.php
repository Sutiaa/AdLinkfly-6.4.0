
    <h1>Ini adalah contoh if</h1>
 <hr>
 <table>
    @if($nama == 'Sutia')
    <tr>
        <td>Nama lengkap</td>
        <td>{{ $nama }}</td>
    </tr>
    @endif
</table>
<hr>


    <h1> Ini adalah contoh else</h1>
<hr>
<table>
    <td> 
    @if($nama == 'Tia')
        Nama Lengkap
    @else
        Nama Panggilan
    </td>
    @endif 
    <td>Tia</td>
</table>
<hr>


    <h1>Ini adalah contoh foreach</h1>
<hr>
<table>
    @foreach ($data_array['nama'] as $data)
    <tr>
        <td>Nama</td>
        <td>{{ $data }}</td>
    </tr>        
    @endforeach
</table>
<hr>


    <h1>Ini adalah contoh forelse</h1>
<hr>
<table>
    @forelse ($list ['nama'] as $list )
    <tr>
        <td>Data:</td>
        <td>{{ $list }},</td>
    </tr> 
        @empty      
        Data tidak di temukan
        @endforelse
    </table>
    <hr>