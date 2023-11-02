<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Typology;
use App\Models\Profile;

class TypologyController extends Controller
{
    public function index()
    {
        $query = Typology::with('user');
        $typologies = $query->get();
        return response()->json([
            'success' => true,
            'results' => $typologies
        ]);
    }
}
