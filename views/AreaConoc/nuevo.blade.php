@extends('layouts.app')

@section('content')
    <div class="container">
        <form method="POST" action="{{ route('areaconoc.store') }}">
            {{ csrf_field() }}
            <div class="mb-3">
                <label for="txtNombre" class="form-label">Area Conocimiento</label>
                <input type="text" class="form-control" name="txtNombre" id="txtNombre" aria-describedby="emailHelp">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
