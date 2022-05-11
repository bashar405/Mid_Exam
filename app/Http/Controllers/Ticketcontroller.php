<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Ticket;
class TicketController extends Controller
{
    public function index()
    {
      $tickets = Ticket::all();
      return view('my_tickets', compact('tickets'));
    }
    public function insert(request $request)
    {
      $ticket = new Ticket();
      $ticket->category = $request->category;
      $ticket->title = $request->title;
      $ticket->priority = $request->priority;
      $ticket->messege = $request->messege;
      $ticket->updated_at = now();


      $ticket->save();
      return (view('new_ticket'));


    }
    public function show($id){

        $tickets = Ticket::find($id);
        return view('show_ticket',compact('tickets'));
    }

}
