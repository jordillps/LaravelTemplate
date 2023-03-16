@extends('layouts.admin')

@section('content')
<div class="content-wrapper">

    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Create Header</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('headers.index') }}"> Back</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('headers.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('admin.headers.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
