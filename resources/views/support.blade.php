@extends('layouts.defoult-layout')

@section('title', 'Support')





@section('main_content')

<h1>Support</h1>


@if($errors->any()) 
    <div class="alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


<form method="POST" action="/support/review/check">

    <input type="email" name="email" placeholder="excample@gmail.com">
    <input type="text" name="subject" placeholder="Message title">
    <textarea name="message" placeholder="Message" style="height: 60px;"></textarea>
    
    <button type="submit">Submit</button>
    @csrf
</form>





<h3>Support Ot </h3>

@foreach($contacts as $el)

<div style="border: 1px solid; backdrop-filter: blur(5px); 
                margin-bottom: 5px; border-radius: 3px; padding: 14px; background-color: #ed143d4f;">
    <h4 style="margin: 0; padding-bottom: 5px; border-bottom: 1px dashed;">{{ $el->subject }}</h4>
    <p style="margin: 0; padding-top: 10px" >{{ $el->message }} </p>
</div>

@endforeach

@endsection






@section('style_content')
    <style type="text/css">
        form {
            width: 90%;
        }
        input, textarea {
            margin-top: 10px;
            width: 100%;
            height: 30px;
            font-size: 20px;
            border-radius: 5px;
            border: none;
        }

        
        textarea {
            resize: vertical;
        }

        button {
            padding: 10px 25px;
            border: none;
            border-radius: 5px;
        }
    </style>
@endsection