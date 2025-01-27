<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Services\CartService;
use Session;


use App\Http\Services\UserService;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('isadmin');
    }

    public function index()
    {
        return view('admin.users.index');
    }

    public function loadUsers(Request $request)
    {
        $filter = $request->input('filter');
        return UserService::loadUserData($filter);
    }

    public function destroy($id)
    {
        return UserService::deleteUser($id);
    }

    
}
