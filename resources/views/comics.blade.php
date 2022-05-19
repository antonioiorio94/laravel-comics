@extends('app')

@section('title')
DC Comics - Comics
@endsection

@section('content')
<div class="container">
    
    @if(count($comics) > 0)
    <div class="card-container">
      @foreach ($comics as $item)
        <div class="card">
          <a href="#">
            <div class="cover">
              <img src="{{$item['thumb']}}" alt="{{$item['series']}}">
            </div>
            <p>{{$item['series']}}</p>
            

          </a>
        </div>

          
      @endforeach
    </div>
    @endif
</div>
@endsection