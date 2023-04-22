@extends('adminDashboard')
<style>
    form {
        position: relative;
        padding-top: 104px;
    }

    .h3 {
        margin: 50px 0;
    }

    .sp-input {
        width: 50%;
        padding: 0.5rem 1rem;
        font-size: 0.9375rem;
    }
</style>
@section('content')
<form action="{{route('serviceProvider.update',$serviceProvider->id)}}" method="post">
    @csrf
    @method('PUT')
    <table align="center">
        <h3 class="h3" align="center">Edit Details</h3>
        <tr>
            <td>FirstName:</td>
            <td><input type="text" name="uscfnm" class="sp-input" require value='{{$serviceProvider->firstName}}'></td>
        </tr>
        <tr>
            <td>LastName:</td>
            <td><input type="text" name="usclnm" class="sp-input" require value='{{$serviceProvider->lastName}}'></td>
        </tr>
        <tr>
            <td>Gender:</td>
            <!-- <td><input type="text" name="uscg" class="sp-input" require value='{{$serviceProvider->gender}}'></td> -->
            <td>
                <select name="uscg" class="sp-input">
                    <option>select..</option>
                    <option value="female">Female</option>
                    <option value="male">Male</option>
                    <option value="other">Other</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>PhoneNo:</td>
            <td><input type="text" name="uscpn" class="sp-input" require value='{{$serviceProvider->phoneNo}}'></td>
        </tr>
        <tr>
            <td>Email:</td>
            <td><input type="text" name="usce" class="sp-input" require value='{{$serviceProvider->email}}'></td>
        </tr>
        <tr>
            <td>Area:</td>
            <td><input type="text" name="usca" class="sp-input" require value='{{$serviceProvider->Area}}'></td>
        </tr>
        <tr>
            <td>City:</td>
            <td><input type="text" name="uscC" class="sp-input" require value='{{$serviceProvider->City}}'></td>
        </tr>
        <tr>
            <td>pincode:</td>
            <td><input type="text" name="uscpc" class="sp-input" require value='{{$serviceProvider->pincode}}'></td>
        </tr>
        <tr>
            <td colspan="2" style="text-align:center"><button class="update-btn">Update</button></td>
        </tr>
    </table>
</form>
@stop
