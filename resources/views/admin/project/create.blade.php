@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

        <div class="col-12">
            <form action="{{ route('admin.project.store') }}" method="POST" id="creation_form">
                @csrf

                <div class="input-group-sm container mb-5 w-50">

                    <label for="nome">Nome</label>
                    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" placeholder="Nome progetto" id="nome" name="nome" value="{{ old('nome') }}">


                    <label for="linguaggio_utilizzato">linguaggio_utilizzato</label>
                    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" placeholder="linguaggio_utilizzato" id="linguaggio_utilizzato" name="linguaggio_utilizzato" value="{{ old('linguaggio_utilizzato') }}">

                    <label for="url_repo">url_repo</label>
                    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" placeholder="url_repo" id="url_repo" name="url_repo" value="{{ old('url_repo') }}">



                    <div class="d-flex justify-content-between mt-3">

                            <input class="btn btn-primary" type="submit" value="crea un nuovo progetto">
                            <input class="btn btn-warning" type="reset" value="resetta campi">

                    </div>
                </div>
            </form>
            <a href="{{ route('admin.project.index')}}" class="card-link d-flex justify-content-center">Torna alla lista dei progetti</a>
        </div>

    </div>
</div>
@endsection


@section('custom_script')
@vite('resources/js/delete_confirm.js')
@endsection
