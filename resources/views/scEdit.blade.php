@extends('adminDashboard')
<style>
    form{
        position: relative;
        padding-top: 104px;
    }

    .h3{
        margin: 50px 0;
    }

    .sc-input{
        width: 50%;
        padding: 0.5rem 1rem;
        font-size: 0.9375rem;
    }
</style>
@section('content')
<form action="{{route('serviceConsumer.update',$serviceConsumer->id)}}" method="post">
    @csrf
    @method('PUT')
    <table align="center">
        <h3 class="h3" align="center">Edit Details</h3>
        <tr>
            <td>firstName:</td>
            <td><input type="text" name="uscfnm" class="sc-input" require value='{{$serviceConsumer->firstName}}'></td>
        </tr>
        <tr>
            <td>lastName:</td>
            <td><input type="text" name="usclnm" class="sc-input" require value='{{$serviceConsumer->lastName}}'></td>
        </tr>
        <tr>
            <td>gender:</td>
            <td><input type="text" name="uscg" class="sc-input" require value='{{$serviceConsumer->gender}}'></td>
        </tr>
        <tr>
            <td>phoneNo:</td>
            <td><input type="text" name="uscpn" class="sc-input" require value='{{$serviceConsumer->phoneNo}}'></td>
        </tr>
        <tr>
            <td>email:</td>
            <td><input type="text" name="usce" class="sc-input" require value='{{$serviceConsumer->email}}'></td>
        </tr>
        <tr>
            <td>Area:</td>
            <td><input type="text" name="usca" class="sc-input" require value='{{$serviceConsumer->Area}}'></td>
        </tr>
        <tr>
            <td>City:</td>
            <td><input type="text" name="uscC" class="sc-input" require value='{{$serviceConsumer->City}}'></td>
        </tr>
        <tr>
            <td>pincode:</td>
            <td><input type="text" name="uscpc" class="sc-input" require value='{{$serviceConsumer->pincode}}'></td>
        </tr>
        <tr>
            <td colspan="2" style="text-align:center"><button class="update-btn">Update</button></td>
        </tr>
    </table>
</form>
@stop
