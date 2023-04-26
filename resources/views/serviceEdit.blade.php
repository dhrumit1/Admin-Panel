@extends('adminDashboard')
<style>
    form {
        position: relative;
        padding-top: 104px;
    }

    .h3 {
        margin: 50px 0;
    }

    .ser-input {
        width: 50%;
        padding: 0.5rem 1rem;
        font-size: 0.9375rem;
    }

    .text-danger {
        color: red;
    }

    .text-green {
        background-color: green;
        color: #ffffff;
        border-radius: 10px;
        text-align: center;
    }
</style>
@section('content')
<form action="{{route('service.update',$service->id)}}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <table align="center">
        <h3 class="h3" align="center">Edit Service Details</h3>
        @if(session()->has('sucess'))
        <div class="text-green">
            {{session()->get('sucess')}}
        </div>
        @endif
        <tr>
            <td>service_name:</td>
            <td><input type="text" name="usnm" class="ser-input" require value='{{$service->service_name}}'></td>
            <td>
                <span class="text-danger">
                    @error('usnm')
                    {{$message}}
                    @enderror
                </span>
            </td>
        </tr>
        <tr>
            <td>service_img:</td>
            <td><input type="file" name="image" class="ser-input" require value='{{$service->service_img}}'></td>
            <td>
                <span class="text-danger">
                    @error('image')
                    {{$message}}
                    @enderror
                </span>
            </td>
        </tr>
        <tr>
            <td>description:</td>
            <td><input type="text" name="usdes" class="ser-input" require value='{{$service->description}}'></td>
            <td>
                <span class="text-danger">
                    @error('usdes')
                    {{$message}}
                    @enderror
                </span>
            </td>
        </tr>
        <tr>
            <td colspan="2" style="text-align:center"><button class="update-btn">Update</button></td>
        </tr>
    </table>
</form>
@stop
