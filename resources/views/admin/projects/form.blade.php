@push('styles')
    <link href="{{asset('css/admin/dropzone.min.css')}}" rel="stylesheet" />
@endpush

<div class="box box-info padding-1">
  <div class="box-body">
      <div class="form-group">
          {{ Form::label('title') }}
          {{ Form::text('title:'.app()->getLocale(), $project->{'title:'. app()->getLocale()}, ['class' => 'form-control' . ($errors->has('title:'.app()->getLocale()) ? ' is-invalid' : ''), 'placeholder' => 'Title']) }}
          {!! $errors->first('title:'.app()->getLocale(), '<div class="invalid-feedback">:message</div>') !!}
      </div>
      <div class="form-group">
          {{ Form::label('text') }}
          {{ Form::text('text:'.app()->getLocale(), $project->{'text:'. app()->getLocale()}, ['class' => 'form-control' . ($errors->has('text:'.app()->getLocale()) ? ' is-invalid' : ''), 'placeholder' => 'text']) }}
          {!! $errors->first('text:'.app()->getLocale(), '<div class="invalid-feedback">:message</div>') !!}
      </div>
      <div class="row">
        <div class="col-12 col-md-6">
          <div class="form-group">
            {{ Form::label('published_at') }}
            {{ Form::date('published_at', $project->published_at, ['class' => 'form-control' . ($errors->has('published_at') ? ' is-invalid' : ''), 'placeholder' => 'Published At']) }}
            {!! $errors->first('published_at', '<div class="invalid-feedback">:message</div>') !!}
          </div>
        </div>
        <div class="col-12 col-md-6">
          <div class="form-group">
              {{ Form::label('category') }}
              @if(Route::is('projects.create'))
                  {!! Form::select('category_id', $categories, null, ['class' => 'form-control' . ($errors->has('category_id') ? ' is-invalid' : '')]) !!}
              @else
                  {!! Form::select('category_id', $categories, $project->category_id, ['class' => 'form-control' . ($errors->has('category_id') ? ' is-invalid' : '')]) !!}
              @endif
              {!! $errors->first('category_id', '<div class="invalid-feedback">:message</div>') !!}
          </div>
        </div>
      </div>
      <div class="form-group">
        <label for="document">Documents</label>
        <div class="needsclick dropzone" id="document-dropzone">
        </div>
    </div>
  </div>
  <div class="box-footer mt20">
      <button type="submit" class="btn btn-primary">{{ __('global.save') }}</button>
  </div>
</div>

@push('scripts')
    <script src="{{asset('js/dropzone.min.js')}}"></script>
    <script>
        var uploadedDocumentMap = {}
        Dropzone.options.documentDropzone = {
          url: '{{ route('projects.storeMedia') }}',
          maxFilesize: 2, // MB
          addRemoveLinks: true,
          headers: {
            'X-CSRF-TOKEN': "{{ csrf_token() }}"
          },
          dictDefaultMessage : 'Arrastrar para subir las fotografías',
          success: function (file, response) {
            console.log(response);
            $('form').append('<input type="hidden" name="images[]" value="' + response.name + '">')
            uploadedDocumentMap[file.name] = response.name
          },
          removedfile: function (file) {
            console.log(file);
            file.previewElement.remove()
            var name = ''
            if (typeof file.file_name !== 'undefined') {
              name = file.file_name
            } else {
              name = uploadedDocumentMap[file.name]
            }
            $('form').find('input[name="images[]"][value="' + name + '"]').remove()
          },
          init: function () {
            @if(isset($project) && $project->images)
              var files ={!! json_encode($project->images) !!}
                console.log(files);
              for (var i in files) {
                var file = files[i]
                console.log(file);
                this.options.addedfile.call(this, file)
                file.previewElement.classList.add('dz-complete')
                $('form').append('<input type="hidden" name="images[]" value="' + file.file_name + '">')
              }
            @endif
          }
        }
      </script>
@endpush