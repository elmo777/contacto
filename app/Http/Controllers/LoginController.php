<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Validator;
use Auth;
use Hash;
use Spatie\Permission\Models\Role;
use Laravel\Ui\Presets\React;

class LoginController extends Controller
{

    public function Registrousuario(){
        return view ('register');


    }
    public function Crearusuario(Request $request)
    {    
        $resultado = Validator::make($request->all(),[
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        // if ($resultado->fails()) {
        //     return redirect()
        //              ->back()
        //          ->withErrors($resultado)
        //                 ->withInput();
        // }

        $dataContacto = [
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'password' => Hash::make($request->get('password'))

        ];

        $user = User::create($dataContacto);
        $user -> assignRole('User');
        return redirect('register');

       
    }

     
            public function check(Request $request){

                    $data['email'] = $request->get('email');
                    $data['password'] = ($request->get('password'));
            
                   // dd($data);
            
                    if (Auth::attempt( $data )) {

                        $request->session()->regenerate();

                        return redirect()->intended('index');
                        

                    }             
                    return back()
                            ->withErrors([
                                'email' => 'The provided credentials do not match our records.',
                            ])
                            ->onlyInput('email');
                } 
            
            
                public function sacar(Request $request){
                    Auth::logout();
                    $request->session()->invalidate();
                    $request->session()->regenerateToken();
                    return redirect()->route('login');

                }
}


