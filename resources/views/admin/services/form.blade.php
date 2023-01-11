@push('styles')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.css" rel="stylesheet" />
@endpush
<div class="box box-info padding-1">
    <div class="box-body">
        <div class="form-group">
            {{ Form::label('page') }}
            {!! Form::select('page_id', $pages, $service->page_id, ['class' => 'form-control' . ($errors->has('page_id') ? ' is-invalid' : '')]) !!}
            {!! $errors->first('page_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('title') }}
            {{ Form::text('title:'.app()->getLocale(), $service->{'title:'. app()->getLocale()}, ['class' => 'form-control' . ($errors->has('title:'.app()->getLocale()) ? ' is-invalid' : ''), 'placeholder' => 'Title']) }}
            {!! $errors->first('title:'.app()->getLocale(), '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Text') }}
            {{ Form::textarea('text:'.app()->getLocale(), $service->{'text:'. app()->getLocale()}, ['class' => 'form-control' . ($errors->has('text:'.app()->getLocale()) ? ' is-invalid' : ''), 'placeholder' => 'Text', 'rows' => 2]) }}
            {!! $errors->first('text:'.app()->getLocale(), '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
          {{ Form::label('Icons') }}
          <div class="form-group-icons">
            <div class="row align-items-center">
              {{ Form::radio('icon','ion-monitor', $service->icon == 'ion-monitor') }}
              <span class="ico-circle"><i class="ion-monitor"></i></span> 
            </div>
            <div class="row align-items-center">
              {{ Form::radio('icon','ion-code-working', $service->icon == 'ion-code-working') }}
              <span class="ico-circle"><i class="ion-code-working"></i></span>
            </div>
            <div class="row align-items-center">
              {{ Form::radio('icon','ion-camera', $service->icon == 'ion-camera') }}
              <span class="ico-circle"><i class="ion-camera"></i></span>
            </div>
            <div class="row align-items-center">
              {{ Form::radio('icon','ion-android-phone-portrait', $service->icon == 'ion-android-phone-portrait') }}
              <span class="ico-circle"><i class="ion-android-phone-portrait"></i></span> 
            </div>
            <div class="row align-items-center">
              {{ Form::radio('icon','ion-paintbrush', $service->icon == 'ion-paintbrush') }}
              <span class="ico-circle"><i class="ion-paintbrush"></i></span> 
            </div>
            <div class="row align-items-center">
              {{ Form::radio('icon','ion-stats-bars', $service->icon == 'ion-stats-bars') }}
              <span class="ico-circle"><i class="ion-stats-bars"></i></span> 
            </div>
          </div>
          {!! $errors->first('text:'.app()->getLocale(), '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            <label for="document">Service Image (Upload only one image, max dimensions 100x100)</label>
            <div class="needsclick dropzone" id="document-dropzone">
            </div>
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>

@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.js"></script>
    <script>
        
        var uploadedDocumentMap = {}
        Dropzone.options.documentDropzone = {
          url: '{{ route('services.storeMedia') }}',
          maxFilesize: 1, // MB
          acceptedFiles: ".png,.jpg,.gif",
          addRemoveLinks: true,
          maxFiles:1,
          uploadMultiple: false,
          // resizeWidth: 1920,
          // resizeHeight: 1055,
          headers: {
            'X-CSRF-TOKEN': "{{ csrf_token() }}"
          },
          dictDefaultMessage : 'Arrastrar para subir la fotografía',
          success: function (file, response) {
            $('form').append('<input type="hidden" name="images[]" value="' + response.name + '">')
            uploadedDocumentMap[file.name] = response.name
          },
          removedfile: function (file) {
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
            @if(isset($service) && $service->images)
              var files ={!! json_encode($service->images) !!}
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