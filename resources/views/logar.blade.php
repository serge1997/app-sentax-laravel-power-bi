@vite('resources/css/app.css')
<div class="min-h-screen flex justify-center items-center">
    <div class="flex flex-row flex-wrap justify-center p-8 border shadow">
        <div class="w-96 p-8">
          <div class="form-card">
              <div class="form">
                <h1 class="text-lg font-bold text-slate-800 text-center uppercase">Portal BI</h1>
                <div class="p-2 w-4/5">
                  @if($errors->any())
                    <ul class="flex flex-col">
                      @foreach ($errors->all() as $err )
                        <li class="text-red-500">*{{ $err }}</li>
                      @endforeach
                    </ul>
                  @endif
                  @if (session('err'))
                    <p class="text-red-500">* {{ session('err') }}</p> 
                  @endif
                </div>
                <form action="{{ route('logar') }}" method="post">
                    @csrf
                  <div class="input flex flex-col p-2">
                    <label class="text-gray-700 uppercase">nome de usuario:</label>
                    <input class="border w-72 p-1" placeholder="email" name="email" type="text">
                  </div>
                  <div class="input flex flex-col p-2">
                    <label class="text-gray-700 uppercase">Senha:</label>
                    <input class="border w-72 p-1" type="password" name="password" placeholder="senha">
                  </div>
                  <div class="input flex mt-4 p-2">
                    <input class="border w-72 bg-black text-white p-2" type="submit" value="Sign-up">
                  </div>
                </form>
              </div>
          </div>
        </div>
        <div class="w-96 p-8 flex items-center">
          <img src="/img/logo.png" alt="">
        </div>
      </div>
  </div>