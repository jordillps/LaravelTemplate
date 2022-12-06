@extends('layouts.admin')

@section('content')
<div class="content-wrapper"> 

    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show About</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('abouts.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Page:</strong>
                            {{ $about->page->name }}
                        </div>
                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $about->name }}
                        </div>
                        <div class="form-group">
                            <strong>Profession:</strong>
                            {{ $about->{'profession:'. app()->getLocale()} }}
                        </div>
                        <div class="form-group">
                            <strong>About Me:</strong>
                            {{ $about->{'about_me:'. app()->getLocale()} }}
                        </div>
                        <div class="form-group">
                            <strong>Email:</strong>
                            {{ $about->email }}
                        </div>
                        <div class="form-group">
                            <strong>Phone:</strong>
                            {{ $about->phone }}
                        </div>
                        <div class="form-group">
                            <strong>Html:</strong>
                            {{ $about->html }}
                        </div>
                        <div class="form-group">
                            <strong>Css:</strong>
                            {{ $about->css }}
                        </div>
                        <div class="form-group">
                            <strong>Php:</strong>
                            {{ $about->php }}
                        </div>
                        <div class="form-group">
                            <strong>Javascript:</strong>
                            {{ $about->javascript }}
                        </div>
                        <div class="form-group">
                            <strong>Picture:</strong>
                            <div class="row p-3">
                                @foreach ($about->getMedia('images') as $media)
                                    <div class="col-12 col-md-6 col-lg-3">
                                        <img src="{{ $media->getUrl('thumb') }}" alt="" style="max-width: 100%;">
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
</div>
@endsection
