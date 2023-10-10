@extends('templateHeader')

@section('content')
<h1>Ridho Dimas Ramadhan</h1>
<p>{{ $identitas_list }}</p>

<h3>Identitas mahasiswa</h3>
<table class="table">
    <thead>
      <tr>
        <th scope="col">NO</th>
        <th scope="col">ID</th>
        <th scope="col">NAMA</th>
        <th scope="col">ALAMAT</th>
        <th scope="col">KELAS</th>
        <th scope="col">CLASS_ID</th>
      </tr>
    </thead>
    <tbody>
        @foreach ( $identitas_list as $identitasTabel)
        <tr>
          <th>{{ $loop->iteration }}</th>
          <th scope="row">{{ $identitasTabel['id'] }}</th>
          <td>{{ $identitasTabel['nama'] }}</td>
          <td>{{ $identitasTabel['alamat'] }}</td>
          <td>{{ $identitasTabel['kelas'] }}</td>
          <td>{{ $identitasTabel['class_id'] }}</td>
        </tr>
        @endforeach
    </tbody>
  </table>
    
@endsection