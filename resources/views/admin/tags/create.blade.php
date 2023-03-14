@extends('layouts.admin')

@section('template_title')
    Create Tag
@endsection

@section('content')
<div class="content-wrapper">
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Create Tag</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('tags.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('admin.tags.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
