@if ($message = Session::get('success'))
<div class="container">
        <div class= "notification is-success" style="box-shadow: 1px 2px 3px #aaaaaa;" >
          <p>
            {{$message}}
             </p>
          </div>
      </div>
@elseif ($message = Session::get('error'))
<div class="container">
        <div class= "notification is-danger" style="box-shadow: 1px 2px 3px #aaaaaa;" >
          <p>
            {{$message}}
             </p>
          </div>
      </div>

@elseif ($errors->any())
<div class="container">
        <div class= "notification is-danger" style="box-shadow: 1px 2px 3px #aaaaaa;" >
          <p>
          @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
             </p>
          </div>
      </div>

    
@endif