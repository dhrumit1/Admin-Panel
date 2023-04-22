@extends('adminDashboard')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<style>
    .input-box {
        position: relative;
        height: 50px;
        max-width: 700px;
        width: 100%;
        background: #fff;
        margin: 30px auto;
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

    .success-msg {
        color: #270;
        background-color: #DFF2BF;
        margin: 10px 0;
        padding: 10px;
        border-radius: 3px 3px 3px 3px;
    }
</style>
@section('content')
<div class="home-content">
    <div class="input-box">
        <form action="">
            <input type="text" name="search" placeholder="Search by First Name or Phone no..." value="{{$search}}" />
            <button class="button">Search</button>
        </form>
    </div>
    <div>
        @if(session()->has('success'))
        <div class="success-msg" id="message">
            {{ session()->get('success')}}
        </div>
    </div>
    @endif
    <div class="sales-boxes">
        <div class="recent-sales box">
            <div class="title">
                Service Provider :
                <div class="button">
                    <a href="/serviceProvider/create">Add Service Provider</a>
                </div>
            </div>
            <div class="sales-details">
                <table>
                    <tr>
                        <th>No</th>
                        <th>FirstName</th>
                        <th>LastName</th>
                        <th>Gender</th>
                        <th>PhoneNo</th>
                        <th>Email</th>
                        <th>Area</th>
                        <th>City</th>
                        <th>pincode</th>
                        <!-- <th>password</th> -->
                        <th>Delete</th>
                        <th>Edit</th>
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
                        <!-- <td>{{$data->password}}</td> -->
                        <td>
                            <form action="{{url('/serviceProvider')}}/{{$data->id}}" method="POST" id="delete-form">
                                @csrf
                                @method("Delete")
                                <button class="delete-btn" onclick="confirmDelete(event)"><i class='bx bxs-trash'></i></button>
                            </form>
                        </td>
                        <td>
                            <a href="{{route('serviceProvider.edit',$data->id)}}">
                                <button class="update-btn"><i class='bx bx-edit-alt'></i></button>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</div>

<script>
    function confirmDelete(event) {
        event.preventDefault();
        if (confirm("Are you sure you want to delete this data?")) {
            document.getElementById('delete-form').submit();
        }
    }
</script>
<script>
    $("document").ready(function() {
        setTimeout(function() {
            getElementById("div.message").delete();
        }, 3000);
    });
</script>
@stop
