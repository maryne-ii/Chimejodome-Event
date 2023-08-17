@extends('layouts.main')

@section('content')
    <body body style="background-color: #D9D9D9">
        <div class="Div">
            <h1 class="text-4xl font-semi-bold text-black">Personal Info</h1>
            <h2 class="line"></h2>
            <img src="https://i.pinimg.com/236x/47/5a/86/475a86177aeedacf8dc7f5e2b4eff61f.jpg" alt="default" style="float: left; margin-right: 15px" >
            <h1 style="margin-top: 50px ; padding-left: 250px; ">
                ชื่อ-นามสกุล
            </h1>
            <h1 style="margin-top: 50px ; padding-left: 250px; ">
                ชั้นปี
            </h1>
            <h1 style="margin-top: 50px ; padding-left: 250px; ">
                คณะ
            </h1>
                {{-- <div class="bio">
                    bio
                </div> --}}
                <textarea readonly name="bio" id="bio" cols="20" rows="10" >bio</textarea>
            <h1 style="margin-top: 50px ; padding-left: 250px; ">
                อีเมล
            </h1>
            <h1 style="margin-top: 50px ; padding-left: 250px; ">
                เบอร์
            </h1>
            <h1 style="margin-top: 50px ; padding-left: 250px; ">
                ID LINE
            </h1>
            <h1 style="margin-top: 50px ; padding-left: 250px; ">
                FACEBOOK
            </h1>
            <h1 style="margin-top: 50px ; padding-left: 250px; ">
                INSTAGRAM
            </h1>
            <div style="margin-top: 50px; text-align: center; ">
                <a href="{{  route('profile.edit')   }}">
                    <button class="button" style="background-color: #A1C77B; border-radius: 25px; padding: 10px;">EDIT PROFILE</button>
                </a>
            </div>



        </div>
    </body>
@endsection
