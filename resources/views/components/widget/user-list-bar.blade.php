
@foreach ($users as $user)
<li class="p-2 border-bottom">
    <a href="{{route('message',$user->id)}}" class="d-flex justify-content-between">
        <div class="d-flex flex-row">
            <div>
                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava1-bg.webp"
                    alt="avatar"
                    class="d-flex align-self-center me-3"
                    width="60">
                <span class="badge bg-success badge-dot"></span>
            </div>
            <div class="pt-1">
                <p class="fw-bold mb-0">{{$user->name}}</p>
                <p class="small text-muted">{{$user->email}}
                </p>
            </div>
            {{-- <div class="pt-1">
                <div >
                    <a href="{{route('message',$user->id)}}" class="btn btn-primary">Message</a>
                </div>
            </div> --}}
        </div>

    </a>
</li>
@endforeach


