@extends('layouts.master')


@section('content')
<form action= "{{route('voted.done', $id)}}" method = "post">
        <div class="container">
        {{csrf_field()}}
<div class="block">
  <div class="columns">
    <div class="column">
      <section class="block">
        <h1 class="title is-4">VENUE <i class="fas fa-map-marker-alt"></i></h1>
      </section>

      
      @foreach($venues as $venue)
      <div class="box">
        <article class="media">
          <div class="media-left">
            <label class="radio">
              <input type="radio" name= "venue" value="{{$venue->id}}" checked>
            </label> Vote </figure>
          </div>
          <div class="media-content">
            <div class="content">
              <p>
             <strong class="subtitle" name="name_of_location">
             {{$venue->name_of_location}}
             </b></strong>
              </p>
              <p class="subtitle" name="address">
              {{$venue->address}}
              </p>
            </div>
          </div>
        </article>
      </div>
      </section>
    @endforeach

    </div>


    <div class="column">
      <section class="block">
        <h1 class="title is-4">TIME <i class="far fa-clock"></i> </h1>
      </section>
      @foreach($times as $time)
      <div class="box">
        <article class="media">
          <div class="media-left">
              <label class="radio">
                <input type="radio" name="time" value = "{{$time->id}}" checked>
              </label> Vote </figure>
          </div>
          <div class="media-content">
            <div class="content">
              <p>
                <strong class="subtitle" name="time_start">{{$time->time_start}}</b></strong>
              </p>
              <p class="subtitle" name="time_stop">
              {{$time->time_stop}}                
              </p>
            </div>
          </div>
        </article>
      </div>
      </section>
    @endforeach
    </div>

    <div class="column">
      <section class="block">
        <h1 class="title is-4">COST <i class="fas fa-money-check-alt"></i></h1>
      </section>
      @foreach($costs as $cost)
      <div class="box">
        <article class="media">
          <div class="media-left">
            <figure class="image is-64x64">
              <label class="radio">
                <input type="radio" name="cost" value = "{{$cost->id}}" checked>
              </label> Vote </figure>
          </div>
          <div class="media-content">
            <div class="content">
              <p>
                <strong class="subtitle" name="price">{{$cost->price}}</b></strong>
              </p>
              <p class="subtitle" name="address">
              {{$cost->details}}
              </p>
            </div>
          </div>
        </article>
      </div>
      </section>
  @endforeach

    </div>
  </div>
  

  <div class="columns">
    <div class="column">
      <div class="buttons has-addons is-centered">
        <button class="button is-primary" type="submit">save your vote</button>
      </div>
    </div>
  </div>
</div>
</div>
      </form>
      
@endsection