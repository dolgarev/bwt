@extends('layouts.master')
@section('title', 'Sign Up')

@section('content')
    <!-- resources/views/auth/register.blade.php -->

    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    
    <!--
        Forms & HTML
        [http://laravelcollective.com/docs/5.1/html]
    -->
    {!! Form::open(array('url' => '/auth/register')) !!}
        {!! Form::label('first_name', 'First Name') !!}
        {!! Form::text('first_name', old('first_name')) !!}
        <br>
        
        {!! Form::label('last_name', 'Last Name') !!}
        {!! Form::text('last_name', old('last_name')) !!}
        <br>
        
        {!! Form::label('gender', 'Gender') !!}
        {!! Form::select('gender', ['male' => 'Male', 'female' => 'Female'], old('gender'), ['placeholder' => 'Select your option']) !!}
        <br>
        
        {!! Form::label('email', 'Email') !!}
        {!! Form::email('email', old('email')) !!}
        <br>
    
        {!! Form::label('password', 'Password') !!}
        {!! Form::password('password') !!}
        <br>
    
        {!! Form::label('password_confirmation', 'Confirm Password') !!}
        {!! Form::password('password_confirmation') !!}
        <br>
    
        {!! Form::submit('Sign Up') !!}
    {!! Form::close() !!}
@endsection
