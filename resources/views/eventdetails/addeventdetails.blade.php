@extends('layouts.master')



@section('content')
            <!-- Main component for call to action -->
            <div class="container text-center">
                <!-- heading -->
                <h1 class="pull-xs-left">
                    ADD YOUR EVENT DETAILS
                    <p style="color: red; font-size: 14px;">Please note that after you add this event, you cannot edit it.</p>
                </h1><br><br><br><br>

                
                <p><b>Copy and share!:</b> {{route('show.suggestion', $id)}}</p>
                <a style="margin-right: 500px;" class="btn btn-primary" href="{{route('reports.votes', $id)}}" role="button">
                See Event Details Reports
                </a>
                <div class="clearfix">
                </div>
                <br>
                
                <!-- ================ Add eventdetails form==================== -->
                <!-- VENUE -->
                <span>Venue Of Event</span>
                <form action="{{Route('create.venue', $id)}}" 
                method="post">
                {{csrf_field()}}
                    <div class="form-group">                        
                        <input type="text" class="form-control" name="name_of_location" placeholder="Enter Name Of The Venue Of Your Location Here">
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" name="address" placeholder="Enter Address Of Your Location Here">
                    </div>
                    <button type="submit" class="btn btn-primary">Add Venue</button>
                </form><br><br>
                <h1 style="color:red;" class="pull-xs-left">
                    Added Venues
                </h1><br><br>
                @if(count($venues))
              @foreach($venues as $venue)
                <div class="container text-center">
                <div class="clearfix">
                </div>
                <br>
                            <p class="card-title" name="name_of_location" style="margin-left:25px; margin-top: 20px; color: black;">
                            Name Of Location: {{$venue->name_of_location}}
                            </p><br><br>
                        

                            <p class="card-title" name="address" style="margin-left:25px; margin-top: 20px; color: black;">
                                Address Of Location: {{$venue->address}}
                            </p><br>
                            <form action="{{route('destroy.venue', [$venue->id, $id])}}" class="pull-xs-right5 card-link" method="POST" style="display:inline">
                            {{csrf_field()}}
                            {{method_field('DELETE')}}
                                <input class="btn btn-sm btn-danger" type="submit" value="Delete">
                                </input>
                            </form><br><br><br>
                            
                @endforeach
                @else
                <p style="color:#D3D3D3; padding-left:5 0px; padding-top: 10px;">You have not added any mother fucking name of your event location or  address of your event location, are you so dumb you can even use a super simple application?, fuck you!. However, I was employed by this company to educate your ignorance, use the " Two Forms above and click the add venue button" above to add a new location and fuck Off!.</p>
                @endif

                       

                <!-- TIME -->
                <span>Time Of Event</span>
                <form action="{{route('create.time', $id)}}" method="post">
                {{csrf_field()}}
                    <div class="form-group">
                        <input type="text" class="form-control" name="time_start" placeholder="Enter The Opening Time Of Your Event">
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" name="time_stop" placeholder="Enter Closing Time Of Your Event Here">
                    </div>
                    <button type="submit" class="btn btn-primary">Add Time</button>
                </form><br><br>
                <h1 style="color:red;" class="pull-xs-left">
                    Added Times
                </h1><br><br>
                @if(count($times))
              @foreach($times as $time)
                <div class="container text-center">
                <div class="clearfix">
                </div>
                <br>
                <p class="card-title" name="time_start" style="margin-left:25px; margin-top: 20px; color: black;">
                Starting Time Of Event: {{$time->time_start}}
                </p><br><br>
            

                <p class="card-title" name="time_stop" style="margin-left:25px; margin-top: 20px; color: black;">
                Ending/Closing Time Of Event: {{$time->time_stop}}
                </p><br>
                <form action="{{route('destroy.time', [$time->id, $id])}}" class="pull-xs-right5 card-link" method="POST" style="display:inline">
                            {{csrf_field()}}
                            {{method_field('DELETE')}}
                                <input class="btn btn-sm btn-danger" type="submit" value="Delete">
                                </input>
                            </form><br><br><br>
                @endforeach
                @else
                <p style="color:#D3D3D3; padding-left:5 0px; padding-top: 10px;">You have not added any starting time of event or stopping time of your event yet, Please use the " Two Forms above and click the add time button" above to add a new time</p>
                @endif




                <span>Cost Of Event</span><br>
                <form action="{{Route('create.cost', $id)}}" method="post">
                    {{csrf_field()}}
                    <div class="form-group">
                        <input type="text" class="form-control" name="price" placeholder="Enter The Ticket Price Of Your Event Here">
                    </div>

                    <div class="form-group">
                        <textarea name="details" class="form-control" rows="10" placeholder="Enter The Details Of The Event Price. E.g: You say the price covers for Food and maybe some goodie bags."></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Add Cost</button>
                </form><br><br>
                <h1 style="color:red;" class="pull-xs-left">
                    Added Costs
                </h1><br><br>
                @if(count($costs))
              @foreach($costs as $cost)
                <div class="container text-center">
                <div class="clearfix">
                </div>
                <br>
                <p class="card-title" name="price" style="margin-left:25px; margin-top: 20px; color: black;">
                Cost Of Event: {{$cost->price}}
                </p><br><br>
            

                <p class="card-title" name="details" style="margin-left:25px; margin-top: 20px; color: black;">
                Details Of Cost For Event: {{$cost->details}}
                </p><br><br><br><br>
                @endforeach
                @else
                <p style="color:#D3D3D3; padding-left:5 0px; padding-top: 10px;">You have not added any price of event or details about your event, Please use the " Two Forms above and click the add costs button" above to add a new cost</p>
                @endif
                <div>
                    <a href="{{route('show.suggestion', $id)}}">
                    <button style = "margin-left: 400px; padding-left: 100px; padding-right: 100px;" type="submit" class="btn btn-primary">Publish Form</button>
                
                    </a>
                    </div>
            </div>
@endsection