@extends('layouts.main')

@section('content')
<h3 class="text-5xl">
    Event: {{$event->header}}
</h3>
<h3 class="text-5xl">
    Event: {{$event->name}}
</h3>
<div class="grid-1">
    <div class="void">
  
    </div>
    <div class="content">
    <a href="{{ route('kanban.createKanbanPage', ['event' => $event]) }}">create kanban</a>
    </div>
    <div class="content">
    <a href="{{ route('kanban.join', ['event' => $event]) }}">join</a>
    </div>
    <div class="content">
    <a href="{{ route('events.edit', ['event' => $event]) }}">Event complete</a>
    </div>
    <div class="content">
    <a href="{{ route('kanban.disbursement', ['event' => $event]) }}">disbursement</a>
    </div>
    <div class="content">
    <a href="{{ route('kanban.member', ['event' => $event]) }}">member</a>
    </div>
</div>

<div class="grid-2">
    <div class="content">
      <h4>to do</h4>
      @foreach ($kanbans0 as $kanban)
      <li class="flex items-center py-4 px-6 hover:bg-gray-50">
                    <span class="text-gray-700 text-lg font-medium mr-4">{{ $loop->iteration }}.</span>
                    <div class="flex-1">
                    <form action="{{ route('kanban.move',['kanban'=>$kanban,'event'=>$event]) }}" method="GET" enctype="multipart/form-data">
                    @csrf
                    
                    @method('PUT')
                            <h3 id ='name' name='name' class="text-lg font-medium text-gray-800">{{ $kanban->task_name }}</h3>
                            <h3 class="text-lg font-medium text-blue-800">{{ $kanban->writer }}</h3>
                            <h3 class="text-lg font-medium text-red-800">{{ $kanban->description }}</h3>
                            <h3 class="text-lg font-medium text-red-800">{{ $kanban->status }}</h3>
                            <h3 class="text-lg font-medium text-red-800">{{ $kanban->id }}</h3>
                            <button type="submit" >Submit</button>
                    </form>
                        <p class="text-gray-600 text-base"></p>
                    </div>
                    <span class="text-gray-400"></span>
                </li>
            @endforeach


    </div>
    <div class="content">
      <h4>in progress</4>
      @foreach ($kanbans1 as $kanban)
      <li class="flex items-center py-4 px-6 hover:bg-gray-50">
                    <span class="text-gray-700 text-lg font-medium mr-4">{{ $loop->iteration }}.</span>
                    <div class="flex-1">
                    <form action="{{ route('kanban.move',['kanban'=>$kanban,'event'=>$event]) }}" method="GET" enctype="multipart/form-data">
                    @csrf
                    
                    @method('PUT')
                            <h3 id ='name' name='name' class="text-lg font-medium text-gray-800">{{ $kanban->task_name }}</h3>
                            <h3 class="text-lg font-medium text-blue-800">{{ $kanban->writer }}</h3>
                            <h3 class="text-lg font-medium text-red-800">{{ $kanban->description }}</h3>
                            <h3 class="text-lg font-medium text-red-800">{{ $kanban->status }}</h3>
                            <h3 class="text-lg font-medium text-red-800">{{ $kanban->id }}</h3>
                            <button type="submit" >Submit</button>
                    </form>
                        <p class="text-gray-600 text-base"></p>
                    </div>
                    <span class="text-gray-400"></span>
                </li>
            @endforeach

    </div>
    <div class="content">
      <h4>check</h4>
      @foreach ($kanbans2 as $kanban)
      <li class="flex items-center py-4 px-6 hover:bg-gray-50">
                    <span class="text-gray-700 text-lg font-medium mr-4">{{ $loop->iteration }}.</span>
                    <div class="flex-1">
                    <form action="{{ route('kanban.move',['kanban'=>$kanban,'event'=>$event]) }}" method="GET" enctype="multipart/form-data">
                    @csrf
                    
                    @method('PUT')
                            <h3 id ='name' name='name' class="text-lg font-medium text-gray-800">{{ $kanban->task_name }}</h3>
                            <h3 class="text-lg font-medium text-blue-800">{{ $kanban->writer }}</h3>
                            <h3 class="text-lg font-medium text-red-800">{{ $kanban->description }}</h3>
                            <h3 class="text-lg font-medium text-red-800">{{ $kanban->status }}</h3>
                            <h3 class="text-lg font-medium text-red-800">{{ $kanban->id }}</h3>
                            <button type="submit" >Submit</button>
                    </form>
                        <p class="text-gray-600 text-base"></p>
                    </div>
                    <span class="text-gray-400"></span>
                </li>
            @endforeach
    </div>
    <div class="content">
      <h4>finish</h4>
      @foreach ($kanbans3 as $kanban)
      <li class="flex items-center py-4 px-6 hover:bg-gray-50">
                    <span class="text-gray-700 text-lg font-medium mr-4">{{ $loop->iteration }}.</span>
                    <div class="flex-1">
                            <h3 id ='name' name='name' class="text-lg font-medium text-gray-800">{{ $kanban->task_name }}</h3>
                            <h3 class="text-lg font-medium text-blue-800">{{ $kanban->writer }}</h3>
                            <h3 class="text-lg font-medium text-red-800">{{ $kanban->description }}</h3>
                            <h3 class="text-lg font-medium text-red-800">{{ $kanban->status }}</h3>
                            <h3 class="text-lg font-medium text-red-800">{{ $kanban->id }}</h3>
                    </form>
                        <p class="text-gray-600 text-base"></p>
                    </div>
                    <span class="text-gray-400"></span>
                </li>
            @endforeach
    </div>
</div>
@endsection