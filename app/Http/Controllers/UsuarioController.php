<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Relatorio;

class UsuarioController extends Controller
{
    
    public function index(Request $request)
    {

        return view("inicio");
    }

    public function cadastra(Request $request)
    {

        return view("cadastra");
    }


    public function store(Request $request)
    {

        $values = $request->all();

        $user = new User($values);
        $user->password = bcrypt($user->password);

        $user->save();

       return redirect()->route("cadastra");
        
    }

    public function logar(Request $request)
    {


        $email = $request->input("email");
        $password = $request->input("password");

        $credentials = ['email' => $email, 'password' => $password];

        if($request->isMethod("POST")){

            $validate = $request->validate([
                'email' => ['required'],
                'password' => ['required']
            ],
            [
                'email.required' => "Email obrigatorio",
                'password.required' => "Senha obrigatorio"
            ]);

            if(Auth::attempt($credentials)){

                $request->session()->regenerate();
                return redirect()->intended("/");

            }else{
    
                return redirect("logar")->with("err", "Usuario ou senha incoreto");
            }
            
        }

        return view("logar");
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->route("logar");
    }

    public function getbi(Request $request)
    {
        $iduser = $request->iduser;
        //$relatorio = Relatorio::WHERE("usuario_id", $iduser)->get();
        $relatorio = Relatorio::select('pbidois')->where('usuario_id', $iduser)->get();
        

        return view("relatorio", ['relatorio' => $relatorio]);
    }

    public function getbisecond(Request $request)
    {
        $iduser = $request->iduser;

        $relatorio = Relatorio::select('pb1um')->where('usuario_id', $iduser)->get();

        foreach($relatorio as $bi){
            $bi->pb1um;
        }
        echo $bi->pb1um;
    }

    public function getbithree(Request $request)
    {
        $iduser = $request->iduser;
       
        $relatorio = Relatorio::select('pbitres')->where('usuario_id', $iduser)
            ->get();

        foreach($relatorio as $bi){
            $bi->pbitres;
        }

        echo $bi->pbitres;
    }

    
}
