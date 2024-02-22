@extends('layouts.defoult-layout')



@section('main_content')

<h1>{{ __('messages.welcome hey', ['name'=>'temur']) }}</h1>

{{asset('storage/file.txt') }}

@endsection