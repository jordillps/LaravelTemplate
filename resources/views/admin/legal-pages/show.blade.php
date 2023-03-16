@extends('layouts.admin')


@section('content')
<div class="content-wrapper">
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Legal Page</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('legal-pages.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="callout callout-primary">
                            <strong>Title:</strong>
                            {{ $legalPage->{'title:'. app()->getLocale()} }}
                        </div>
                        <div class="callout callout-primary">
                            <strong>Body:</strong>
                            {!! $legalPage->{'body:'. app()->getLocale()} !!}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
