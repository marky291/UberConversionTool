
@extends('index')

@section('layout')

    <div class="container my-5">

        <h1>Recovery Successful</h1>

        <p>
            Congrats, we managed to recovey your account, you are now logged in and ready to convert your items
            for XileRO BG.
        </p>

        <a href="{{ route('overview') }}" class="btn btn-dark">Continue to Converter</a>

    </div>

@endsection