@extends('layouts.layout')

@section('title', 'Resume Upload')


@section('content')
    <p>Resume Upload</p>


    <form action='{{action("ResumeController@upload")}}' method='POST'  enctype="multipart/form-data">
       {{ csrf_field() }}
        <input type='text' name ='name' />
         <input type='file' name ='resume' />
        <button type='submit'>
            Submit
        </button>
    </form>

@endsection