@extends('layout')
{{--@include('nav')--}}
@section('title')
    Admin
@endsection

@section('content')
    <h1>Welkom</h1>
    <h5>Log in om berichten te bekijken</h5>
    <form method="post" action="{{ route('login.perform') }}">

        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
        <img class="mb-4" src="{!! url('images/bootstrap-logo.svg') !!}" alt="" width="72" height="57">

        <h1 class="h3 mb-3 fw-normal">Login</h1>

        @include('partials.messages')

        <div class="form-group form-floating mb-3">
            <input type="text" class="form-control" name="gebruiker" value="{{ old('gebruiker') }}" placeholder="Gebruikersnaam" required="required" autofocus>
            <label for="floatingName">Gebruikersnaam</label>
            @if ($errors->has('gebruiker'))
                <span class="text-danger text-left">{{ $errors->first('gebruiker') }}</span>
            @endif
        </div>


        <div class="form-group form-floating mb-3">
            <input type="password" class="form-control" name="wachtwoord" value="{{ old('wachtwoord') }}" placeholder="Wachtwoord" required="required">
            <label for="floatingPassword">Wachtwoord</label>
            @if ($errors->has('wachtwoord'))
                <span class="text-danger text-left">{{ $errors->first('wachtwoord') }}</span>
            @endif
        </div>

        <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
    </form>
@endsection
