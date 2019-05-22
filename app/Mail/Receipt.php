<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Receipt extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct($passenger)
    {
      $this->passenger = $passenger;
    }

    public function build()
    {
        return $this->view('emails.receipt')
        ->with('name', $this->passenger->name)
        ->with('issuedBy', $this->passenger->ticket->issuedBy)
        ->with('issuedOn', $this->passenger->ticket->created_at)
        ->with('bookedDate', $this->passenger->ticket->bookedDate)
        ->with('toPlace', $this->passenger->ticket->route->toPlace)
        ->with('departure', $this->passenger->ticket->route->departure_time)
        ->with('fromPlace', $this->passenger->ticket->route->fromPlace);
    }
}
