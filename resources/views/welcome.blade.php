@extends('Layouts.app')

@section('content')
<div class="container">
    <div class="row clearfix">
        <div class="col-lg-12">
            <div class="card chat-app">

                <div class="chat">
                    <div class="chat-history">
                        <ul class="m-b-0">
                            <li class="clearfix">
                                <div class="message-data text-right">
                                    <span class="message-data-time">{{Auth::user()->name}}</span>
                                    <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="avatar">
                                </div>
                                <div id="sent-message">

                                </div>
                                <div id="recivde-message">

                                </div>

                            </li>
                        </ul>
                    </div>
                    <div class="chat-message clearfix">
                        <div class="input-group mb-0" style="display: flex">
                            <label>To User ID</label>
                            <input type="number" id="userid" class="form-control" placeholder="Message To user ID">
                            <input type="text" id="message" class="form-control" placeholder="Enter text here...">
                            <div class="input-group-prepend" style="margin-left: 25px" id="send">
                               <h3> <span class="input-group-text"><i class="fa fa-send"></i></span></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
