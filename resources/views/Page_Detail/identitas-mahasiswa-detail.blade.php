@extends('templateHeader')

@section('content')
<h6 class="mt-5 mb-4">Nama Siswa adalah {{ $mahasiswa_detail_list['nama']}}</h6>
<table class="table table-bordered">
    <thead>
        <tr class="text-center border border-danger">
            <th>Kelas</th>
            <th>Wali Kelas</th>
            <th>Eskul</th>
        </tr>
    </thead>

    <tbody>
        <tr class="border border-primary">
            <td>{{ $mahasiswa_detail_list->class['kelas'] }}</td>
            <td>{{ $mahasiswa_detail_list->class['nama'] }}</td>
            <td>
                @foreach($mahasiswa_detail_list->extraculicullar as $eskul)
                 {{ $loop->iteration }}. {{ $eskul['nama_eskul'] }} <br>
                @endforeach
            </td>
        </tr>
    </tbody>
</table>

<a href="/identitas_Mahasiswa"><input type="button" value="Back"></a>
@endsection