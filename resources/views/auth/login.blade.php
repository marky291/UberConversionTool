<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>XileRO OS Conversion Tool</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Scripts -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">

    <style>
        .succubus-horizontal-alignment {
            margin-left: -1.5em;
        }

        .succubus-vertical-alignment {
            padding-bottom: 0;
        }

        @media (min-width: 992px) {
            .succubus-horizontal-alignment {
                margin-left: -1.5em;
            }

            .succubus-vertical-alignment {
                padding-bottom: 8em;
            }
        }

        .registration-container form {
            align-self: center;
        }

        .view-height {
            min-height: 100vh;
        }
    </style>
</head>
<body>

    <div class="container d-flex view-height align-items-center">

        <div class="row">
            <div class="col-12 col-lg-8 mb-5 image succubus-horizontal-alignment succubus-vertical-alignment">
                <img src="{{ url('/images/succubus_cute.png') }}" alt="" style="width:100%">
            </div>

            <div class="col-12 col-lg-4 d-flex flex-column justify-content-center justify-content-lg-start align-self-lg-center">

                <form method="POST" action="{{ route('login') }}" id="form" autocomplete="off">

                    @csrf

                    <h2 class="mb-2">XileRO OS Login</h2>

                    <div class="form-group">
                        <label for="userid" class="col-form-label text-md-right">Username</label>
                        <input id="userid" type="text" class="form-control{{ $errors->has('userid') ? ' is-invalid' : '' }}"
                               name="userid" value="{{ old('userid') }}" autofocus>
                        @if ($errors->has('userid'))
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('userid') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="password" class="col-form-label text-md-right">Password</label>
                        <input id="password" type="password"
                               class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password"
                               value="{{ old('password') }}" autofocus>
                        @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                        @endif
                    </div>

                    <div class="actions mt-4 d-flex">
                        <button type="submit" class="btn btn-dark mr-1">Login to Convert OS Items!</button>
                    </div>

                </form>

            </div>
        </div>

    </div>

    <!-- Scripts (We use node package manager cause we are l33t -->
    <script src="{{ mix('js/app.js') }}"></script>

</body>
</html>