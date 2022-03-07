@extends('layout')
{{--@include('nav')--}}
@section('title')
    Admin
@endsection

@section('content')
    <h1>Bericht aanmaken</h1>

    <form action="{{ route('berichten.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="titel">Titel</label>
            <input type="text" name="titel" id="titel" class="form-control" value="{{ old('titel') }}" required minlength="3" maxlength="80" />
        </div>

        <div class="form-group">
            <label for="content">Content</label>
            <textarea name="content" id="content" class="form-control" rows="8" required></textarea>
        </div>


        <button type="submit" class="btn btn-primary">Bericht aanmaken</button>
    </form>
@endsection
