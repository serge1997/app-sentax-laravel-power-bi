<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Relatorio;
use Illuminate\Support\Facades\DB;

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

        try{

            $emailUnique = User::where('email', $user->email)->first();

            if($emailUnique){
                return redirect()->route('cadastra')
                    ->with('err', "O e-email já existe no sistema");
            }
            $user->save();

        }catch(\Exception $e){

            return redirect()->route('cadastra')
                ->with("err", "O usuario não pode ser cadastrado");
        }
        

       return redirect()->route("cadastra")->with("success", "Cadastro realizado com succeso");
        
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
                return redirect()->intended("inicio");

            }else{
    
                return redirect()->route("logar")->with("err", "Usuario ou senha incoreto");
            }
            
        }

        return view("logar");
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->route("logar");
    }

    public function getkimberly(Request $request)
    {
        $iduser = $request->iduser;
        //$relatorio = Relatorio::WHERE("usuario_id", $iduser)->get();
        $relatorio = Relatorio::select('kimberly')->where('usuario_id', $iduser)->get();
        

        foreach($relatorio as $kimberly){

            $kimberly->kimberly;
        }

        echo $kimberly->kimberly;
    }

    public function getquimicos(Request $request)
    {
        $iduser = $request->iduser;

        $relatorio = Relatorio::select('quimicos')->where('usuario_id', $iduser)->get();

        foreach($relatorio as $quimicos){
            $quimicos->quimicos;
        }

        echo $quimicos->quimicos;
    }

    public function getrubbermaid(Request $request)
    {
        $iduser = $request->iduser;
       
        $relatorio = Relatorio::select('rubbermaid')->where('usuario_id', $iduser)
            ->get();

        foreach($relatorio as $rubbermaid){
            $rubbermaid->rubbermaid;
        }

        echo $rubbermaid->rubbermaid;
    }


    public function getoutros(Request $request)
    {
        $iduser = $request->iduser;

        $relatorio = Relatorio::select('outros')->where('usuario_id', $iduser);

        foreach($relatorio as $outros){
            $outros->outros;
        }

        echo $outros->outros;
    }

    public function getestoque(Request $request)
    {
        $iduser = $request->iduser;

        $relatorio = Relatorio::select('estoque')
            ->where('usuario_id', $iduser)
            ->get();

        foreach($relatorio as $estoque){
            $estoque->estoque;
        }

        echo $estoque->estoque;
    }

    public function acesso()
    {
        $data = [];

        $users = User::all();
        
        $data['users'] = $users;

        return view('acesso', $data);
    }

    public function destroy($id)
    {
        $iddelete = User::find($id);

        $delete = User::where('id', $id)
            ->delete();

        return redirect()->route('acesso');
        
    }

    public function confirmDelete(Request $request)
    {
        $idusuario = $request->idusuario;
        $user = User::where('id', $idusuario)->get();
        $data['user'] = $user;

       return view('acesso.out', $data);
        
    }

    public function edit($id)
    {
        $iduser = User::find($id);
        
        $edituser = User::where('id', $id)
            ->get();

        $data['id'] = $iduser;
        $data['user'] = $edituser;

        return view('acesso.editar', $data);
    }

    public function update(Request $request)
    {

        $id = $request->id;
        $email = $request->email;
        $password = \bcrypt($request->password);
        $funcao = $request->funcao;

        
        $update = DB::table('users')
            ->where('id', $id)
            ->update([
                'email'=> $email,
                'password'=> $password,
                'funcao'=> $funcao
            ]);
        
        return "Edição realizado com sucesso";
    }
    
}
