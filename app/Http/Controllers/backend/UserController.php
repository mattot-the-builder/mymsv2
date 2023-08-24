<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\User;
use App\Exports\UsersExport;
use Maatwebsite\Excel\Facades\Excel;

class UserController extends Controller {

    //index function
    public function index(Request $request) {

        if ($request->search) {
            $users = User::where('name', 'like', '%' . $request->search . '%')
                ->orWhere('email', 'like', '%' . $request->search . '%')
                ->paginate(10);

            return view('backend.user.index', compact('users'));
        }

        $users = User::latest()->paginate(10);
        return view('backend.user.index', compact('users'));
    }

    // export function
    public function exportAsExcel() {
        return Excel::download(new UsersExport, 'users.xlsx');
    }

    //destroy function
    public function destroy($id) {
        $user = User::find($id);

        if ($user->delete()) {
            return redirect()->route('user.index')->with('success', 'User deleted successfully');
        } else {
            return redirect()->route('user.index')->with('error', 'User failed to delete');
        }
    }
}
