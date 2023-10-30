@extends('templateHeader')

@section('content')

<div class="container">
    <div class="row">
        <table class = "table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>NPM</th>
                    {{-- <th>Class ID</th> --}}
                    {{-- <th>Alamat</th> --}}

                    {{-- <th>Class</th>
                    <th>Wali Kelas</th>
                    <th>Eskul</th> --}}

                    <th>Action</th>


                </tr>
            </thead>
        
            <tbody>
                @foreach ($studentList as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->nama}}</td>
                    <td>{{ $item['NPM'] }}</td>
                    {{-- <td>{{ $item->class_id }}</td> --}}
                    {{-- <td>{{ $item->class['alamat'] }}<br></td> --}}

                    {{-- <td>{{ $item->class['kelas'] }}<br></td>
                    <td>{{ $item->class['nama'] }}<br></td>
                    <td>
                        @foreach($item->extraculicullar as $value)
                        {{ $loop->iteration }}. {{$value['nama_eskul']  }}<br>
                        @endforeach
                    </td> --}}

                    <td><a href="Page_Detail/identitas-mahasiswa-detail/{{ $item->id }}">Detail</a></td>
                </tr>
                
                @endforeach
            </tbody>
        </table>
        
    </div>
</div>
@endsection