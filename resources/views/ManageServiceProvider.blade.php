@extends('adminDashboard')
<style>
   .input-box {
  position: relative;
  height: 50px;
  max-width: 700px;
  width: 100%;
  background: #fff;
  margin: 30px 280px;
  border-radius: 8px;
  box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
}
.input-box i,
.input-box .button {
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
}

.input-box input {
  height: 100%;
  width: 100%;
  outline: none;
  font-size: 18px;
  font-weight: 400;
  border: none;
  padding: 0 155px 0 10px;
  background-color: transparent;
}
.input-box .button {
  right: 20px;
  font-size: 16px;
  font-weight: 400;
  color: #fff;
  border: none;
  padding: 10px 30px;
  border-radius: 6px;
  background-color: #4070f4;
  cursor: pointer;
}
.input-box .button:active {
  transform: translateY(-50%) scale(0.98);
}
</style>
@section('content')
<div class="home-content">
    <div class="input-box">
        <form action="">
            <input type="text" name="search" placeholder="Search here..." value="{{$search}}"/>
            <button class="button">Search</button>
        </form>
    </div>
    <div class="sales-boxes">
        <div class="recent-sales box">
            <div class="title">
                Service Provider
                <div class="button">
                    <a href="/serviceProvider/create">Add Service Provider</a>
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
                        <form action="{{url('/serviceProvider')}}/{{$data->id}}" method="POST">
                            @csrf
                            @method("Delete")
                            <button class="delete-btn">Delete</button>
                        </form>
                        <a href="{{route('serviceProvider.edit',$data->id)}}">
                            <button class="update-btn">Edit</button>
                        </a>
                      </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</div>
@stop
