@extends('layouts.master')


@section('content')
            <!-- Main component for call to action -->
            <form action= "{{route('voted.done', $id)}}" method = "post">
            <div class="container text-center">
            {{csrf_field()}}
                <h1 style="color:red;" class="pull-xs-left">
                     Venues
                </h1>
                <div class="container text-center">
                <div class="clearfix">
                </div>
                
                @foreach($venues as $venue)
                <p class="card-title" name="name_of_location" style="margin-left:25px; margin-top: 20px; color: black;">
                {{$venue->name_of_location}}
                </p>
                <p class="card-title" name="address" style="margin-left:25px; margin-top: 20px; color: black;">
                {{$venue->address}}
                </p>
                I vote for this venue <input type="radio" name= "venue" value="{{$venue->id}}">
            </div><br>
            @endforeach


            <h1 style="color:red;" class="pull-xs-left">
                        Times
                </h1>
            @foreach($times as $time)
            <div class="container text-center">
                <div class="container text-center">
                <div class="clearfix">
                </div>
                <br>
                <p class="card-title" name="time_start" style="margin-left:25px; margin-top: 20px; color: black;">
                {{$time->time_start}}
                </p><br>
                <p class="card-title" name="time_stop" style="margin-left:25px; margin-top: 20px; color: black;">
                {{$time->time_stop}}
                </p><br>
                I vote for this time <input type="radio" name="time" value = "{{$time->id}}">
            </div><br>
            @endforeach

            <h1 style="color:red;" class="pull-xs-left">
                        Costs
            </h1>
            @foreach($costs as $cost)
            <div class="container text-center">
                <div class="container text-center">
                <div class="clearfix">
                </div>
                <br>
                <p class="card-title" name="price" style="margin-left:25px; margin-top: 20px; color: black;">
                {{$cost->price}}
                </p><br>
                <p class="card-title" name="address" style="margin-left:25px; margin-top: 20px; color: black;">
                {{$cost->details}}
                </p><br>
                I vote for this cost <input type="radio" name="cost" value = "{{$cost->id}}">
                @endforeach
            </div><br>
            <div>
                <button style = "margin-left: 400px; padding-left: 100px; padding-right: 100px;" type="submit" class="btn btn-primary">Save your vote</button>
            </div>
            </form>
@endsection