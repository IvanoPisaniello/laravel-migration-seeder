<?php



namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Train;

class TrainsController extends Controller
{
    public function index()
    {

        $trains = Train::whereDate('data_di_partenza', '>=', "2023-09-27")->get();

        return view('home', ['trains' => $trains]);
    }
}
