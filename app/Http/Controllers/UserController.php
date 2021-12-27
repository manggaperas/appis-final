<?php


namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\IndexUserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    public function index(IndexUserRequest $request)
    {
        $data = User::get();
        $headings = collect([
            'name' => 'Nama',
            'email' => 'Email',
        ]);
        return view('admin.users.index', compact('data', 'headings'));
    }

    public function create(Request $request)
    {
        return view('admin.users.create');
    }

    public function store(Request $request)
    {
        $user = new User;
        $user['name'] = $request->name;
        $user['email'] = $request->email;
        $user['password'] = $request->password;
        $role = Role::findById($request->get('role_id') ?? 'pegawai');
        $user->assignRole($role);

        $user->save();

        if ($user->save()) {
            return redirect()->route('user')->with('alert_success', 'Data User berhasil di tambah');
        }
    }

    public function show(Request $request, int $id)
    {
        return response()->json(User::findOrFail($id));
    }

    public function edit(Request $request, int $id)
    {
        $user = User::findOrFail($id);
        return view('admin.users.edit', ['user' => $user]);
    }

    public function update(Request $request, int $id)
    {
        $user = User::findOrFail($id);
        $newArmroll['name'] = $request->name;
        $newArmroll['email'] = $request->email;

        $user->password = !is_null($request->get('password')) ? bcrypt($request->get('password')) : $user->password;
        $role = Role::findById($request->get('role_id') ?? 'pegawai');
        $user->syncRoles($role);
        $user->update();

        if (!$user->update()) {
            return redirect()->back()->withInput()->with('alert_error', 'Gagal Ubah Data User');
        }

        return redirect()->route('user')->with('alert_success', 'Data User Berhasil Diubah!');
    }

    public function delete($id)
    {
        User::findOrFail($id)->delete();
        return redirect()->route('user')->with('alert_success', 'Data User berhasil di hapus');
    }
}
