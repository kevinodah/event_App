@extends('layouts.master')


@section('content')
            <!-- Main component for call to action -->
       
                <form class="container" action="{{route('event.save')}}" method="post">
                    {{csrf_field()}}
                
        <div class="field" >
            <div class="control">
              <input class="input" type="text" placeholder="Event Title" name="title">
            </div>
          </div>
          
          <div class="field">
            <div class="control">
              <textarea class="textarea" placeholder="Event Description" name="description"></textarea>
            </div>
          </div>
  
          <div class="field">
              <div class="control">
                <input class="input" type="text" placeholder="Phone Number" name="contact">
              </div>
            </div>
          
              <button class="button is-primary">Create Event</button>
            </div>
          </div>
      </div>

@endsection