@extends('layouts.admin')

@section('content')
<div class="content-wrapper">
    
    @include('admin.partials.header')

    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-primary">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Create Project</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-dark" href="{{ route('projects.index') }}"> Back</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('projects.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('admin.projects.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
