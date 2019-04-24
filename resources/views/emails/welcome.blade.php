@extends('layouts.appEmail')
@section('content')
<table class="main">
    <tr>
        <td class="wrapper">
            <table border="0" cellpadding="0" cellspacing="0">
                <tr>
                    <td>
                        <p>Hi there, {{$user->name}}</p>
                        <p>You are receiving this email because you have been registered as an <b>{{$user->role->name}}</b>
                            to <b>Online Bus Ticket Booking</b>.</p>
                        <p>
                            Your temporary login credentials are <br>
                            Email : {{$user->email}} <br>
                            password : qazplm
                        </p>
                        <table border="0" cellpadding="0" cellspacing="0" class="btn btn-primary">
                            <tbody>
                                <tr>
                                    <td align="left">
                                        <table border="0" cellpadding="0" cellspacing="0">
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <a href="#" target="_blank">Log in</a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <p>If you think you are receiving this email by mistake you can just ignore
                            it, and we promise, we'll pretend it never happened.</p>
                        <p>Good luck!</p>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>
@endsection
