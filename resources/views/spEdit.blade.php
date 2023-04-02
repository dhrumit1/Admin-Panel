@extends('adminDashboard')
<style>
    form{
        position: relative;
        padding-top: 104px;
    }

    .h3{
        margin: 50px 0;
    }
</style>
@section('content')
<form action="{{route('serviceProvider.update',$serviceProvider->id)}}" method="post">
    @csrf
    @method('PUT')
    <table align="center">
        <h3 class="h3" align="center">Edit Details</h3>
        <tr>
            <td>firstName:</td>
            <td><input type="text" name="uscfnm" require value='{{$serviceProvider->firstName}}'></td>
        </tr>
        <tr>
            <td>lastName:</td>
            <td><input type="text" name="usclnm" require value='{{$serviceProvider->lastName}}'></td>
        </tr>
        <tr>
            <td>gender:</td>
            <td><input type="text" name="uscg" require value='{{$serviceProvider->gender}}'></td>
        </tr>
        <tr>
            <td>phoneNo:</td>
            <td><input type="text" name="uscpn" require value='{{$serviceProvider->phoneNo}}'></td>
        </tr>
        <tr>
            <td>email:</td>
            <td><input type="text" name="usce" require value='{{$serviceProvider->email}}'></td>
        </tr>
        <tr>
            <td>Area:</td>
            <td><input type="text" name="usca" require value='{{$serviceProvider->Area}}'></td>
        </tr>
        <tr>
            <td>City:</td>
            <td><input type="text" name="uscC" require value='{{$serviceProvider->City}}'></td>
        </tr>
        <tr>
            <td>pincode:</td>
            <td><input type="text" name="uscpc" require value='{{$serviceProvider->pincode}}'></td>
        </tr>
        <tr>
            <td colspan="2" style="text-align:center"><button class="update-btn">Update</button></td>
        </tr>
    </table>
</form>
@stop
