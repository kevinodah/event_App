@extends('layouts.master')


@section('content')
        <!-- Main component for call to action -->
        <div class="jumbotron">
            <h1>EVENTS</h1>
            <p>With this app, you can be able to manage/plan events with your friends and also share the events links to them.</p>
            <p>
                <a class="btn btn-lg btn-primary" href="{{route('events')}}" role="button">Your events</a>
            </p>
        </div>
    </div>
@endsection