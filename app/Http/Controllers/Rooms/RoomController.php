<?php

namespace App\Http\Controllers\Rooms;

use App\Http\Controllers\Controller;
use App\Models\Hotel;
use App\Models\Location;
use App\Models\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function create(){

        $locations = Location::get();
        return view('rooms.create', compact('locations'));

    }

    public function getHotels(Request $request){
        $hotels = Hotel::where('location_id', $request->location_id)->get();
        return response()->json([
            'hotels' => $hotels
        ]);
    }

    public function getRoomTypes(Request $request){
        $hotels = Hotel::with('roomTypes')->find($request->hotel_id);
        return response()->json([
            'roomTypes' => $hotels->roomTypes
        ]);
    }

    public function store(Request $request){

        Room::create([
            'hotel_id' => $request->hotel,
            'room_type_id' => $request->room_type,
            'name' => $request->name,
        ]);
        return redirect()->route('room.create')->withSuccess('Room created successfully!');

    }
}
