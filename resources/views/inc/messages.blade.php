@if($errors->any())
    <div class="errors">
        @foreach($errors->all() as $error)
            <p class="msg">{{$error}}</p>
        @endforeach
    </div>
@endif

@if(session('success'))
    <div class="success">
       {{session('success')}}
    </div>
@endif