@extends('layouts.master')



@section('content')
<div class="clearfix">
                </div>
                <br>
             
            <div class="container">
        <div class="block">
            <div class="columns">
              <div class="column">
                  <section class="block">
                      <h1 class="title is-4">VENUE <i class="fas fa-map-marker-alt"></i></h1>
                    </section>
                    <form action="{{route('create.venue', $id)}}" 
                method="POST">
                {{csrf_field()}}
                    <div class="field">
                        <p class="control has-icons-left has-icons-right">
                          <input class="input" type="text" placeholder="Name Of Location" name="name_of_location">
                          <span class="icon is-small is-left">
                            <i class="fas fa-signature"></i>
                          </span>
                          <span class="icon is-small is-right">
                            <i class="fas fa-check"></i>
                          </span>
                        </p>
                      </div>
                      <div class="field">
                        <p class="control has-icons-left">
                          <input class="input" type="text" placeholder="Address" name="address">
                          <span class="icon is-small is-left">
                            <i class="fas fa-location-arrow"></i>
                          </span>
                        </p>
                      </div>
                      <div class="field">
                        <p class="control">
                          <button class="button is-dark is-bold">
                            Add
                          </button>
                        </p>
                      </div>
                      </form><br><br>
            @if(count($venues))
              @foreach($venues as $venue)
                      
                      <section class="hero is-primary">
                          <div class="hero-body">
                            <div class="container">
                              <p class="title is-6">
                              Name Of Location: {{$venue->name_of_location}}
                                </p>
                                <p class="title is-6">
                                Address Of Location: {{$venue->address}}
                                </p>
                                <form action="{{route('destroy.venue', [$venue->id, $id])}}" method="POST" class="pull-xs-right5 card-link" style="display:inline">
                            {{csrf_field()}}
                            {{method_field('DELETE')}}
                                <input class="button is-dark" type="submit" value="Delete">
                                </input>
                            </form><br>
                            </div>
                          </div>
                          
                        </section>
                @endforeach
                @else
                      <section class="hero is-dark is-bold">
                          <div class="hero-body">
                            <div class="container">
                              <h2 class="subtitle">
                                You have not added <i class="fas fa-plus-square"></i> any Venue yet
                              </h2>
                            </div>
                          </div>
                        </section>
              </div><br><br>
            @endif
        </div>

              <div class="column">
                  <section class="block">
                      <h1 class="title is-4">TIME & DATE&nbsp;<i class="far fa-clock"></i> </h1>
                    </section>
                    <form action="{{route('create.time', $id)}}" method="POST">
                {{csrf_field()}}
                    <div class="field">
                        <p class="control has-icons-left has-icons-right">
                          <input class="input" type="text" placeholder="Starting Time And Date" name="time_start">
                          <span class="icon is-small is-left">
                            <i class="fas fa-hourglass-start"></i>
                          </span>
                          <span class="icon is-small is-right">
                            <i class="fas fa-check"></i>
                          </span>
                        </p>
                      </div>
                      <div class="field">
                        <p class="control has-icons-left">
                          <input class="input" type="text" placeholder="Closing Time And Date" name="time_stop">
                          <span class="icon is-small is-left">
                            <i class="fas fa-hourglass-end"></i>
                          </span>
                        </p>
                      </div>
                      <div class="field">
                        <p class="control">
                          <button class="button is-dark is-bold">
                            Add
                          </button>
                        </p>
                      </div>
                      </form><br><br>
                      @if(count($times))
                    @foreach($times as $time)   
                      
                      <section class="hero is-primary">
                          <div class="hero-body">
                            <div class="container">
                              <p class="title is-6">
                              Starts: {{$time->time_start}}
                                </p>
                                <p class="title is-6">
                                    Closes: {{$time->time_stop}}
                                    </p>
                                    <form action="{{route('destroy.time', [$time->id, $id])}}" class="pull-xs-right5 card-link" method = "POST" style="display:inline">
                  {{csrf_field()}}
                  {{method_field('DELETE')}}
                      <input class="button is-dark" type="submit" value="Delete">
                      </input>
                  </form>
                            </div>
                          </div>
                        </section>
                @endforeach
                @else
                      <section class="hero is-dark is-bold">
                          <div class="hero-body">
                            <div class="container">
                              <h2 class="subtitle">
                                You have not added <i class="fas fa-plus-square"></i> any Time yet
                              </h2>
                            </div>
                          </div>
                        </section>
              </div>
              @endif
        </div>

              <div class="column">
                  <section class="block">
                      <h1 class="title is-4">COST <i class="fas fa-money-check-alt"></i></h1>
                    </section>
                    <form action="{{Route('create.cost', $id)}}" method="post">
                    {{csrf_field()}}                    
                    <div class="field">
                        <p class="control has-icons-left has-icons-right">
                          <input class="input" type="text" placeholder="Ticket Price" name="price">
                          <span class="icon is-small is-left">
                            <i class="fas fa-tags"></i>
                          </span>
                          <span class="icon is-small is-right">
                            <i class="fas fa-check"></i>
                          </span>
                        </p>
                      </div>
                      <div class="field">
                        <p class="control has-icons-left">
                            <textarea class="textarea" placeholder="Event Description" name="details"></textarea>
                        </p>
                      </div>
                      <div class="field">
                        <p class="control">
                          <button class="button is-dark is-bold">
                            Add
                          </button>
                        </p>
                      </div>
                      </form><br><br>
            @if(count($costs))
              @foreach($costs as $cost)
                      <section class="hero is-primary">
                          <div class="hero-body">
                            <div class="container">
                              <p class="title is-6">
                              Cost Of Event: {{$cost->price}}
                                </p>
                                <p class="title is-6">
                Details Of Cost For Event: {{$cost->details}}                        
                                    </p>
                                    <form action="{{route('destroy.cost', [$cost->id, $id])}}" class="pull-xs-right5 card-link" method="POST" style="display:inline">
                  {{csrf_field()}}
                  {{method_field('DELETE')}}
                      <input class="button is-dark" type="submit" value="Delete">
                  </form>
                            </div>
                          </div>
                        </section>
                @endforeach
                @else
                      <section class="hero is-dark is-bold">
                          <div class="hero-body">
                            <div class="container">
                              <h2 class="subtitle">
                                You have not added <i class="fas fa-plus-square"></i> any Cost yet
                              </h2>
                            </div>
                          </div>
                        </section><br><br>
              </div>
              </div>
              
              
      @endif         
      </div>


      
      
    </div>
                    <div class="columns">
                <div class="column">
                <div>
                    <a href="{{route('update.published', $id)}}">
                    <button style = "margin-left: 400px; padding-left: 100px; padding-right: 100px;" type="submit" class="button is-primary">Publish Form</button>
                
                    </a>
                    </div>
                </div>
              </div>

@endsection