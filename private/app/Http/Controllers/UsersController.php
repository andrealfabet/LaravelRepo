<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index(){
    	$users = [
			'0' => [
				'first' => 'andre',
				'last' => 'alfa',
				'location' => 'Indonesia'
			],
			'1' => [
				'first' => 'alfa',
				'last' => 'raffif',
				'location' => 'Indonesia'
			]
		];
	    return view('admin.users.index', compact('users'));
    }

    public function create(){
    	return view('admin.users.create');
    }

    public function store(Request $request){
    	return $request->all();
    }
}
