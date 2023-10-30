@extends('templateHeader')

@section('content')
<h1 class="mt-5">Detail Teacher</h1>
<table class="table">
    <thead>
        <tr>
            <th>Kelas</th>
            <th>Alamat</th>
            <th>Mahasiswa</th>
        </tr>
    </thead>

    <tbody>
        <tr>
            <td>{{ $detail_teacher['kelas'] }}</td>
            <td>{{ $detail_teacher['alamat'] }}</td>
            <td>
                @foreach($detail_teacher->namanyabebas as $item)
                   {{ $loop->iteration }}. {{ $item['nama'] }} <br>
                @endforeach
            </td>
        </tr>
    </tbody>
</table>
<a href="/identitas_tabel"><input type="button" value="Back"></a>
@endsection