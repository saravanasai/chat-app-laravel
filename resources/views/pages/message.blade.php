@extends('Layouts.app')


@section('content')
    <div class="col-md-6 col-lg-7 col-xl-8">
        <div class="card">
            <div class="card-body">
                <div class="h6">Username: <span>{{ $user->name }}</span></div>
                <div class="h6">Email: <span>{{ $user->email }}</span></div>
            </div>
        </div>
        <div class="pt-3 pe-3" data-mdb-perfect-scrollbar="true" style="position: relative; height: 400px">
            <div id="sent-message">

            </div>
            <div id="recivde-message">

            </div>
        </div>

        <div class="text-muted d-flex justify-content-start align-items-center pe-3 pt-3 mt-2">
            <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava6-bg.webp" alt="avatar 3"
                style="width: 40px; height: 100%;">
            <input type="text" class="form-control form-control-lg" id="message" placeholder="Type message">
            <input type="hidden" class="form-control form-control-lg" id="userid" value="{{ $user->id }}">
            <a class="ms-3" id="send"><i class="fas fa-paper-plane"></i></a>
        </div>

    </div>
@endsection
