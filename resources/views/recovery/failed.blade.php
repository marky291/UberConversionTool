
@extends('index')

@section('layout')

    <div class="container my-5">

    <h1>Recovery Failed</h1>

    <p>
        Sorry, we couldn't validate your credentials against our algorithms, we will now request that you speak
        to an XileRO Staff Admin at one of the following links:
    </p>

    <ul>
        <li><a href="https://www.facebook.com/jonathan.slavey">Jon Slavey (Facebook Link)</a></li>
    </ul>

    <a href="{{ route('overview') }}" class="btn btn-dark">Back to Login Screen</a>

</div>
@endsection