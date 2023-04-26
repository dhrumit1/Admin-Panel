@extends('adminDashboard')
<style>
    form {
        background-color: #ffffff;
        border: 2px solid #dddddd;
        padding: 20px;
        width: 500px;
        margin: 0 auto;
        margin-top: 50px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
    }

    .add-admin-content {
        margin: auto;
        position: relative;
    }

    label {
        display: block;
        margin-bottom: 5px;
        font-weight: bold;
    }

    input[type="text"],
    input[type="email"],
    input[type="password"] {
        width: 100%;
        padding: 10px;
        border: 1px solid #cccccc;
        border-radius: 4px;
        margin-bottom: 20px;
    }

    input[type="submit"] {
        background-color: #4CAF50;
        color: #ffffff;
        padding: 10px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    input[type="submit"]:hover {
        background-color: #3e8e41;
    }

    .lable-heding {
        text-align: center;
    }

    .text-danger {
        background-color: red;
        color: #ffffff;
        border-radius: 10px;
        text-align: center;
    }

    .text-green {
        background-color: green;
        color: #ffffff;
        border-radius: 10px;
        text-align: center;
    }

    .span-danger{
        color: red;
    }
</style>
@section('content')
<div class="home-content">
    <div class="add-admin-content">
        <label class="lable-heding">Add Admin Details</label>
        <form action="/admin" method="post">
            @csrf
            @if(session()->has('sucess'))
            <div class="text-green">
                {{session()->get('sucess')}}
            </div>
            @else (session()->has('error'))
            <div class="text-danger">
                {{session()->get('error')}}
            </div>
            @endif
            <label for="username">UserName:</label>
            <input type="text" name="username" id="username">
            <span class="span-danger">
                @error('username')
                {{$message}}
                @enderror
            </span>

            <label for="name">Name:</label>
            <input type="text" name="name" id="name">
            <span class="span-danger">
                @error('name')
                {{$message}}
                @enderror
            </span>

            <label for="phoneNo">Phone No:</label>
            <input type="text" name="phoneNo" id="phoneNo">
            <span class="span-danger">
                @error('phoneNo')
                {{$message}}
                @enderror
            </span>

            <label for="email">Email:</label>
            <input type="email" name="email" id="email">
            <span class="span-danger">
                @error('email')
                {{$message}}
                @enderror
            </span>

            <label for="password">Password:</label>
            <input type="password" name="password" id="password">
            <span class="span-danger">
                @error('password')
                {{$message}}
                @enderror
            </span>

            <label for="confirm_password">Confirm Password:</label>
            <input type="password" name="confirm_password" id="confirm_password">
            <span class="span-danger">
                @error('confirm_password')
                {{$message}}
                @enderror
            </span>

            <input type="submit" value="Register">
        </form>
    </div>
</div>
@stop
