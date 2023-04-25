@extends('adminDashboard')
@section('content')
<div class="home-content">
    <!-- <p>Services:</p> -->
    <div class="sales-boxes">
        <div class="recent-sales box">
            <div class="title">
                FeedBack :
                <!-- <div class="button">
                  <a href="/sevices/create">Add Service Consumer</a>
                </div> -->
            </div>
            <div class="sales-details">
                <table>
                    <tr>
                        <td>Name</td>
                        <td>Rating</td>
                        <td>Feedback Dscription</td>
                        <td>Feedback Date</td>
                    </tr>
                    @foreach($feedback as $fb)
                    <tr>
                        <td>{{$fb->Name}}</td>
                        <td>{{$fb->Rating}}</td>
                        <td>{{$fb->feedback_details}}</td>
                        <td>{{$fb->feedback_date}}</td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@stop
