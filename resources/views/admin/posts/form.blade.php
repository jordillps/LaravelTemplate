<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('title') }}
            {{ Form::text('title', $post->title, ['class' => 'form-control' . ($errors->has('title') ? ' is-invalid' : ''), 'placeholder' => 'Title']) }}
            {!! $errors->first('title', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('url') }}
            {{ Form::text('url', $post->url, ['class' => 'form-control' . ($errors->has('url') ? ' is-invalid' : ''), 'placeholder' => 'Url']) }}
            {!! $errors->first('url', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('excerpt') }}
            {{ Form::text('excerpt', $post->excerpt, ['class' => 'form-control' . ($errors->has('excerpt') ? ' is-invalid' : ''), 'placeholder' => 'Excerpt']) }}
            {!! $errors->first('excerpt', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('iframe') }}
            {{ Form::text('iframe', $post->iframe, ['class' => 'form-control' . ($errors->has('iframe') ? ' is-invalid' : ''), 'placeholder' => 'Iframe']) }}
            {!! $errors->first('iframe', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('body') }}
            {{ Form::text('body', $post->body, ['class' => 'form-control' . ($errors->has('body') ? ' is-invalid' : ''), 'placeholder' => 'Body']) }}
            {!! $errors->first('body', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('published_at') }}
            {{ Form::text('published_at', $post->published_at, ['class' => 'form-control' . ($errors->has('published_at') ? ' is-invalid' : ''), 'placeholder' => 'Published At']) }}
            {!! $errors->first('published_at', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('user') }}
            @if(Route::is('posts.create'))
                {!! Form::select('user_id', $users, null, ['class' => 'form-control' . ($errors->has('user_id') ? ' is-invalid' : '')]) !!}
            @else
                {!! Form::select('user_id', $users, $post->user_id, ['class' => 'form-control' . ($errors->has('user_id') ? ' is-invalid' : '')]) !!}
            @endif
            {!! $errors->first('user_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('category') }}
            @if(Route::is('posts.create'))
                {!! Form::select('category_id', $categories, null, ['class' => 'form-control' . ($errors->has('category_id') ? ' is-invalid' : '')]) !!}
            @else
                {!! Form::select('category_id', $categories, $post->category_id, ['class' => 'form-control' . ($errors->has('category_id') ? ' is-invalid' : '')]) !!}
            @endif
            {!! $errors->first('category_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>