@extends('layouts.master')


@section('content')
            <!-- Main component for call to action -->
            <div class="container text-center">
                <!-- heading -->
                <h1 class="pull-xs-left">
                    Update Event
                </h1>
                

                <div class="clearfix">
                </div>
                <br>
                
                <!--    ================ Add Notebook form==================== -->
                <form action="{{route('update.event', $id)}}" method="post">
                    {{csrf_field()}}
                    {{method_field('PUT ')}}
                    <div class="form-group">
                        <input type="text" class="form-control" name="title" placeholder="Enter Event Title Here" value= "{{$event->title}}">
                    </div>

                    <div class="form-group">
                        <textarea name="body" class="form-control" rows="10" placeholder="Enter Event Description Here" value="{{$event->description}}"></textarea>
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" name="title" placeholder="Enter Event Creator phone number Here" value="{{$event->contact}}">
                    </div>

                    <button type="submit" class="btn btn-primary">Update Event <img src="http://chittagongit.com/download/430061" style=" height: 30px; width: 30px;"> </button>
                </form>
            </div>
@endsection