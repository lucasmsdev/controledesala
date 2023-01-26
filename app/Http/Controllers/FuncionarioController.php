<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
session_start();

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class FuncionarioController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function getTipo($alert = null)
    {
        
        switch ($alert) {
            case 'success':
                $tipos = DB::select('select * from tbl_tipo_funcionario');
                return view('cadastro')->with(['tipo_funcionario'=>$tipos,'alert'=>'success']);
               
                break;
            
            default:
           
            $tipos = DB::select('select * from tbl_tipo_funcionario');
            return view('cadastro')->with('tipo_funcionario',$tipos);   
                break;
        }
        

    }
    public function addFuncionario()
    {
        $data = [
            'nome'=> request('nome'),
            'email'=> request('email'),
            'senha' => md5(request('senha')),
            'nif' => request('nif'),
            'cod_barra' => request('cod_barra'),
            'tipo_funcionario' => request('tipo_funcionario'),
            'cod_rfid' => request('cod_rfid')
    
        ];
        
        DB::insert('insert into tbl_funcionario  values (?,?,?,?,?,?,?,?)',[$data['nif'],$data['nome'],$data['email'],$data['senha'],$data['cod_barra'],$data['cod_rfid'],1,$data['tipo_funcionario']]);
    
        return $this->getTipo('success');
    }

    public function loginFuncionario()
    {
        $senha = md5(request('senha'));
        $nif = request('nif');
     
        $validacao =  DB::select('SELECT COUNT(*) AS retorno FROM tbl_funcionario WHERE pk_nif_funcionario = ? AND senha=?',[$nif,$senha]);
        if($validacao[0]->retorno == 1){
        
                $_SESSION['login'] = true;
           
           
           return redirect()->route('home');
        }else{
        
            return view('login')->with('alert','Senha ou Nif incorretos!');
        }
    }
    public function home()
    {
        if (isset($_GET['sair'])) {
            session_destroy();
        }
        if (isset($_SESSION['login'])) {
           return view('home');
        }else {
            return redirect()->route('login')->with('alert','Primeiro Faça Seu Login!');
        }
    }
    public function index()
    {
        if (isset($_SESSION['login'])) {
            return redirect()->route('home');
         }else {
             return redirect()->route('login');
         }
    }
    public function login()
    {
        if (isset($_SESSION['login'])) {
            return redirect()->route('home');
         }else {
             return view('login');
         }
    }
}
