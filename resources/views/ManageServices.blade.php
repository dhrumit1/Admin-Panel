@extends('adminDashboard')
@section('content')
<div class="home-content">
    <!-- <p>Services:</p> -->
    <div class="sales-boxes">
        <div class="recent-sales box">
            <div class="title">
                Services:
                <!-- <div class="button">
                  <a href="/sevices/create">Add Service Consumer</a>
                </div> -->
            </div>
            <div class="sales-details">
                <table>
                    <tr>
                        <th>No</th>
                        <th>service_name</th>
                        <th>service_img</th>
                        <th>description</th>
                        <th>Action</th>
                    </tr>
                    @foreach($tabledata as $data)
                    <tr>
                        <td>{{$data->id}}</td>
                        <td>{{$data->service_name}}</td>
                        <!-- <td>{{$data->service_img}}</td> -->
                        <td><img src="{{asset('storage/images/'.$data->service_img)}}" alt=""></td>
                        <td>{{$data->description}}</td>
                        <td colspan=2>
                            <a href="{{route('service.edit',$data->id)}}">
                                <button class="update-btn">Edit</button>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
    @stop
