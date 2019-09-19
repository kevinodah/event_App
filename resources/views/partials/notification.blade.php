@if ($message = Session::get('success'))
<div class="container">
        <div class= "notification is-success" style="box-shadow: 1px 2px 3px #aaaaaa;" >
          <p>
            {{$message}}
             </p>
          </div>
      </div>
@endif

@if ($message = Session::get('error'))
<div class="container">
        <div class= "notification is-danger" style="box-shadow: 1px 2px 3px #aaaaaa;" >
          <p>
            {{$message}}
             </p>
          </div>
      </div>
@endif