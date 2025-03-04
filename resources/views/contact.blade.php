@extends('layout')

@section('title', 'contact ')


@section('content')
    <h1>{{ __('contact') }}</h1>
    <form method="POST" action="{{ route('mesagges.store')}}" >
    @csrf
        <input name="name" placeholder="Nombre..." value="{{old('name')}}"><br>
        {!! $errors->first('name', '<small>:message</small><br>') !!}

        <input name="email"  type="email" placeholder="Correo" value="{{old('email')}}"><br>
        {!! $errors->first('email', '<small>:message</small><br>') !!}

        <input name="subject" placeholder="Asunto..." value="{{old('subject')}}"><br>
        {!! $errors->first('subject', '<small>:message</small><br>') !!}

        <textarea name="content" placeholder="Mensaje...">{{old('content')}}</textarea><br>
        {!! $errors->first('content', '<small>:message</small><br>') !!}
        <button type="submit">@lang('send')</button>
    </form>
@endsection