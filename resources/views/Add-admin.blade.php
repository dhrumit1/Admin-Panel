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
</style>
@section('content')
<div class="home-content">
    <label class="lable-heding">Add Admin Details</label>
    <form action="" method="post">
        <label for="username">UserName:</label>
        <input type="text" name="username" id="username" required>

        <label for="name">Name:</label>
        <input type="text" name="name" id="name" required>

        <label for="phoneNo">Phone No:</label>
        <input type="text" name="phoneNo" id="phoneNo" required>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required>

        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required>

        <label for="confirm_password">Confirm Password:</label>
        <input type="password" name="confirm_password" id="confirm_password" required>

        <input type="submit" value="Register">
    </form>
</div>
@stop
