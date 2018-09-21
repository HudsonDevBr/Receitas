@extends('layout.layout')

@section('principal')
<br>
<form action="/receita" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-row">
            <div class="col-md-5">
                <label for="nome" >Nome</label>
                <input type="text" id="nome" name="nome" class="form-control" placeholder="Nome da Receita">
            </div>
            <div class="col-md-5">
                <label for="foto" >Foto</label>
                <input type="file" id="foto" name="foto" class="form-control btn" placeholder="Nome da Receita">
            </div>
            <div class="col-md-1">
                <label for="tempoPreparo" >Tempo</label>
                <input type="text" id="tempoPreparo" name="tempoPreparo" class="form-control" placeholder="Min">
            </div>
            <div class="col-md-1">
                <label for="rendimento" >Rendimento</label>
                <input type="text" id="rendimento" name="rendimento" class="form-control" placeholder="rend">
            </div>
        </div>
        <br>
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">Ingredientes</span>
            </div>
            <textarea class="form-control" name="ingredientes" id="ingredientes"></textarea>
        </div>
        <p class="aviso">*Separe os Itens por Virgula (,)</p>
        <br>
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">Modo de Preparo</span>
            </div>
            <textarea class="form-control" name="modoPreparo" id="modoPreparo"></textarea>
        </div>
        <p class="aviso">*Separe cada parte da receita por (,)</p>
        <br>
        <div>
            <label for="categoria_id">Categorias</label>
            <select class="custom-select col-md-4" name="categoria_id" id="categoria_id">
                @foreach ($cat as $c)
                    <option value="{{$c->id}}">{{$c->id}} - {{$c->nome}}</option>
                @endforeach
            </select>
            <p class="aviso">*Selecione a categoria da receita.</p>

        </div>
        <div class="btn-direito btn-lg">
            <input type="submit" value="Enviar" class="btn btn-primary">
        </div>
    </form>



@endsection
