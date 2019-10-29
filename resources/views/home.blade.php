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
              <div class="columns flex-wrap-2-wrap">
              @foreach($events as $event)
                <div class="column is-6">
                    <div class="card">
                        <header class="card-header">
                          <p class="card-header-title">
                          <a href="{{route('event.plan', $event)}}" name="title">
                                    {{$event->title}}
                                </a>
                          </p>
                        </header>
                        <footer class="card-footer">
                          <a href="{{route('editEventForm', $event)}}" class="card-footer-item"> <i class=" far fa-edit fa-fw"></i>&nbsp; Edit</a>
                          <form action="{{route('destroy.event', $event)}}" class="card-footer-item" method="POST" style="display:inline">
                            {{csrf_field()}}
                            {{method_field('DELETE')}}
                                <input class="button is-text" style = "text-decoration: none; color: #3273dc" type="submit" value="Delete">
                            </form>
                          <a href="{{route('reports.votes', $event->id)}}" class="card-footer-item"> <i class="fa fa-file" aria-hidden="true"></i>&nbsp;Report </a>
                          <input type="text" style="color:white; display:none" value="{{route('show.suggestion', $event->id)}}" id="myInput"><div class="tooltip">
                          <a class="card-footer-item" onclick="myFunction()" onmouseout="outFunc()">
                            <span class="tooltiptext" id="myTooltip"></span><i class="fas fa-share"></i>&nbsp; share</a>
                            </a>
                          </div>
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
<script type="text/javascript" src="{{ URL::asset('js/copy.js') }}"></script>

<link rel="stylesheet" href="{{ URL::asset('css/copystyling.css') }}"/>

</div>              


@endsection

