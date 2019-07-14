@extends('layouts.master')


@section('content')
            <!-- Main component for call to action -->
            <div class="container text-center">
                <!-- heading -->
                <h1 class="pull-xs-left">
                        Results
                    <p style="color: red; font-size: 14px;">This page shows you the result of your event votes so far</p>
                </h1>
                <div class="clearfix">
                </div>
                <br>
                
                <form action="{{route('reports.votes', $id)}}" method="post">
                    <h1 style="color:red;">Venues</h1>
                    @if(count($venues))
                    @foreach($venues as $venue)
                    <div class="form-group">
                      <p class="card-title" name="name_of_location" style="margin-left:25px; margin-top: 20px; color: black;">
                     --- {{$venue->name_of_location}}
                      </p>

                      <p class="card-title" name="address" style="margin-left:25px; margin-top: 20px; color: black;">
                      *** {{$venue->address}}  
                      </p>
                      <p class="card-title" name="count" style="margin-left:25px; margin-top: 20px; color: black;">
                      Vote count: {{$venue->count}}
                      </p><br>
                      <progress max = "100" value = "100">
                      </progress>
                    </div>
                    @endforeach
                    @else
                    <p style="color:#D3D3D3; padding-left:5 0px; padding-top: 10px;">No vote has been recorded in our Database yet</p>
                    @endif


                    <h1 style="color:red;">Times</h1>
                    @if(count($times))
                    @foreach($times as $time)
                    <div class="form-group">
                        <p class="card-title" name="time_start" style="margin-left:25px; margin-top: 20px; color: black;">
                        --- {{$time->time_start}}
                        </p>

                        <p class="card-title" name="time_stop" style="margin-left:25px; margin-top: 20px; color: black;">
                        *** {{$time->time_stop}}
                        </p>
                        <p class="card-title" name="count" style="margin-left:25px; margin-top: 20px; color: black;">
                      Vote count: {{$time->count}}
                      </p><br>
                    </div>
                    @endforeach
                    @else
                    <p style="color:#D3D3D3; padding-left:5 0px; padding-top: 10px;">No voted has been recorded in our Database yet</p>
                    @endif


                    <h1 style="color:red;">Costs</h1>
                    @if(count($costs))
                    @foreach($costs as $cost)
                    <div class="form-group">
                      <p class="card-title" name="name_of_location" style="margin-left:25px; margin-top: 20px; color: black;">
                      --- {{$cost->price}}                       
                      </p>

                      <p class="card-title" name="address" style="margin-left:25px; margin-top: 20px; color: black;">
                      *** {{$cost->details}}                      
                      </p>

                      <p class="card-title" name="count" style="margin-left:25px; margin-top: 20px; color: black;">
                      Vote count: {{$cost->count}}
                      </p><br>
                    </div>
                    @endforeach
                    @else
                    <p style="color:#D3D3D3; padding-left:5 0px; padding-top: 10px;">No vote has been recorded in our Database yet</p>
                    @endif
                </form>
            </div>
@endsection