<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Visitor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $visitorDay = Visitor::whereDate('created_at', date('Y-m-d'))->count();
        $visitorMonth = Visitor::whereMonth('created_at', date('m'))->count();
        return view('admin.index')->with(['visitorDay' => $visitorDay, 'visitorMonth' => $visitorMonth]);
    }
}
