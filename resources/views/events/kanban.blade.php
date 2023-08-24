@extends('layouts.main')

@section('content')
<div class="px-[20rem] py-6">
    <div class="flex gap-10 items-center justify-center">

        <div class="py-4 px-4 w-full text-center bg-[#A1C77B] rounded-full">{{$event->name}}</div>
        <div class="py-4 px-4 w-full text-center bg-white rounded-full"><a href="{{route('events.edit',['event'=>$event])}}">ลงบอร์ด</a></div>
        <div class="py-4 px-4 w-full text-center bg-white rounded-full"><a href="{{route('kanban.join',['event'=>$event])}}">ผู้เข้าร่วม</a></div>
        <div class="py-4 px-4 w-full text-center bg-white rounded-full"><a href="{{route('events.needBudget',['event'=>$event])}}">เบิกงบกิจกรรม</a></div>
        <div class="py-4 px-4 w-full text-center bg-white rounded-full"><a href="{{route('kanban.member',['event'=>$event])}}">สมาชิก</a></div>
    </div>
    <div class="grid grid-cols-12 gap-10 mt-5">
        <div class="bg-white px-3 pb-3 rounded-2xl col-span-3 flex flex-col">
            <div class="py-4 px-4 text-center flex items-baseline justify-between">
                <span>To Do</span>
                <a class="bg-[#A1C77B] px-2 py-1 rounded-md flex justify-center items-center"href="{{ route('kanban.createKanbanPage', ['event' => $event]) }}">+</a>
            </div>
            <hr class="border-[#A1C77B]">
            @foreach ($kanbans0 as $kanban)
            <li class="flex flex-col gap-3 items-left pt-4 pb-2 px-2 hover:bg-gray-50 border-[#A1C77B] border-2 mt-3 rounded-md">
                <form action="{{ route('kanban.move',['kanban'=>$kanban,'event'=>$event]) }}" method="GET" enctype="multipart/form-data">
                    @csrf

                    @method('PUT')
                    <h3 id='name' name='name' class="text-lg font-bold text-gray-800">{{ $kanban->task_name }}</h3>
                    <p class="text-sm font-medium text-red-800 break-all"><?= mb_strimwidth($kanban->description, 0, 25, "...") ?></p>
                    <p class="text-xs font-medium text-red-800 break-all">{{$kanban->writer}}</p>

                    <div class="flex justify-end mt-5 ">
{{--                        <button type="submit" name="button" value="0" class="px-2 py-1  text-white text-xs text-center bg-[#A1C77B] rounded-full">Submit</button>--}}
                        <button type="submit" name="button" value="1" class="px-2 py-1  text-white text-xs text-center bg-[#FF0000] rounded-full">></button>
                    </div>
                </form>
            </li>
            @endforeach
        </div>
        <div class="bg-white px-3 pb-3 rounded-2xl col-span-3 flex flex-col">
            <div class="py-4 px-4 text-center">In Progress</div>
            <hr class="border-[#A1C77B]">
            @foreach ($kanbans1 as $kanban)
            <li class="flex flex-col gap-3 items-left pt-4 pb-2 px-2 hover:bg-gray-50 border-[#A1C77B] border-2 mt-3 rounded-md">
                <form action="{{ route('kanban.move',['kanban'=>$kanban,'event'=>$event]) }}" method="GET" enctype="multipart/form-data">
                    @csrf

                    @method('PUT')
                    <h3 id='name' name='name' class="text-lg font-bold text-gray-800">{{ $kanban->task_name }}</h3>
                    <p class="text-sm font-medium text-red-800 break-all"><?= mb_strimwidth($kanban->description, 0, 25, "...") ?></p>
                    <p class="text-xs font-medium text-red-800 break-all">{{$kanban->writer}}</p>

                    <div class="flex justify-between p-2 mt-5 ">

                        <button type="submit" name="button" value="0" class="px-2 py-1  text-white text-xs text-center bg-[#A1C77B] rounded-full "><</button>
                        <button type="submit" name="button" value="1" class="px-2 py-1  text-white text-xs text-center bg-[#FF0000] rounded-full">></button>
                    </div>
                </form>
            </li>
            @endforeach
        </div>
        <div class="bg-white px-3 pb-3 rounded-2xl col-span-3 flex flex-col">
            <div class="py-4 px-4 text-center">Check</div>
            <hr class="border-[#A1C77B]">
            @foreach ($kanbans2 as $kanban)
            <li class="flex flex-col gap-3 items-left pt-4 pb-2 px-2 hover:bg-gray-50 border-[#A1C77B] border-2 mt-3 rounded-md">
                <form action="{{ route('kanban.move',['kanban'=>$kanban,'event'=>$event]) }}" method="GET" enctype="multipart/form-data">
                    @csrf

                    @method('PUT')
                    <h3 id='name' name='name' class="text-lg font-bold text-gray-800">{{ $kanban->task_name }}</h3>
                    <p class="text-sm font-medium text-red-800 break-all"><?= mb_strimwidth($kanban->description, 0, 25, "...") ?></p>
                    <p class="text-xs font-medium text-red-800 break-all">{{$kanban->writer}}</p>

                    <div class="flex justify-between mt-5 ">
                        <button type="submit" name="button" value="0" class="px-2 py-1  text-white text-xs text-center bg-[#A1C77B] rounded-full "><</button>
                        <button type="submit" name="button" value="1" class="px-2 py-1  text-white text-xs text-center bg-[#FF0000] rounded-full">></button>
                    </div>
                </form>
            </li>
            @endforeach
        </div>
        <div class="bg-white px-3 pb-3 rounded-2xl col-span-3 flex flex-col">
            <div class="py-4 px-4 text-center">Finish</div>
            <hr class="border-[#A1C77B]">
            @foreach ($kanbans3 as $kanban)
            <li class="flex flex-col gap-3 items-left pt-4 pb-2 px-2 hover:bg-gray-50 border-[#A1C77B] border-2 mt-3 rounded-md">
                <form action="{{ route('kanban.move',['kanban'=>$kanban,'event'=>$event]) }}" method="GET" enctype="multipart/form-data">
                    @csrf

                    @method('PUT')
                    <h3 id='name' name='name' class="text-lg font-bold text-gray-800">{{ $kanban->task_name }}</h3>
                    <p class="text-sm font-medium text-red-800 break-all"><?= mb_strimwidth($kanban->description, 0, 25, "...") ?></p>
                    <p class="text-xs font-medium text-red-800 break-all">{{$kanban->writer}}</p>

                    <div class="flex justify-between mt-5">
                        <button type="submit" name="button" value="0" class="px-2 py-1  text-white text-xs text-center bg-[#A1C77B] rounded-full "><</button>
                        <button type="submit" name="button" value="1" class="px-2 py-1  text-white text-xs text-center bg-[#FF0000] rounded-full">></button>
                     </div>

                </form>
            </li>
            @endforeach

        </div>

        </div>



<!-- <div class="grid-1">
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
</div> -->
@endsection
