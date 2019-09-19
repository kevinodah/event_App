@extends('layouts.master')


@section('content')
<div class="container">
@include('partials.notification')<br>
            <div class="columns">
                <div class="column">
                  <div class="buttons has-addons is-right">
                    <a  href="{{route('newevent')}}" class="button is-primary"     >new event <br><i class="   fa fa-plus" aria-hidden="true"></i></a>
                  </div>
                </div>
              </div>

              <!-- EVENTS -->
          <div class="block">
              <div class="columns">
              @foreach($events as $event)
                <div class="column">
                    <div class="card">
                        <header class="card-header">
                          <p class="card-header-title">
                          <a href="{{route('event.plan', [$event->id]) }}" name="title">
                                    {{$event->title}}
                                </a>
                          </p>
                        </header>
                        <footer class="card-footer">
                          <a href="{{route('editEventForm', $event->id)}}" class="card-footer-item"> <i class=" far fa-edit fa-fw"></i>&nbsp; Edit</a>
                          <form action="{{route('destroy.event', $event->id)}}" class="card-footer-item" method="POST" style="display:inline">
                            {{csrf_field()}}
                            {{method_field('DELETE')}}
                                <input class="button is-text" style = "text-decoration: none; color: #3273dc" type="submit" value="Delete">
                            </form>
                          <a href="{{route('reports.votes', $event->id)}}" class="card-footer-item"> <i class="fa fa-file" aria-hidden="true"></i>&nbsp;Report </a>
                          <a href=" {{route('show.suggestion', $event->id)}}" class="card-footer-item "><i class="fas fa-share"></i>&nbsp; share</a>
                        </footer>
                      </div><br><br>
                </div>
                @endforeach
<script>
var botmanWidget = {
    chatServer: '/botman',
    title: 'Jarvis',
    bubbleBackground: '#00d1b2',
    mainColor: '#3273dc',
};
</script>
<script src='https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/js/widget.js'></script>

</div>              


@endsection

