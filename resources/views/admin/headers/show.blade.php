@extends('layouts.admin')

@section('content')
<div class="content-wrapper"> 

    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Header</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('headers.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="form-group">
                            <strong>Page:</strong>
                            {{ $header->page->name }}
                        </div>
                        <div class="form-group">
                            <strong>Title:</strong>
                            {{ $header->{'title:'. app()->getLocale()} }}
                        </div>
                        <div class="form-group">
                            <strong>Text:</strong>
                            {{ $header->{'text:'. app()->getLocale()} }}
                        </div>
                        <div class="form-group">
                            <strong>Picture:</strong>
                            <div class="row p-3">
                                @foreach ($header->getMedia('images') as $media)
                                    <div class="col-12 col-md-6 col-lg-3">
                                        <img src="{{ $media->getUrl() }}" alt="" style="max-width: 100%;">
                                    </div>
                                @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
