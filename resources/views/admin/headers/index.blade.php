@extends('layouts.admin')

@push('styles')
    <link rel="stylesheet" href="{{asset('css/admin/dataTables.min.css')}}">
@endpush

@section('content')
<div class="content-wrapper">

    @include('admin.partials.header')
    
    <section class="content container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span class="card_title">
                                {{ __('global.headers') }}
                            </span>
                        </div>
                    </div>
                    @include('flash::message')

                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="item_datatable" class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Page</th>

                                        <th>Title</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($headers as $header)
                                        <tr>
                                            <td>{{ $header->id }}</td>
                                            
											<td>{{ $header->page->name }}</td>

                                            <td>{{ $header->{'title:'. app()->getLocale()}  }}</td>

                                            <td>
                                                <a class="btn btn-sm btn-primary " href="{{ route('headers.show',$header->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('headers.edit',$header->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-item-id="{{ $header->id }}" data-target="#modal-delete"><i class="fa fa-fw fa-trash"></i>
                                                        Delete
                                                      </button>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <form id="deleteItemForm" action="" method="POST">
        <div class="modal fade" id="modal-delete">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title"></h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @csrf
                    @method('DELETE')
                    <div class="modal-body">
                        <p>Are you sure?</p>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Delete</button>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
    </form>
</div>
@endsection

@push('scripts')
    <script src="{{asset('js/dataTables.min.js')}}"></script>

    <script>
        $('#flash-overlay-modal').modal();

        $(document).ready( function () {
            var locale_lang = "{{app()->getLocale()}}";
            switch(locale_lang) {
               case 'en':
                    var language_datatable = "{{asset('lang/en/dataTables.json')}}";
                    break;
                case 'es':
                    var language_datatable = "{{asset('lang/es/dataTables.json')}}";
                    break;
                case 'ca':
                    var language_datatable = "{{asset('lang/ca/dataTables.json')}}";
                    break;
                default:
                    var language_datatable = "{{asset('lang/en/dataTables.json')}}";
            }
            $('#item_datatable').DataTable({
                    "language": {
                        "url": language_datatable
                    },
            });

            $('#deleteItemForm').on('show.bs.modal', function (event) {
                var button = $(event.relatedTarget);
                const id = 'id';
                $('.modal-title').text('Delete');
                var route = "{{ route('headers.destroy',  'id' ) }}";
                route = route.replace('id',button.data('item-id'));
                $('#deleteItemForm').attr('action', route);
            });

        });

    </script>
@endpush