@extends('layouts.main')

@section("content")
<div class="flex flex-row flex-wrap justify-center p-8 border shadow">
    <div class="w-96 p-8">
      <div class="form-card">
          <div class="form">
            <h1 class="text-lg font-bold text-slate-800 text-center uppercase">Cadastrar usuario</h1>
            <form action="{{ route('store.user') }}" method="post">
                @csrf
              <div class="input flex flex-col p-2">
                <label class="text-gray-700 uppercase">nome:</label>
                <input class="border w-72 p-1" placeholder="nome" name="name" type="text">
              </div>
              <div class="input flex flex-col p-2">
                <label class="text-gray-700 uppercase">nome de usuario(email):</label>
                <input class="border w-72 p-1" placeholder="nome usuario" name="email" type="text">
              </div>
              <div class="input flex flex-col p-2">
                <label class="text-gray-700 uppercase">Senha:</label>
                <input class="border w-72 p-1" type="password" name="password" placeholder="senha">
              </div>
              <div class="input flex flex-col p-2">
                <label class="text-gray-700 uppercase">Departamento:</label>
                <input class="border w-72 p-1" type="text" name="departamento" placeholder="Financeiro">
              </div>
              <div class="input flex mt-4 p-2">
                <input class="border w-72 bg-black text-white p-2" type="submit" value="Cadastra">
              </div>
            </form>
          </div>
      </div>
    </div>
    <div class="w-96 p-8 flex items-center">
      <img src="/img/logo.png" alt="">
    </div>
  </div>
@endsection