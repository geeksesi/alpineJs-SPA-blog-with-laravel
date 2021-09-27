@extends('layouts.base')

@section('main')
    <x-home.header/>

    <x-home.categories :categories="$categories" />

    <x-home.feature/>

    <x-home.blog/>

    <x-home.video/>

    <x-home.instagram/>

    <x-home.footer/>
@endsection