@extends('layouts.master')


@section('content')
           

            <div class="container">
              @include('partials.notification')<br>
            <form action="{{route('update.event', $id)}}" method="post">
            {{csrf_field()}}
            {{method_field('PUT ')}}
            <div class="field">
          <div class="control">
            <input class="input" type="text" value="{{$event->title}}" name="title">
          </div>
        </div>
        
        <div class="field">
          <div class="control">
            <textarea class="textarea" placeholder="Event Description" name="description">{{$event->description}} </textarea>
          </div>
        </div>

        <div class="field">
            <div class="control">
              <input class="input" type="text" value="{{$event->contact}}" name="contact" >
            </div>
          </div>
        
            <button class="button is-link">Update Event</button>
          </div>
            </form>
@endsection