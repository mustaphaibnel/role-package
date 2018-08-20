<?php
/**
 * Created by PhpStorm.
 * User: STEEF
 * Date: 20/08/2018
 * Time: 16:34
 */

namespace MustaphaIbnel\Role\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use MustaphaIbnel\Role\Models\Role;
class ContactController extends Controller
{
    public function index()
    {
        $roles=Role::all();
        return view('roles::roles')->with(['roles'=>$roles]);
    }
    public function store(Request $request)
    {
        Role::create($request->all());
        return redirect(route('roles.index'));
    }
}