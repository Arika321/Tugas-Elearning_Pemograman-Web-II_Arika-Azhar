@extends('layouts.app')

@section('title', 'Data Buku')

@section('content')

<h2 class="mb-4">📖 Data Buku</h2>

<table class="table table-bordered">
    <tr>
        <th>No</th>
        <th>Judul Buku</th>
    </tr>

    @foreach($buku as $i => $b)
    <tr>
        <td>{{ $i+1 }}</td>
        <td>{{ $b }}</td>
    </tr>
    @endforeach
</table>

@endsection