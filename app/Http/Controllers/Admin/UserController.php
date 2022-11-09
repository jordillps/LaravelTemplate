<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Models\User;
use App\Models\Role;
use Illuminate\Http\Request;

/**
 * Class UserController
 * @package App\Http\Controllers
 */
class UserController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $users = User::paginate();
        $users = User::all();

        return view('admin.users.index', compact('users'));
            // ->with('i', (request()->input('page', 1) - 1) * $users->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = new User();

        $roles = Role::all()->pluck('name', 'id');

        return view('admin.users.create', compact('user', 'roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserRequest $request)
    {
        //dd($request);
        // request()->validate(User::$rules);
        $request->validated();

        $user = User::create([
            'name' => $request->get('name'),
            'role_id' => $request->get('role_id'),
            'date_birth' => $request->get('date_birth'), 
            'email' => $request->get('email'),
            'password' => $request->get('password'),
        ]);

        flash()->overlay($user->name . ' created successfully', 'Create User');

        return redirect()->route('users.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  User $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        // $user = User::find($id);

        return view('admin.users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  User $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        // $user = User::find($id);
        $roles = Role::all()->pluck('name', 'id');

        return view('admin.users.edit', compact('user', 'roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  User $user
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserRequest $request, User $user)
    {
        // request()->validate(User::$rules);
        
        $request->validated();
        $user->update($request->all());


        flash()->overlay($user->name . ' updated successfully', 'Update User');

        return redirect()->route('users.index');
    }

    /**
     * @param User $user
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy(User $user)
    {
        $user->delete();

        flash()->overlay($user->name . ' deleted successfully', 'Delete User');

        return redirect()->route('users.index');
    }
}
