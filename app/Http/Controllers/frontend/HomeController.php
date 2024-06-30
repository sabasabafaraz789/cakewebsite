<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\frontend\Menu; // Import the Menu model

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $menus = Menu::all(); // Fetch all menu items from the database

        return view('frontend.index', compact('menus'));
    }



    /**
     * Handle the form submission.
     */
    public function submitMessage1(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'phonenumber' => 'required|numeric',
            'flavours' => 'required',
            'youraddress' => 'required'
        ]);

        $home = new homeModel();
        $home->name = $request->name;
        $home->phonenumber = $request->phonenumber;
        $home->flavours = $request->flavours;
        $home->youraddress = $request->youraddress;
        $home->save();

        return redirect()->route('home')->with('success', 'Thanks for your contact. We\'ll contact you ASAP!');
    }
}
