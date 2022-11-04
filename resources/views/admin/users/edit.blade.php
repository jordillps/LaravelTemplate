@extends('layouts.admin')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <section class="content container-fluid">
        <div class="col-sm-12">
            @includeif('partials.errors')
            <div class="card card-default">
                <div class="card-header">
                  <div class="float-left">
                    <span class="card-title">Update User</span>
                  </div>
                  <div class="float-right">
                      <a class="btn btn-primary" href="{{ route('users.index') }}"> Back</a>
                  </div>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('users.update', $user->id) }}"  role="form" enctype="multipart/form-data">
                        {{ method_field('PATCH') }}
                        @csrf
                        @include('admin.users.form')
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
