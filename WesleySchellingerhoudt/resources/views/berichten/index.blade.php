@extends('layout')
@section('content')
    @if (\Session::has('success'))
        <div class="alert alert-danger">
            <ul>
                <li class="text-decoration-none">{!! \Session::get('success') !!}</li>
            </ul>
        </div>
    @endif
    <a href="{{ route('berichten.create') }}" class="btn btn-success mb-2">Bericht maken</a>
    <br>
    <div class="row">

        <div class="col-12">
            <table class="table table-bordered" id="laravel_crud">
                <thead>
                <tr>
                    <th class="col-1">Id</th>
                    <th class="col-2">Titel</th>
                    <th class="col-6">Content</th>
                    <th class="col-3">Actie</th>
                </tr>
                </thead>
                <tbody>
                @foreach($berichten as $bericht)
                    <tr>
                        <td>{{ $bericht->id }}</td>
                        <td>{{ $bericht->titel }}</td>
                        <td>{{ $bericht->content }}</td>
                        <td>
                            <form method="POST"action="{{ route('berichten.destroy', $bericht->id) }}">
                            <a class="btn btn-info" href="{{route('berichten.show',$bericht->id)}}">Show</a>
                            <a href="{{ route('berichten.edit',$bericht->id)}}" class="btn btn-primary">Edit</a>
                                @csrf
                                @method('delete')
                            <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <div class="d-flex justify-content-center">
                {!! $berichten->links('pagination::bootstrap-4') !!}
            </div>
        </div>
    </div>
@endsection
