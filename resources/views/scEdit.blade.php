@extends('adminDashboard')
<style>
    form {
        position: relative;
        padding-top: 104px;
    }

    .h3 {
        margin: 50px 0;
    }

    .sc-input {
        width: 50%;
        padding: 0.5rem 1rem;
        font-size: 0.9375rem;
    }

    .text-danger {
        color: red;
    }
</style>
@section('content')
<form action="{{route('serviceConsumer.update',$serviceConsumer->id)}}" method="post">
    @csrf
    @method('PUT')
    <table align="center">
        <h3 class="h3" align="center">Edit Details</h3>
        <tr>
            <td>FirstName:</td>
            <td><input type="text" name="uscfnm" class="sc-input" value='{{$serviceConsumer->firstName}}'></td>
            <td><span class="text-danger">
                    @error('uscfnm')
                    {{$message}}
                    @enderror
                </span>
            </td>
        </tr>
        <tr>
            <td>LastName:</td>
            <td><input type="text" name="usclnm" class="sc-input" value='{{$serviceConsumer->lastName}}'></td>
            <td>
                <span class="text-danger">
                    @error('usclnm')
                    {{$message}}
                    @enderror
                </span>
            </td>
        </tr>
        <tr>
            <td>Gender:</td>
            <!-- <td><input type="text" name="uscg" class="sc-input" require value='{{$serviceConsumer->gender}}'></td> -->
            <td>
                <select name="uscg" class="sc-input">
                    <option>select..</option>
                    <option value="female">Female</option>
                    <option value="male">Male</option>
                    <option value="other">Other</option>
                </select>
            </td>
            <td>
                <span class="text-danger">
                    @error('uscg')
                        {{$message}}
                    @enderror
                </span>
            </td>
        </tr>
        <tr>
            <td>PhoneNo:</td>
            <td><input type="text" name="uscpn" class="sc-input" value='{{$serviceConsumer->phoneNo}}'></td>
            <td><span class="text-danger">
                    @error('uscpn')
                    {{$message}}
                    @enderror
                </span>
            </td>
        </tr>
        <tr>
            <td>Email:</td>
            <td><input type="text" name="usce" class="sc-input" value='{{$serviceConsumer->email}}'></td>
            <td><span class="text-danger">
                    @error('usce')
                    {{$message}}
                    @enderror
                </span>
            </td>
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
            <td>Pincode:</td>
            <td><input type="text" name="uscpc" class="sc-input" require value='{{$serviceConsumer->pincode}}'></td>
        </tr>
        <tr>
            <td colspan="2" style="text-align:center"><button class="update-btn">Update</button></td>
        </tr>
    </table>
</form>
@stop
