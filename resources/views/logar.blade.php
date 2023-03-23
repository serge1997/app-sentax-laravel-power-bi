@vite('resources/css/app.css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="/js/jquery-min-3-6-3.js"></script>
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
                    <input class="border p-1" placeholder="email" name="email" type="text">
                  </div>
                  <div class="input flex flex-col p-2">
                    <label class="text-gray-700 uppercase">Senha:</label>
                    <div class="relative w-full text-right">
                      <input class="border p-1 w-full" type="password" name="password" id="loginPassword" placeholder="senha">
                      <i id="icon" class="fa-solid fa-eye text-slate-400 translate-y-[-1.6rem] translate-x-[-0.5rem]"></i>
                      
                    </div>
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
  <script src="/js/script.js"></script>