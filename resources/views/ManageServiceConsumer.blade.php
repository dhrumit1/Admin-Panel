@extends('adminDashboard')
@section('content')
<div class="home-content">
    <div class="sales-boxes">
        <div class="recent-sales box">
            <div class="title">
                Service Consumer
                <div class="button">
                  <a href="/serviceConsumer/create">Add Service Consumer</a>
                </div>
            </div>
            <div class="sales-details">
                <table>
                    <tr>
                      <th>No</th>
                      <th>firstName</th>
                      <th>lastName</th>
                      <th>gender</th>
                      <th>phoneNo</th>
                      <th>email</th>
                      <th>Area</th>
                      <th>City</th>
                      <th>pincode</th>
                      <th>password</th>
                      <th>Action</th>
                    </tr>
                    @foreach($tabledata as $data)
                    <tr>
                      <td>{{$data->id}}</td>
                      <td>{{$data->firstName}}</td>
                      <td>{{$data->lastName}}</td>
                      <td>{{$data->gender}}</td>
                      <td>{{$data->phoneNo}}</td>
                      <td>{{$data->email}}</td>
                      <td>{{$data->Area}}</td>
                      <td>{{$data->City}}</td>
                      <td>{{$data->pincode}}</td>
                      <td>{{$data->password}}</td>
                      <td colspan=2>
                        <form action="{{url('/serviceConsumer')}}/{{$data->id}}" method="POST">
                            @csrf
                            @method("Delete")
                            <button class="delete-btn">Delete</button>
                        </form>
                        <a href="{{route('serviceConsumer.edit',$data->id)}}">
                            <button class="update-btn">Edit</button>
                        </a>
                      </td>
                    </tr>
                    @endforeach
                </table>
            <!-- <div class="button">
                <a href="#">See All</a>
            </div> -->
        </div>
    </div>
</div>
@stop
