<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Profile;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function index(Request $request)
    {
        $query = Profile::with(['user']);
        $doctors = $query->get();
        return response()->json([
            'success' => true,
            'result' => $doctors
        ]);
    }
}
