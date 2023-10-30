@extends('templateHeader')

@section('content')

<div class="container">
    <div class="row">
        <table class = "table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Eskul</th>
                    {{-- <th>Mahasiswa</th> --}}
                    <th>Action</th>
                </tr>
            </thead>
        
            <tbody>
                @foreach ($eskulList as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->nama_eskul}}</td>
                    {{-- <td>
                        @foreach($item->aw as $value)
                         {{ $loop->iteration }}.  {{ $value['nama'] }}<br>
                        @endforeach
                    </td> --}}
                    <td><a href="Page_Detail/eskul-detail/{{ $item->id }}">Detail</a></td>
                </tr>
                
                @endforeach
            </tbody>
        </table>
        
    </div>
</div>
@endsection