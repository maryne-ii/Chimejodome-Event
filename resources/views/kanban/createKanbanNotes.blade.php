@extends('layouts.main')

@section('content')
<div class="w-full">
        <h2 class="text-center text-blue-400 font-bold text-2xl uppercase mb-10">Create New KanbanNote</h2>
        <div class="bg-white p-10 rounded-lg shadow md:w-3/4 mx-auto lg:w-1/2">
            <form action="{{ route('kanban.createKanban',['event'=>$event]) }}" method="GET" enctype="multipart/form-data">
                @csrf
<div class="mb-5">
    <label for="name" class="block mb-2 font-bold text-gray-600">Kanban Name</label>
    <input type="text" id="name" name="name"  placeholder="put name" >

</div>
<div class="mb-5">
    <label for="header" class="block mb-2 font-bold text-gray-600">Writer</label>
    <label for="header" class="block mb-2 font-bold text-blue-600">{{$user->name}}</label>


</div>
<div class="mb-5">
    <label for="name" class="block mb-2 font-bold text-gray-600">Description</label>
    <input type="text" id="description" name="description"  placeholder="put description" >

</div>

<button type="submit" class="block w-full bg-blue-500 text-white font-bold p-4 rounded-lg">Submit</button>

</div>

@endsection