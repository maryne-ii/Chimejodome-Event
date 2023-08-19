@extends('layouts.main')

@section('content')
<h3 class="text-5xl">
    Event: {{$event->header}}
</h3>

<div class="grid-1">
    <div class="void">
  
    </div>
    <!-- <div class="content">
    <a href="{{ route('events.kaban', ['event' => $event]) }}">join</a>
    </div> -->
    <div class="content">
    <a href="">b</a>
    </div>
    <div class="content">
    <a href="">c</a>
    </div>
    <div class="content">
    <a href="">d</a>
    </div>
</div>

<div class="grid-2">
    <div class="content">
      <h4>to do</h4>
      <p>todo</p>
      <p>todo</p>
      <p>todo</p>
      <p>todo</p>


    </div>
    <div class="content">
      <h4>in progress</4>

    </div>
    <div class="content">
      <h4>check</h4>
    </div>
    <div class="content">
      <h4>finish</h4>
    </div>
</div>
@endsection