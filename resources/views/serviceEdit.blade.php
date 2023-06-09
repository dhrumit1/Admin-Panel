@extends('adminDashboard')
<style>
    form{
        position: relative;
        padding-top: 104px;
    }

    .h3{
        margin: 50px 0;
    }

    .ser-input{
        width: 50%;
        padding: 0.5rem 1rem;
        font-size: 0.9375rem;
    }
</style>
@section('content')
<form action="{{route('service.update',$service->id)}}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <table align="center">
        <h3 class="h3" align="center">Edit Service Details</h3>
        <tr>
            <td>service_name:</td>
            <td><input type="text" name="usnm" class="ser-input" require value='{{$service->service_name}}'></td>
        </tr>
        <tr>
            <td>service_img:</td>
            <td><input type="file" name="image" class="ser-input" require value='{{$service->service_img}}'></td>
        </tr>
        <tr>
            <td>description:</td>
            <td><input type="text" name="usdes" class="ser-input" require value='{{$service->description}}'></td>
        </tr>
        <tr>
            <td colspan="2" style="text-align:center"><button class="update-btn">Update</button></td>
        </tr>
    </table>
</form>
@stop
