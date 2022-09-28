<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ShowController extends Controller
{
	public function index(){
		$datos['users'] = User::paginate(5);
    	return view('auth.show', $datos);
    }

    public function destroy($id){
    	User::destroy($id);

    	return redirect()->to('/consulta');
    }
    public function edit($id){
    	$user = User::findOrFail($id);
    	return view('auth.edit', compact('user'));
    }
    public function update(Request $request, $id){
    	$datosUsuario = request()->except(['_method','remember_token', 'email_verified_at', '_token' , 'password_confirmation', 'password']);
    	User::where('id','=',$id)->update($datosUsuario);

    	return redirect()->to('/consulta');
    }
}
