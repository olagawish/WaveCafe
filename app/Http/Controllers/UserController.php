<?php
namespace App\Http\Controllers;

//use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $title = 'Users';
        $users = User::all();
        return view('dashboard.users', compact('users', 'title'));
    }

    public function create()
    {
        $title = 'Add User';
        return view('dashboard.addUser', compact('title'));
    }

    public function store(Request $request)
    {
        $messages = $this->errMsg();
        $data =  $request->validate([
            'name' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:users',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            //'active' => 'nullable|boolean',
        ], $messages);

        $data['is_active'] = $request->has('is_active');

        User::create([
            'name' => $data->input('name'),
            'username' => $data->input('username'),
            'email' => $data->input('email'),
            'password' => Hash::make($data['password']),
            'is_active' => $data['is_active'],
            ]);

        return redirect()->route('dashboard.users')->with('success', 'User created successfully');
    }

    public function edit($id)
    {
        $title = 'Edit User';
        $user = User::findOrFail($id);
        return view('dashboard.editUser', compact('user', 'title'));
    }

    public function update(Request $request, string $id)
    {
        $messages = $this->errMsg();
        $user = User::findOrFail($id);
    
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:users,username,'.$user->id,
            'email' => 'required|string|email|max:255|unique:users,email,'.$user->id,
            'password' => 'nullable|string|min:8',
        ], $messages);
    
        // Only update the password if it's provided in the request
        if ($request->filled('password')) {
            $data['password'] = Hash::make($data['password']);
        } else {
            unset($data['password']); // Remove password from data if not provided
        }
    
        // Update is_active based on request input
        $data['is_active'] = $request->has('is_active');
    
        $user->update($data);
    
        return redirect()->route('dashboard.users')->with('success', 'User updated successfully.');
    }

    public function errMsg()
    {
        return [
            'name.required' => "The user's name is required.",
            'username.required' => "The username is required.",
            'username.unique' => "The username has already been taken.",
            'email.required' => "The email address is required.",
            'email.email' => "The email must be a valid email address.",
            'email.unique' => "The email address has already been taken.",
            'password.required' => "The password is required.",
        ];
    }

    //public function show($id)
   // {
   //     $user = User::findOrFail($id);
    //    return view('users.show', compact('user'));
  // }

    //public function destroy($id)
//{
    //    $user = User::findOrFail($id);
    //    $user->delete();
    //    return redirect()->route('users.index')->with('success', 'User deleted successfully');
   // }

}