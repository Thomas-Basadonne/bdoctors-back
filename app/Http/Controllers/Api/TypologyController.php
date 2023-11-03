<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Typology;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Support\Facades\DB;


class TypologyController extends Controller
{
    public function index(Request $request)
    {
        if (!empty($request->all()['id'])) {
            $array = $request->all()['id'];
            $userIds = [];
            foreach ($array as $a) {
                $userIds[] = DB::table('user_typology')->select('user_id')->where('typology_id', $a)->get();
            }
            foreach ($userIds as $type) {
                foreach ($type as $cc) {
                    $el[] = $cc->user_id;
                }
            }
            $countEl = array_count_values($el);
            $userArr = array_keys($countEl, count($array));
            $data = User::with('typologies')->whereIn('id', $userArr)->get();
        } else {
            $data = User::with('typologies')->get();
        }
        if (count($data) > 0) {
            return response()->json([
                'success' => true,
                'results' => $data
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'results' => 'il dottore specificato non esiste',
            ]);
        }
    }
}


/*  */


$query = Typology::with('user');
$typologies = $query->get();
return response()->json([
    'success' => true,
    'results' => $typologies
]);
