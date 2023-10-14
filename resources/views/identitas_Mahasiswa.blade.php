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
                </tr>
            </thead>
        
            <tbody>
                @foreach ($identitasMahasiswa_list as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item['nama'] }}</td>
                    <td>{{ $item['NPM'] }}</td>
                </tr>
                
                @endforeach
            </tbody>
        </table>
        
    </div>
</div>
@endsection