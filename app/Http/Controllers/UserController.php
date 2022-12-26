<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateUserFormRequest;
use App\Models\{User, Maintenance};
use Illuminate\Contracts\Cache\Store;
use Illuminate\Http\Request;


class UserController extends Controller
{
    protected $user;
    protected $maintenance;

    public function __construct(User $user, Maintenance $maintenance)
    {
        $this->user = $user;
    }
    public function index()
    {
        return view('users.index',['user' =>auth()->user()],['maintenances'=> Maintenance::all()]);
    }
    public function create()
    {
        return view('users.create');
    }
    public function store(StoreUpdateUserFormRequest $request)
    {
        $data = $request->all();
        $data['password'] = bcrypt($data['password']);

        User::create($data);
        return redirect()->route('users.index');
    }
}
