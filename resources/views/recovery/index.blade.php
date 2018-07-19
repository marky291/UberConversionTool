
@extends('index')

@section('layout')

    <div class="container my-5">
        <form method="POST" type="{{ route('recovery.process') }}">

            @csrf

            <h1>Automatic Recovery Process</h1>

            <p>
                Our automatic account recovery process has been made simple, in an attempt to get your account back in your hands,
                for this we require a certain criteria of information that will be analysed with our algorithms to determine if you
                are the true owner of the account, with access you will then be allowed to convert your OS account items into the new
                BG Server uber point system for use in the cashshop, please fill out the following form to start the process of
                recovery.
            </p>

            <div class="form-group">
                <label for="userid" class="col-form-label text-md-right">Username</label>
                <input id="userid" type="text" class="form-control{{ $errors->has('userid') ? ' is-invalid' : '' }}" name="userid" value="{{ old('userid') }}" autofocus>
                @if ($errors->has('userid'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('userid') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group">
                <label for="email" class="col-form-label text-md-right">Email Address (optional)</label>
                <input id="email" type="text" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" autofocus>
                @if ($errors->has('email'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>

            <button type="submit" class="btn btn-primary">Attempt Recovery</button>

        </form>
    </div>

@endsection