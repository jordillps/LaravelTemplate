<div class="box box-info padding-1">
    <div class="box-body">
        <h4>{{ __('global.footer-data') }}</h4>
        <div class="row mb-4">
            <div class="col-12 col-md-6">
                <div class="form-group">
                    {{ Form::label(trans('global.email') . '*') }}
                    {{ Form::text('email', $setting->email, ['class' => 'form-control' . ($errors->has('email') ? ' is-invalid' : ''), 'placeholder' => 'Email']) }}
                    {!! $errors->first('email', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="form-group">
                    {{ Form::label(trans('global.phone')) }}
                    {{ Form::text('phone', $setting->phone, ['class' => 'form-control' . ($errors->has('phone') ? ' is-invalid' : ''), 'placeholder' => 'Phone']) }}
                    {!! $errors->first('phone', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="form-group">
                    {{ Form::label(trans('global.address')) }}
                    {{ Form::text('address', $setting->address, ['class' => 'form-control' . ($errors->has('address') ? ' is-invalid' : ''), 'placeholder' => 'Address']) }}
                    {!! $errors->first('address', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="form-group">
                    {{ Form::label(trans('global.city')) }}
                    {{ Form::text('city', $setting->city, ['class' => 'form-control' . ($errors->has('city') ? ' is-invalid' : ''), 'placeholder' => 'City']) }}
                    {!! $errors->first('city', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="form-group">
                    {{ Form::label(trans('global.postalcode')) }}
                    {{ Form::text('postalcode', $setting->postalcode, ['class' => 'form-control' . ($errors->has('postalcode') ? ' is-invalid' : ''), 'placeholder' => 'Postal Code']) }}
                    {!! $errors->first('postalcode', '<div class="invalid-feedback">:message</div>') !!}
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
                    {{ Form::label(trans('global.email_contacts'). '*') }}
                    {{ Form::text('email_contacts', $setting->email_contacts, ['class' => 'form-control' . ($errors->has('email_contacts') ? ' is-invalid' : ''), 'placeholder' => 'Email Contacts Form']) }}
                    {!! $errors->first('email_contacts', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>    
        </div>
    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('global.save') }}</button>
    </div>
</div>

