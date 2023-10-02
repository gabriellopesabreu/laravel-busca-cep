@extends('app')

@section('content')

<h1>Adicionar CEP</h1>

    <form action="{{ route('salvar') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">CEP</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="cep" value="{{ $cep }}">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Logradouro</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="logradouro" value="{{ $logradouro }}">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Numero</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="numero">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Bairro</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="bairro" value="{{ $bairro }}">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Cidade</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="cidade" value="{{ $cidade }}">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Estado</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="estado" value="{{ $estado }}">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    @endsection