@extends('layout')
{{--@include('nav')--}}
@section('title')
    Admin
@endsection

@section('content')
    <h1>Bericht bewerken: {{ $bericht->titel }}</h1>

    <form action="{{ route('berichten.update', $bericht->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="titel">Titel</label>
            <input type="text" name="titel" id="titel" class="form-control" value="{{ old('titel') ?: $bericht->titel }}" required minlength="3" maxlength="80" />
        </div>

        <div class="form-group">
            <label for="content">Content</label>
            <textarea name="content" id="content" class="form-control" rows="8" required>{{ old('content') ?: $bericht->content }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Opslaan</button>
    </form>
@endsection
