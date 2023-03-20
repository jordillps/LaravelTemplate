@push('styles')
    <link href="{{asset('css/admin/dropzone.min.css')}}" rel="stylesheet" />
@endpush

<div class="box box-info padding-1">
    <div class="box-body">
        <div class="row">
            <div class="col-md-9">
                <div class="row mb-4">
                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            {{ Form::label('email') }}
                            {{ Form::text('email', $setting->email, ['class' => 'form-control' . ($errors->has('email') ? ' is-invalid' : ''), 'placeholder' => 'Email']) }}
                            {!! $errors->first('email', '<div class="invalid-feedback">:message</div>') !!}
                        </div>
                        <div class="form-group">
                            {{ Form::label('phone') }}
                            {{ Form::text('phone', $setting->phone, ['class' => 'form-control' . ($errors->has('phone') ? ' is-invalid' : ''), 'placeholder' => 'Phone']) }}
                            {!! $errors->first('phone', '<div class="invalid-feedback">:message</div>') !!}
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            {{ Form::label('address') }}
                            {{ Form::text('address', $setting->address, ['class' => 'form-control' . ($errors->has('address') ? ' is-invalid' : ''), 'placeholder' => 'Address']) }}
                            {!! $errors->first('address', '<div class="invalid-feedback">:message</div>') !!}
                        </div>
                        <div class="form-group">
                            {{ Form::label('city') }}
                            {{ Form::text('city', $setting->city, ['class' => 'form-control' . ($errors->has('city') ? ' is-invalid' : ''), 'placeholder' => 'City']) }}
                            {!! $errors->first('city', '<div class="invalid-feedback">:message</div>') !!}
                        </div>
                    </div>
                </div>
                <h4>{{ __('global.social-networks') }}</h4>
                <div class="row mb-4">
                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            {{ Form::label('twitter_url') }}
                            {{ Form::text('twitter_url', $setting->twitter_url, ['class' => 'form-control' . ($errors->has('twitter_url') ? ' is-invalid' : ''), 'placeholder' => 'Twitter Url']) }}
                            {!! $errors->first('twitter_url', '<div class="invalid-feedback">:message</div>') !!}
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            {{ Form::label('linkedin_url') }}
                            {{ Form::text('linkedin_url', $setting->linkedin_url, ['class' => 'form-control' . ($errors->has('linkedin_url') ? ' is-invalid' : ''), 'placeholder' => 'Linkedin Url']) }}
                            {!! $errors->first('linkedin_url', '<div class="invalid-feedback">:message</div>') !!}
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            {{ Form::label('facebook_url') }}
                            {{ Form::text('facebook_url', $setting->facebook_url, ['class' => 'form-control' . ($errors->has('facebook_url') ? ' is-invalid' : ''), 'placeholder' => 'Facebook Url']) }}
                            {!! $errors->first('facebook_url', '<div class="invalid-feedback">:message</div>') !!}
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            {{ Form::label('instagram_url') }}
                            {{ Form::text('instagram_url', $setting->instagram_url, ['class' => 'form-control' . ($errors->has('instagram_url') ? ' is-invalid' : ''), 'placeholder' => 'Instagram Url']) }}
                            {!! $errors->first('instagram_url', '<div class="invalid-feedback">:message</div>') !!}
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            {{ Form::label('pinterest_url') }}
                            {{ Form::text('pinterest_url', $setting->pinterest_url, ['class' => 'form-control' . ($errors->has('pinterest_url') ? ' is-invalid' : ''), 'placeholder' => 'Pinterest Url']) }}
                            {!! $errors->first('pinterest_url', '<div class="invalid-feedback">:message</div>') !!}
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            {{ Form::label('youtube_url') }}
                            {{ Form::text('youtube_url', $setting->youtube_url, ['class' => 'form-control' . ($errors->has('youtube_url') ? ' is-invalid' : ''), 'placeholder' => 'Youtube Url']) }}
                            {!! $errors->first('youtube_url', '<div class="invalid-feedback">:message</div>') !!}
                        </div>
                    </div>
                </div>
                <h4>{{ __('global.contacts-email') }}</h4>
                <p>{{ __('global.contacts-email-explanation') }}</p>
                <div class="row">
                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            {{ Form::label('email') }}
                            {{ Form::text('email', $setting->email, ['class' => 'form-control' . ($errors->has('email') ? ' is-invalid' : ''), 'placeholder' => 'Email']) }}
                            {!! $errors->first('email', '<div class="invalid-feedback">:message</div>') !!}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                @if(count($setting->getMedia('images'))>0)
                    <div class="card-body box-profile">
                        <div class="text-center">
                        <form action="{{ route('settings.deleteMedia', ['media' => $setting->getMedia('images')[0]])}}" method="POST">
                            {{ @method_field('DELETE')}}
                            @csrf
                            <img src="{{ $setting->getMedia('images')[0]->getUrl() }}" alt="" style="max-width: 100%;">
                            <button class="btn btn-danger" style="position: absolute; left:20px;"><i class="far fa-trash-alt xs"></i></button>
                        </form>
                        </div>
                    </div>
                @else
                    <div class="form-group">
                        <label for="document">{{ __('global.logo') }}<small>{{ __('global.max-size') }}</small></label>
                        <div class="needsclick dropzone" id="document-dropzone">
                        </div>
                    </div>  
                @endif
            </div>
        </div>
    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-info">{{ __('global.save') }}</button>
    </div>
</div>

@push('scripts')
    <script src="{{asset('js/dropzone.min.js')}}"></script>
    <script>
        var uploadedDocumentMap = {}
        Dropzone.options.documentDropzone = {
          url: '{{ route('settings.storeMedia') }}',
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
            @if(isset($setting) && $setting->images)
              var files ={!! json_encode($setting->images) !!}
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