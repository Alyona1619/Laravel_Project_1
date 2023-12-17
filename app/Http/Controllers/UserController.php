<?php
#task Laravel: working with data
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Resources\UserResource;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('users.index', compact('users'));
    }

    public function show($id)
    {
        $user = User::findOrFail($id);
        return view('users.show', compact('user'));
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(Request $request)
    {
        $validatedUserData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users|max:255',
            'password' => 'required|string|min:6',
        ]);
    
        $user = User::create($validatedUserData);
    
        $validatedData = $request->validate([
            'age' => 'required|integer',
            'profession' => 'required|string|max:255',
        ]);
    
        $user->data()->create($validatedData);
    
        //dd($validatedUserData, $validatedData, $user);
    
        return redirect()->route('users.show', $user->id)->with('success', 'User created successfully!');
    }

    public function edit($id)
    {
        $user = User::with('data')->findOrFail($id);
        return view('users.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $validatedUserData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email,' . $id,
            'password' => 'required|string|min:6',
        ]);

        $user = User::findOrFail($id);
        $user->update($validatedUserData);
    
        $validatedData = $request->validate([
            'age' => 'required|integer',
            'profession' => 'required|string|max:255',
        ]);

        if ($user->data) {
            $user->data->update($validatedData);
        } else {
            $user->data()->create($validatedData);
        }

        return redirect()->route('users.show', $user->id)->with('success', 'User updated successfully!');
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->route('users.index');
    }

    public function showApi($id)
    {
        $user = User::with('data')->findOrFail($id);
        return new UserResource($user);
    }
}

