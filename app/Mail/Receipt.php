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
      $route == $this->passenger->ticket->route->fromPlace
      .'-' .$this->passenger->ticket->route->toPlace;

        return $this->view('emails.receipt')
        ->with('name', $this->passenger->name)
        ->with('route', $route)
        ->with('issuedBy', $this->passenger->ticket->issuedBy)
        ->with('issuedOn', $this->passenger->ticket->created_at)
        ->with('bookedDate', $this->passenger->ticket->bookedDate);
    }
}
