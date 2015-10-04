@extends('layouts.master')
@section('title', 'Sign Up')

@section('content')
    <div class="content">
        <!-- resources/views/auth/register.blade.php -->
    
        @if (count($errors) > 0)
            <div class="panel callout radius">
                <div class="row">
                    <div class="small-12 columns">
                        <div class="alert alert-danger">
                            <ul class="disc" data-errors>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        @endif
        
        <!--
            Forms & HTML
            [http://laravelcollective.com/docs/5.1/html]
        -->
        <div class="panel radius">
            <div class="row">
                <div class="small-12 columns">
                    {!! Form::open(['url' => '/auth/register']) !!}
                        {!! Form::label('first_name', 'First Name') !!}
                        {!! Form::text('first_name', old('first_name'), ['required' => 'required']) !!}

                        {!! Form::label('last_name', 'Last Name') !!}
                        {!! Form::text('last_name', old('last_name'), ['required' => 'required']) !!}

                        {!! Form::label('gender', 'Gender') !!}
                        {!! Form::select('gender', ['male' => 'Male', 'female' => 'Female'], old('gender'), ['placeholder' => 'Select your option', 'required' => 'required']) !!}

                        {!! Form::label('email', 'Email') !!}
                        {!! Form::email('email', old('email'), ['required' => 'required']) !!}

                        {!! Form::label('password', 'Password') !!}
                        {!! Form::password('password', ['required' => 'required']) !!}

                        {!! Form::label('password_confirmation', 'Confirm Password') !!}
                        {!! Form::password('password_confirmation', ['required' => 'required']) !!}

                        <div class="clearfix">
                            {!! Form::submit('Sign Up', ['class' => 'button radius small right ']) !!}
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
