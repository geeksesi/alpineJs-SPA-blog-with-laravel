@extends('layouts.base')

@section('main')
<div x-data x-on-event-render="url-change">
    <x-home.header/>

    <x-home.categories :categories="$categories" />

    <x-home.feature/>

    <x-home.blog :latest="$latest" :popular="$popular" />

    <x-home.video/>

    <x-home.instagram/>

    <x-home.footer/>
</div>
@endsection