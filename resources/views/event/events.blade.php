@extends('layouts.master')


@section('content')


            <!-- Main component for call to action -->
            <div class="container text-center">
                <!-- heading -->
                <h1 class="pull-xs-left">
                    Your Events
                </h1>
                <div class="pull-xs-right">

                    <a class="btn btn-primary" href="{{route('newevent')}}" role="button">
                        New Event +
                    </a>

                    
                </div>

                <div class="clearfix">
                </div>
                <br>
                
                <!-- ================ Events ==================== -->
                @if(count($events))
                @foreach($events as $event)
                <div class="col-sm-6 col-md-3">
                    <div class="card">
                        <div class="card-block">
                            <a href="{{route('event.plan', [$event->id]) }}">
                                <h4 class="card-title" name="title">
                                    {{$event->title}}
                                </h4>
                            </a>
                        </div>

                        <p class="card-title" name="description" style="margin-left:25px; margin-top: 20px; color: gold;">
                        {{$event->description}}
                        </p>

                        <p name="contact" style="margin-left:25px; margin-top: 20px; color: gold">{{$event->contact}}</p> 
                        
                        <div class="card-block">
                            <a class="card-link" href="{{route('editEventForm', $event->id)}}">
                                Edit Event 
                            </a>
                            <form action="{{route('destroy.event', $event->id)}}" class="pull-xs-right5 card-link" method="POST" style="display:inline">
                            {{csrf_field()}}
                            {{method_field('DELETE')}}
                                <input class="btn btn-sm btn-danger" type="submit" value="Delete Event">
                                </input>
                            </form>
                        </div>
                    </div>
                @endforeach
                @else
                <p style="color:#D3D3D3; padding-left:140px; padding-top: 100px;">You have not added any events yet, Please click on the " New event + " button above to add a new event</p>
                @endif
                </div>
            </div>
@endsection


