@extends('layouts.master')


@section('content')
            <!-- Main component for call to action -->
            <div class="container">
        <div class="block">
            <div class="columns">
              <div class="column">
                  <section class="block">
                  <h1 class="title is-4">VENUE <i class="fas fa-map-marker-alt"></i></h1>
                    </section>

                <form action="{{route('reports.votes', $id)}}" method="post">
                  @if(count($venues))
                    @foreach($venues as $venue)
                <div class="field">
                      </div>
                      <section class="hero is-dark">
                          <div class="hero-body">
                            <div class="container">
                              <p class="subtitle" name="name_of_location">
                              {{$venue->name_of_location}}
                              </p>

                              <p class="subtitle" name="address">
                              {{$venue->address}}
                                </p>

                                  <section class="block" name="count">
                                      VOTES: {{$venue->count}} <i class="fas fa-poll"></i>
                                  </section> 
                            </div>
                            
                          </div>
                        @endforeach
                        </section>
              </div><br><br>
              @else
                    <p style="color:#D3D3D3; padding-left:5 0px; padding-top: 10px;">No vote has been recorded in our Database yet</p>
                    @endif


                    <div class="column">
                  <section class="block">
                  <h1 class="title is-4">TIME <i class="fas fa-clock"></i></h1>
                    </section>

                
                    @if(count($times))
                    @foreach($times as $time)
                <div class="field">
                      </div>
                      <section class="hero is-dark">
                          <div class="hero-body">
                            <div class="container">
                              <p class="subtitle" name="time_start">
                              {{$time->time_start}}
                              </p>

                              <p class="subtitle" name="time_stop">
                              {{$time->time_stop}}
                                </p>

                                  <section class="block" name="count">
                                      VOTES: {{$time->count}} <i class="fas fa-poll"></i>
                                  </section> 
                            </div>
                            
                          </div>
                        @endforeach
                        </section>
              </div><br><br>
                    @else
                    <p style="color:#D3D3D3; padding-left:5 0px; padding-top: 10px;">No voted has been recorded in our Database yet</p>
                    @endif



                    <div class="column">
                  <section class="block">
                  <h1 class="title is-4">COST <i class="fas fa-money-check-alt"></i></h1>
                    </section>

                
                    @if(count($costs))
                    @foreach($costs as $cost)
                <div class="field">
                      </div>
                      <section class="hero is-dark">
                          <div class="hero-body">
                            <div class="container">
                              <p class="subtitle" name="price">
                              {{$cost->price}}
                              </p>

                              <p class="subtitle" name="details">
                              {{$cost->details}}
                                </p>

                                  <section class="block" name="count">
                                      VOTES: {{$cost->count}} <i class="fas fa-poll"></i>
                                  </section> 
                            </div>
                            
                          </div>
                        @endforeach
                        </section>
              </div><br><br>

                    @else
                    <p style="color:#D3D3D3; padding-left:5 0px; padding-top: 10px;">No vote has been recorded in our Database yet</p>
                    @endif
                </form>
@endsection