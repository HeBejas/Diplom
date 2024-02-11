@extends('layout.app')

@section('title', 'Пошив костюма')

@section('css')
@endsection

@section('content')
    @include('partials.introduction')
    @include('partials.catalog', ['products' => $suits, 'catalog_title' => 'мужских костюмов'])
    @include('partials.fabric')
    @include('partials.poshiv', ['name' => 'костюма'])
    @include('partials.contacts')
@endsection
