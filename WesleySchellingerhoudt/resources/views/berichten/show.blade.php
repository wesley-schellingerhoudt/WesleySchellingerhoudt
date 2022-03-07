@extends('layout')

@section('title', $bericht->titel)

@section('content')
    <div class="row">
                <h1> Bericht bekijken</h1>
    </div><br>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Titel</strong><br>
                {{ $bericht->titel }}
            </div><br>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Content</strong><br>
                {{ $bericht->content }}
            </div>
        </div>
    </div>
@endsection
