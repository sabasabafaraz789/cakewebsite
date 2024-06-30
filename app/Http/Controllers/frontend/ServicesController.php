<?php
namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\frontend\ServicesModel;
use App\Models\frontend\MenuItem;

class ServicesController extends Controller
{
    /**
     * Display the services page.
     */
    public function index()
    {
        // Fetch all menu items from the database
        $menuItems = MenuItem::all();

        // Pass the menu items to the view
        return view('frontend.services', compact('menuItems'));
    }

    /**
     * Handle the form submission.
     */
    public function submitMessage(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'phonenumber' => 'required|numeric',
            'flavours' => 'required',
            'youraddress' => 'required'
        ]);

        $services = new ServicesModel();
        $services->name = $request->name;
        $services->phonenumber = $request->phonenumber;
        $services->flavours = $request->flavours;
        $services->youraddress = $request->youraddress;
        $services->save();

        return redirect()->route('services')->with('success', 'Thanks for your contact. We\'ll contact you ASAP!');
    }
}
