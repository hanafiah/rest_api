<?php
namespace App\Http\Controllers;

use App\Participant;
use Illuminate\Http\Request;

class ParticipantController extends Controller
{

    public function showAllParticipants()
    {
        return response()->json(Participant::all());
    }

    public function showOneParticipant($id)
    {
        return response()->json(Participant::find($id));
    }

    public function create(Request $request)
    {
        $participant = Participant::create($request->all());

        return response()->json($participant, 201);
    }

    public function update($id, Request $request)
    {
        $participant = Participant::findOrFail($id);
        $participant->update($request->all());

        return response()->json($participant, 200);
    }

    public function delete($id)
    {
        Participant::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }
}