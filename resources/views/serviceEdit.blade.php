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
<form action="{{route('service.update',$service->id)}}" method="post">
    @csrf
    @method('PUT')
    <table align="center">
        <h3 class="h3" align="center">Edit Details</h3>
        <tr>
            <td>service_name:</td>
            <td><input type="text" name="usnm" require value='{{$service->service_name}}'></td>
        </tr>
        <tr>
            <td>service_img:</td>
            <td><input type="text" name="usimg" require value='{{$service->service_img}}'></td>
        </tr>
        <tr>
            <td>description:</td>
            <td><input type="text" name="usdes" require value='{{$service->description}}'></td>
        </tr>
        <tr>
            <td colspan="2" style="text-align:center"><button class="update-btn">Update</button></td>
        </tr>
    </table>
</form>
@stop
