@extends('layouts.app')

@section('title', 'Anggota')

@section('content')

<h2 class="mb-4">👤 Data Anggota</h2>

<ul class="list-group">
    @foreach($anggota as $a)
        <li class="list-group-item">{{ $a }}</li>
    @endforeach
</ul>

@endsection