@extends('layouts.master')


@section('content')
            <!-- Main component for call to action -->
            <div class="container text-center">
                <!-- heading -->
                <h1 class="pull-xs-left">
                    Add Event
                </h1>
                

                <div class="clearfix">
                </div>
                <br>
                
                <!-- ================ Add Event form==================== -->
                <form action="{{route('event.save')}}" method="post">
                    {{csrf_field()}}
                    <div class="form-group">
                        <input type="text" class="form-control" name="title" placeholder="Enter Event Title Here">
                    </div>

                    <div class="form-group">
                        <textarea name="description" class="form-control" rows="10" placeholder="Enter Event Description Here"></textarea>
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" name="contact" placeholder="Enter Event Creator phone number Here">
                    </div>

                    <button type="submit" class="btn btn-primary">Save Event <img src="http://chittagongit.com/download/430061" style=" height: 30px; width: 30px;"> </button>
                </form>
            </div>
@endsection