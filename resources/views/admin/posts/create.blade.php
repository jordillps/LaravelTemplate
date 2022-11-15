@extends('layouts.admin')

@section('content')
<div class="content-wrapper">
    
    @include('admin.partials.header')

    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Create User</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('posts.index') }}"> Back</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('posts.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('admin.posts.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
