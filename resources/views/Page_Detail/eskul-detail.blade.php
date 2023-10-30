@extends('templateHeader')

@section('content')
<table class="table">
<thead>
    <tr>
        <th>List Mahasiswa</th>
        <th>Kelas</th>
    </tr>
</thead>
<tbody>
    <tr>
        <td>
            @foreach($eskul_detail->aw as $item)
               {{ $loop->iteration }}. {{ $item['nama'] }} <br>
            @endforeach
        </td>
        <td>{{ $eskul_detail->class }}</td>
    </tr>
</tbody>
</table>
<a href="/eskul"><input type="button" value="back"></a>
@endsection