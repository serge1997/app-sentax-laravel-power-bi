@extends('layouts.main')

@section('content')
    <h1>Controle de acesso</h1>

    

    <div class="w-full flex justify-center">
        <div class="w-11/12 m-auto">
            <table class="table-auto border m-auto">
                <thead>
                    <tr>
                        <th class="p-2">id</th>
                        <th class="p-2">nome</th>
                        <th class="p-2">e-mail</th>
                        <th class="p-2">funcao</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td class="p-2">
                                {{ $user->id }}
                            </td>
                            <td class="p-2">
                                {{ $user->name }}
                            </td>
                            <td class="p-2">
                                {{ $user->email }}
                            </td>
                            <td class="p-2">
                                {{ $user->funcao }}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection