@extends('templateHeader')

@section('content')
<h1>Ridho Dimas Ramadhan</h1>
<p>{{ $identitas_list }}</p>

<h3>List Teacher</h3>
<table class="table">
    <thead>
      <tr class="text-center">
        <th scope="col">NO</th>
        <th scope="col">ID</th>
        <th scope="col">Nama Teacher</th>
        <th scope="col">Action</th>
        
        {{-- <th scope="col">KELAS</th> --}}
        {{-- <th scope="col">ALAMAT</th>
        <th scope="col">Siswa yang diajar</th> --}}
      </tr>
    </thead>
    <tbody>
        @foreach ( $identitas_list as $identitasTabel)
        <tr>
          <th>{{ $loop->iteration }}</th>
          <th scope="row">{{ $identitasTabel['id'] }}</th>
          <td>{{ $identitasTabel['nama'] }}</td>
          <td><a href="Page_Detail/identitas-teacher-detail/{{ $identitasTabel->id }}">Detail</a></td>
          {{-- <td>{{ $identitasTabel['alamat'] }}</td>
          <td>{{ $identitasTabel['kelas'] }}</td> --}}
          {{-- <td>
            @foreach($identitasTabel->namanyabebas as $students )
            {{ $loop->iteration }}. {{ $students['nama']}}<br>
            @endforeach

          </td> --}}
        </tr>
        @endforeach
    </tbody>
  </table>
    
@endsection