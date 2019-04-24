@extends('layouts.appEmail')
@section('content')
<table class="main">
    <tr>
        <td class="wrapper">
            <table border="0" cellpadding="0" cellspacing="0">
                <tr>
                    <td>
                        <p>Thanks for choosing us, <b>{{$user->name}}</b></p>
                        <p>You are receiving this email because your ticket has been processed.</p>
                        <p>
                          Your ticket summary : <br>
                          <b>Route: </b> {{$user->name}} <br>
                          <b>Travelling Date : </b> {{$user->name}} <br>
                          <b>Seat(s) Number : </b> {{$user->name}} <br>
                          <b>Issued By : </b> {{$user->name}} <br>
                          <b>Issued On : </b> {{$user->name}}
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
