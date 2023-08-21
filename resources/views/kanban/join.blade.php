
@extends('layouts.main')

@section('content')
<ul class="divide-y divide-gray-200">
<div class="bg-white shadow-md rounded-md overflow-hidden max-w-lg mx-auto mt-16">
    <div class="bg-pink-100 py-2 px-4">
        <h2 class="text-xl font-semibold text-gray-800">Attend Join User</h2>
         </div>
            @foreach ($records as $record)
                <li class="flex items-center py-4 px-6 hover:bg-gray-50">
                    <span class="text-gray-700 text-lg font-medium mr-4">{{ $loop->iteration }}.</span>
                    <div class="flex-1">
                            <div>
                                <h3 class="text-lg font-medium text-gray-800">ชื่อ: {{''}} {{(App\Models\User::find($record->user_id))->name}}</h3>
                                <h3 class="text-lg font-medium text-gray-800">ปี:{{''}} {{(App\Models\User::find($record->user_id))->year ? (App\Models\User::find($record->user_id))->year : '-'}}</h3>
                                <h3 class="text-lg font-medium text-gray-800">คณะ:{{''}} {{(App\Models\User::find($record->user_id))->faculty ? (App\Models\User::find($record->user_id))->falculty : '-'}}</h3>
                                <h3 class="text-lg font-medium text-gray-800">email:{{''}} {{(App\Models\User::find($record->user_id))->email}}</h3>
                                <h3 class="text-lg font-medium text-gray-800">เบอร์โทรศัพท์:{{''}} {{(App\Models\User::find($record->user_id))->tel ? (App\Models\User::find($record->user_id))->tel : '-'}}</h3>
                                @if ($record->image_for_event == '-')
                                @else
                                <h3 class="text-lg font-medium text-gray-800">รูป:<img src="{{ asset('storage/' . $record->image_for_event) }}" style="width: 150px; height: 200px;"></h3>
                                @endif


                            </div>
                            <form action="{{ route('kanban.addJoin', ['event' => $event,'user'=>(App\Models\User::find($record->user_id))]) }}" method="GET" enctype="multipart/form-data">
                            <input type="hidden" name="user_id" value="{{ (App\Models\User::find($record->user_id))->id }}">
                            <button type="submit" class="block  bg-blue-500 text-white font-bold p-4 rounded-lg">add</button>
                            </form>
                        <p class="text-gray-600 text-base"></p>
                    </div>
                    <span class="text-gray-400"></span>
                </li>
            @endforeach
        </ul>
        </div>


    <div class="bg-white shadow-md rounded-md overflow-hidden max-w-lg mx-auto mt-16">
    <div class="bg-pink-100 py-2 px-4">
        <h2 class="text-xl font-semibold text-gray-800">Comfirm Join User</h2>
         </div>
            <ul class="divide-y divide-gray-200">
                @foreach ($records2 as $record)
                <li class="flex items-center py-4 px-6 hover:bg-gray-50">
                    <span class="text-gray-700 text-lg font-medium mr-4">{{ $loop->iteration }}.</span>
                    <div class="flex-1">
                        <h3 class="text-lg font-medium text-gray-800">ชื่อ: {{''}} {{(App\Models\User::find($record->user_id))->name}}</h3>
                                <h3 class="text-lg font-medium text-gray-800">ปี:{{''}} {{(App\Models\User::find($record->user_id))->year ? (App\Models\User::find($record->user_id))->year : '-'}}</h3>
                                <h3 class="text-lg font-medium text-gray-800">คณะ:{{''}} {{(App\Models\User::find($record->user_id))->faculty ? (App\Models\User::find($record->user_id))->falculty : '-'}}</h3>
                                <h3 class="text-lg font-medium text-gray-800">email:{{''}} {{(App\Models\User::find($record->user_id))->email}}</h3>
                                <h3 class="text-lg font-medium text-gray-800">เบอร์โทรศัพท์:{{''}} {{(App\Models\User::find($record->user_id))->tel ? (App\Models\User::find($record->user_id))->tel : '-'}}</h3>
                                @if ($record->image_for_event == '-')
                                @else
                                <h3 class="text-lg font-medium text-gray-800">รูป:<img src="{{ asset('storage/' . $record->image_for_event) }}" style="width: 300px; height: 300px;"></h3>
                                @endif

                        <h3 class="text-lg font-medium text-gray-800">{{(App\Models\User::find($record->user_id))->name}}</h3>
                        </a>
                        <p class="text-gray-600 text-base"></p>
                    </div>
                    <span class="text-gray-400"></span>
                </li>
                @endforeach
            </ul>

    </div>
@endsection
