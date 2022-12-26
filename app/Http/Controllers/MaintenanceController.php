<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{User, Maintenance, Vehicle};

class MaintenanceController extends Controller
{
    protected $maintenance;
    protected $vehicle;
    protected $user;

    public function __construct(Maintenance $maintenance, Vehicle $vehicle, User $user)
    {
        $this->user = $user;
        $this->vehicle = $vehicle;
        $this->maintenance = $maintenance;
    }

    public function index()
    {
        $maintenances = $this->maintenance->with('vehicle')->get()->where('vehicle.user_id', auth()->user()->id);
        return view('users.maintenances.index', compact('maintenances'), ['user' => auth()->user()]);
    }

    public function create()
    {
        $vehicle = $this->vehicle->get()->where('user_id', auth()->user()->id);
        return view('users.maintenances.create', compact('vehicle'), ['user' => auth()->user()]);
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $this->maintenance->create($data);
        return redirect()->route('maintenances.index');
    }
    public function edit($id)
    {
        $maintenance = $this->maintenance->find($id);
        $vehicle = $this->vehicle->get()->where('user_id', auth()->user()->id);
        return view('users.maintenances.edit', compact('maintenance', 'vehicle'), ['user' => auth()->user()]);
    }
    public function update(Request $request, $id)
    {
        $data = $request->all();
        $maintenance = $this->maintenance->find($id);
        $maintenance->update($data);
        return redirect()->route('maintenances.index');
    }

    public function show()
    {
       return $this->maintenance->with('vehicle')->get();
    }
    public function destroy ($id)
    {
        $maintenance = $this->maintenance->find($id);
        $maintenance->delete();
        return redirect()->route('maintenances.index');
    }
}
