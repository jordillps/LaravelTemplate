@extends('layouts.admin')

@section('content')
<div class="content-wrapper"> 

    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Service</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('services.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="callout callout-primary">
                            <strong>Page:</strong>
                            {{ $service->page->name }}
                        </div>
                        <div class="callout callout-primary">
                            <strong>Title:</strong>
                            {{ $service->{'title:'. app()->getLocale()} }}
                        </div>
                        <div class="callout callout-primary">
                            <strong>Text:</strong>
                            {{ $service->{'text:'. app()->getLocale()} }}
                        </div>
                        <div class="callout callout-primary">
                            <strong>Picture:</strong>
                            <div class="row p-3">
                                @foreach ($service->getMedia('images') as $media)
                                    <div class="col-12 col-md-6 col-lg-3">
                                        <img src="{{ $media->getUrl('thumb') }}" alt="" style="max-width: 100%;">
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="callout callout-primary">
                            <strong>Icons:</strong>
                            <div>
                                <span class="ico-circle"><i class="{{ $service->icon }}"></i></span>
                            </div>
                        </div>                        
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
