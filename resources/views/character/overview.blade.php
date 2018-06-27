@extends('index')

@section('layout')

    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom box-shadow mb-4">
        <h5 class="my-0 mr-md-auto font-weight-normal">XileRO Conversion Tool V1.1</h5>
        <nav class="my-2 my-md-0 mr-md-3">
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-outline-dark">Logout</button>
            </form>
        </nav>
    </div>

    @if (session('confirmation'))
        <div class="container">
            <div class="alert alert-success">
                {{ session('confirmation') }}
            </div>
        </div>
    @endif

    @if (session('middleware'))
        <div class="container">
            <div class="alert alert-danger">
                {{ session('middleware') }}
            </div>
        </div>
    @endif

    @if (app()->environment('local'))
        <div class="container">
            <div class="alert alert-danger">
                <b>Currently running debug mode</b>, items will not be deleted, ubers will still process! <br>
                GMS and banned accounts are allowed to be used while in debug mode!<br>
            </div>
        </div>
    @endif

    @if((auth()->user()->level > 0 || auth()->user()->isBanned()) && app()->environment('local'))
        <div class="container">
            <div class="alert alert-dark">
                <b>Debug Mode:</b>, <br>
                Your account is not allowed to request an item conversion! GTFO. <br>
                Reason:
                @if (auth()->user()->isBanned())
                    Banned
                @else
                    GM Account
                @endif
            </div>
        </div>
    @endif

    <div class="landing container mb-5">
        <div class="row">
            <h1 class="">Welcome {{ ucfirst( Auth()->user()->userid) }}!</h1>
            <p class="mb-5 text-justify">
                This conversion tool has been created and made available by Marky as a unique and awesome way of
                keeping track of your items available for conversion for the XileRO BG Server from OS, to make it easy
                we compile all your items from <b>storage</b>, <b>inventory</b> & <b>cart</b>, it is important
                to note that as more items become available for conversion you will be able to use this page again and
                process another conversion for those extra items. <b>Thank you for your continued support of XileRO!</b>
            </p>

            <div class="row mt-3 mb-5">
                <div class="col-4">
                    <div id="succubus" style="height:100%; width:100%"></div>
                </div>
                <div class="col-8">
                    @if((auth()->user()->level > 0 || auth()->user()->isBanned()) && !app()->environment('local'))
                        Your account is not allowed to request an item conversion! GTFO. <br>
                        <br>
                        Reason:
                        @if (auth()->user()->isBanned())
                            Banned
                        @else
                            GM Account
                        @endif
                    @else
                        <form method="POST" action="{{ route('checkout') }}" autocomplete="off">
                            @csrf

                            <div class="form-group">
                                <label for="username">BG Username</label>
                                <input type="text" name="username" id="username" class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" placeholder="" aria-describedby="usernameHelp" autofocus>
                                @if ($errors->has('username'))
                                    <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('username') }}</strong>
                            </span>
                                @else
                                    <small id="usernameHelp" class="text-muted">Enter the username of your account on XileRO BG</small>
                                @endif
                            </div>

                            <div class="form-group">
                                <label for="password">BG Password</label>
                                <input type="password" name="password" id="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="" aria-describedby="passwordHelp" autofocus>
                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                                @else
                                    <small id="passwordHelp" class="text-muted">Enter the password of your account on XileRO BG</small>
                                @endif
                            </div>

                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input {{ $errors->has('checked') ? ' is-invalid' : '' }}" name="terms" id="terms" value="checked" checked required>
                                    @if ($errors->has('checked'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>By agreeing to this you accept our terms and conditions outlined below.</strong>
                                        </span>
                                    @else
                                        By agreeing to this you accept our terms and conditions outlined below.
                                    @endif
                                </label>
                            </div>

                            <div class="my-2">
                                <small>
                                    By taking part in this conversion form you hereby agree that the account is correct and is yours, that you
                                    wish to convert all available items from OS to BG and that you accept that the XileRO team has no responsibility
                                    in the lose of your items by sending to the wrong account.
                                </small>
                            </div>

                            <button type="submit" class="btn btn-primary mt-3">Convert Now!</button>
                            <a href="#convertable-items" class="btn btn-outline-dark mt-3">View Items</a>
                        </form>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <div class="container my-5" id="convertable-items">
        <div class="standout d-flex">
            <h5>Available Convertable Items</h5>
            <div class="flex-fill text-right">Total Ubers: {{ $convertable->getTotalValue() }}, Total Price: ${{ $convertable->getTotalPrice() }}, Total Items: {{ $convertable->items->count() }}</div>
        </div>

        @if ($convertable->items)
            @foreach ($convertable->items->chunk(4) as $items)

                <div class="row items mb-3">

                    @foreach($items as $item)

                        @if ($loop->first)
                            @include('items.item', ['class' => 'first'])
                        @endif

                        @if (!$loop->first && !$loop->last)
                            @include('items.item', ['class' => 'middle'])
                        @endif

                        @if ($loop->last)
                            @include('items.item', ['class' => 'last'])
                        @endif

                    @endforeach

                </div>

            @endforeach
        @else
            <h3>No items available for conversion right now!</h3>
        @endif
    </div>

@endsection
