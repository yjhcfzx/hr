@extends('layouts.layout')

@section('title', 'Resume Upload')


@section('content')
    <p>Resume Upload</p>
    <form action='{{action("ResumeController@upload")}}' method='POST'>
       {{ csrf_field() }}
        <input type='text' name ='name' />
        <button type='submit'>
            Submit
        </button>
    </form>

@endsection