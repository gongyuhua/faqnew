<?php
namespace App\Http\Controllers;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $user = Auth::user();
        $questions = $user->questions()->paginate(6);


        $archives = User::select('email as email1' )
            ->orderByDesc('created_at')->limit(10)->get();

//       return view('home')->with('questions', $questions, 'archives',$archives);
        return view('home', compact('questions','archives'));
    }
}