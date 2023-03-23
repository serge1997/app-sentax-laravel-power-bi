@extends('layouts.main')
@section('title', 'Editar usuario')
    
@section('content')
    <div class="w-full">
        <div class="text-center p-4 w-2/3 m-auto">
            @foreach ($user as $item)
                <p class="text-xl font-bold">Editando o usuario: {{ $item->name }}</p>    
            @endforeach
        </div>
    </div>
    <div class="w-full flex justify-center">
        <div class="w-11/12 flex justify-center mt-8">
            <form action="" method="post" class="space-y-4" id="FormEdit" data-user="{{ $item->id }}">
                <p id="info"></p>
                @csrf
                <div class="flex flex-col">
                    <label for="">Novo e-mail: </label>
                    <input type="text" class="border border-slate-300 p-1" name="email" id="email" placeholder="novo e-mail">
                </div>
                <div class="flex flex-col">
                    <label for="">Nova senha: </label>
                    <input type="password" class="border border-slate-300 p-1" name="senha" id="senha" value="" placeholder="novo e-mail">
                </div>
                <div class="flex flex-col">
                    <label for="">Confirme senha: </label>
                    <input type="password" class="border border-slate-300 p-1" name="conf-senha" id="conf-senha" placeholder="confirmar senha">
                </div>
                <div class="flex flex-col">
                    <label for="">Nova função</label>
                    <select name="funcao" id="funcao" class="border w-72 p-1 uppercase" id="">
                        <option value="gerente">gerente</option>
                        <option value="vendedor">vendedor</option>
                        <option value="administrador">administrador</option>
                        <option value="estoque">estoque</option>
                    </select>
                </div>
                <input class="py-1 px-2 bg-sky-500 text-white" type="submit" value="Enviar edição">
            </form>
        </div>
    </div>
@endsection