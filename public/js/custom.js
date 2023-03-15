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
        $('.modal-title').text('Delete ' + button.data('item-name'));
        var route = "{{ route('posts.destroy',  'id' ) }}";
        route = route.replace('id',button.data('item-id'));
        $('#deleteItemForm').attr('action', route);
    });

});
