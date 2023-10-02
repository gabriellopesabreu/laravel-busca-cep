@extends('app')

@section('content')

    <h1>Buscar CEP</h1>
        <form action="{{ route('buscar') }}" method="get">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">CEP</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="cep" placeholder="00000-000">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        @endsection