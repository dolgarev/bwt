@extends('layouts.master')
@section('title', 'Welcome')

@section('content')
    <div class="content">
        <div class="panel radius">
            <div class="row">
                <div class="small-12 columns">
                    <h1 class="text-center">Hello and Welcome!</h1>
                    <br>
                    <p>Dear <b>{{ $first_name }}</b> <b>{{ $last_name }}</b>,<br><br>
                    Proin eget tortor risus. Nulla quis lorem ut libero malesuada feugiat. Donec sollicitudin molestie malesuada. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Donec sollicitudin molestie malesuada. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Vivamus suscipit tortor eget felis porttitor volutpat. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Vivamus suscipit tortor eget felis porttitor volutpat.<br><br>
                    Cheers!</p>
                </div>
            </div>
            <div class="row">
                <div class="small-4 small-centered columns text-center">
                    <a href="/auth/logout" class="button alert radius small">Bye-Bye!</a>
                </div>
            </div>
        </div>
        
        
    </div>
@endsection
