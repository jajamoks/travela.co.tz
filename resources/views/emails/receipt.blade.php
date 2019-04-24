@extends('layouts.appEmail')
@section('content')
<table class="main">
    <tr>
        <td class="wrapper">
            <table border="0" cellpadding="0" cellspacing="0">
                <tr>
                    <td>
                        <p>Thanks for choosing us, <b>{{$name}}</b></p>
                        <p>You are receiving this email because your ticket has been processed.</p>
                        <p>
                          Your ticket summary,  <br>
                          <b>Route: </b> {{$fromPlace}} - {{$toPlace}} <br>
                          <b>Travelling Date :</b> {{$bookedDate}} <br>
                          <b>Seat(s) Number : </b> 40 <br>
                          <b>Issued By : </b> {{$issuedBy}} <br>
                          <b>Issued On :</b> {{$issuedOn}}
                        </p>
                        <p>We hope you will enjoy your journey.</p>
                        <p>Safe Travel!</p>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>
@endsection
