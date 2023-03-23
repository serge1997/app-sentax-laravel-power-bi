@extends('layouts.main')

@section('content')

    <div class="w-full flex justify-center">
        <div class="w-11/12 m-auto">
            <h1 class="text-center p-8 text-xl font-bold">Controle de acesso</h1>
            <table class="table-auto border m-auto w-full">
                <thead>
                    <tr>
                        <th class="p-2 border border-slate-300 bg-gray-200 capitalize">id</th>
                        <th class="p-2 border border-slate-300 bg-gray-200 capitalize">nome</th>
                        <th class="p-2 border border-slate-300 bg-gray-200 capitalize">e-mail</th>
                        <th class="p-2 border border-slate-300 bg-gray-200 capitalize">funcao</th>
                        <th class="p-2 border border-slate-300 bg-gray-200 capitalize">ação</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td class="p-2 text-center bg-gray-100 border border-slate-300">
                                {{ $user->id }}
                            </td>
                            <td class="p-2 text-center bg-gray-100 border border-slate-300">
                                {{ $user->name }}
                            </td>
                            <td class="p-2 text-center bg-gray-100 border border-slate-300">
                                {{ $user->email }}
                            </td>
                            <td class="p-2 text-center bg-gray-100 border border-slate-300">
                                {{ $user->funcao }}
                            </td>
                            <td class="p-2 text-center space-x-2 bg-gray-100 border border-slate-300">
                                <a href="{{ route('edit', [$user->id]) }}">
                                    <i class="fa-solid fa-pen-to-square"></i>
                                </a>
                                <a class="text-red-600 idModal" href="#ex1" rel="modal:open" id="td-id" data-id="{{$user->id}}">
                                    <i class="fa-solid fa-trash"></i>
                                </a>
                                <a href="{{ route('cadastra') }}">
                                    <i class="fa-solid fa-user-plus text-green-700"></i>
                                </a>
                            </td>
                            <div id="ex1" class="modal p-8">
                                <p class="flex items-center">Deseja apagar o usuario<span class="font-bold text-sm nome-user ml-2">{{ $user->name }}</span>?</p>
                                <div class="h-8 mt-4">
                                    <a href="#" class="py-1 px-2 bg-red-500 mt-4 text-white rounded" rel="modal:close">Cancelar</a>
                                    <a href="{{ route('destroy', $user->id) }}" class="py-1 linkss px-2 bg-green-700 text-white rounded">Confirmar</a>
                                </div>
                            </div>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    

@endsection