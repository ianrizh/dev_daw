@extends('layouts.app')

@section('content')
    <h1>Edit Post</h1>
    {!! Form::open(['action' => ['PostsController@update', $post->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('title', 'Title')}}
            {{Form::text('title', $post->title, ['class' => 'form-control', 'placeholder' => 'Title'])}}
        </div>
        <div class="form-group">
            {{Form::label('slug', 'Slug')}}
            {{Form::text('slug', $post->slug, ['id' => 'form-control', 'class' => 'form-control', 'placeholder' => 'Slug Text'])}}
        </div>
        <div class="form-group">
            {{Form::label('content', 'Content')}}
            {{ Form::textarea('content', $post->content, ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Content Text'])}}
        </div>
       
        <div class="form-group">
            {{Form::file('cover_image')}}
        </div>
        {{Form::hidden('_method','PUT')}}
        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection