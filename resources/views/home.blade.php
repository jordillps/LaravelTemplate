@extends('layouts.app')

@section('seo')
    <!-- SEO meta -->
    {!! SEOMeta::generate() !!}
    <!-- SEO Open Graph -->
    {!! OpenGraph::generate() !!}
    <!-- SEO Twitter -->
    {!! Twitter::generate() !!}
    <!-- SEO Json-Ld -->
    {!! JsonLd::generate() !!}
@endsection

@section('content')
    @include('partials.navbar')

    <h1>Holaaaaa</h1>

    @include('partials.footer')

@endsection