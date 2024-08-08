<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class SearchController extends Controller
{
    public function search(Request $request)
    {
        $query = $request->input('query', '');

        $results = User::select('users.name', 'designations.name as designation', 'departments.name as department')
            ->join('designations', 'users.designation_id', '=', 'designations.id')
            ->join('departments', 'users.department_id', '=', 'departments.id')
            ->where('users.name', 'LIKE', "%$query%")
            ->orWhere('designations.name', 'LIKE', "%$query%")
            ->orWhere('departments.name', 'LIKE', "%$query%")
            ->get();

        return response()->json($results);
    }
}
