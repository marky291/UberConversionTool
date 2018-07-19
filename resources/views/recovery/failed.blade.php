
@extends('index')

@section('layout')

    <style>
        p {
            font-size: 18px;
        }
        li a {
            font-size: 16px;
            line-height: 1.5em;
        }
    </style>

    <div class="container my-5 bg-white p-4">

    <h1>Recovering Your account</h1>

    <p>
        We are sorry to hear that your account cannot be accessed, we understand this can be stressfull,
        in order to resolve this we would kindly request you use one of the links below to contact an admin
        that will assist you in your account recovery.
    </p>

    <ul>
        <li><a href="https://www.facebook.com/jonathan.slavey">Jon Slavey (Facebook Link)</a></li>
    </ul>

    <a href="{{ route('overview') }}" class="btn btn-dark mt-3">Back to Login Screen</a>

</div>
@endsection