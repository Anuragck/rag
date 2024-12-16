<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use App\Models\LeadForm;
use App\Models\Location;
use App\Models\RoomType;
use Illuminate\Http\Request;

class LeadController extends Controller
{

    public function create()
    {

        return view('Leads.lead');
    }


    public function view()
    {
        $lead = LeadForm::get();
        return view('leads.leads-view', compact('lead'));
    }

    //Create request class and validate fields
    public function store(Request $request)
    {

        $latestLead = LeadForm::latest('id')->first();
        $uniqueNumber = 'RAG' . str_pad(optional($latestLead)->id + 1 ?? 1, 3, '0', STR_PAD_LEFT);



        LeadForm::create([
            'name' => $request->name,
            'phn' => $request->phn,
            'email' => $request->email,
            'peoples' => $request->peoples,
            'rooms' => $request->rooms,
            'bed' => $request->bed,
            'unique_number' => $uniqueNumber
        ]);
        return redirect()->route('dashboard');
    }

    public function location()
    {
        return view('Location.addlocations');
    }

    public function save(Request $request)
    {
        location::create([
            'location' => $request->location,
        ]);
        return redirect()->route('location.list');
    }

    public function viewLocation()
    {
        $location = Location::get();
        return view('Location.viewlocation', compact('location'));
    }
    public function hotel()
    {
        $locations = Location::get();
        $roomTypes = RoomType::get();

        return view('hotel', compact(['locations', 'roomTypes']));
    }

    public function saveHotel(Request $request)
    {
        $hotel = Hotel::create([
            'name' => $request->name,
            'location_id' => $request->location,
        ]);

        $hotel->roomTypes()->sync($request->room_type);


        return redirect()->route('dashboard');
    }
}
