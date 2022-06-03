<!doctype html>
<html lang="en">

<head>
    <title></title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.1.0/mdb.min.css" rel="stylesheet" />


    <style>
        #chat3 .form-control {
            border-color: transparent;
        }

        #chat3 .form-control:focus {
            border-color: transparent;
            box-shadow: inset 0px 0px 0px 1px transparent;
        }

        .badge-dot {
            border-radius: 50%;
            height: 10px;
            width: 10px;
            margin-left: 2.9rem;
            margin-top: -.75rem;
        }

    </style>

</head>

<body>
    <div class="contanier" style="height:200%">
        <section style="background-color: #CDC4F9;">
            <div class="container py-5">
                <div class="row">
                    <div class="col-md-12">

                        <div class="card" id="chat3" style="border-radius: 15px;">
                            <div class="card-body">

                                <div class="row">
                                    <div class="col-md-6 col-lg-5 col-xl-4 mb-4 mb-md-0">
                                        <div class="p-3">
                                            <div data-mdb-perfect-scrollbar="true"
                                                style="position: relative; height: 400px">
                                                <ul class="list-unstyled mb-0">
                                                    @php
                                                        $users = App\Models\User::where('id', '!=', auth()->user()->id)->get();
                                                    @endphp
                                                    <x-widget.user-list-bar :users="$users"></x-widget.user-list-bar>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    @yield('content')

                                </div>

                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </section>

    </div>




    <!-- Optional JavaScript; choose one of the two! -->

    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.1.0/mdb.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.0.0-alpha.1/axios.min.js"
        integrity="sha512-xIPqqrfvUAc/Cspuj7Bq0UtHNo/5qkdyngx6Vwt+tmbvTLDszzXM0G6c91LXmGrRx8KEPulT+AfOOez+TeVylg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{ asset('js/app.js') }}"></script>

    <script>
        let rcMessage = document.getElementById('recivde-message')


        Echo.private(`orders.` + {{ auth()->user()->id }}).listen('TestEvent', (e) => {
            console.log('recived: \n', e.message);


            let rcMessageDiv = document.createElement("div");

            rcMessageDiv.innerHTML = ` <div>
                        <p class="small p-2 me-3 mb-1 text-white rounded-3 bg-primary">

                           ${e.message} </p>
                        <p class="small me-3 mb-3 rounded-3 text-muted">12:00 PM | Aug 13
                        </p>
                    </div>
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava1-bg.webp" alt="avatar 1"
                        style="width: 45px; height: 100%;">`;
            rcMessageDiv.className = "d-flex flex-row justify-content-start";

            rcMessage.appendChild(rcMessageDiv)

        })

        console.log(`orders.` + {{ auth()->user()->id }});
    </script>
    <script type="text/javascript">
        let button = document.querySelector('#send')


        button.addEventListener('click', (e) => {

            e.preventDefault();
            let message = document.getElementById('message').value
            let toUser = document.getElementById('userid').value
            let sentMessage = document.getElementById('sent-message')


            let data = {
                _token: '{{ csrf_token() }}',
                message: message,
                userid: toUser
            }

            axios.post('/test', data)
                .then(e => {

                    if (e.status == 200) {
                        console.log("sent \t:", message);
                        let reset = document.getElementById('message')
                        reset.value = ''

                        let sentMessageDiv = document.createElement("div");

                        sentMessageDiv.innerHTML = ` <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava6-bg.webp" alt="avatar 1"
                    style="width: 45px; height: 100%;">
                <div>
                    <p class="small p-2 ms-3 mb-1 rounded-3" style="background-color: #f5f6f7;">
                        ${message}</p>
                    <p class="small ms-3 mb-3 rounded-3 text-muted float-end">12:00 PM |
                        Aug 13</p>
                </div>`;
                        sentMessageDiv.className = "d-flex flex-row justify-content-end";

                        sentMessage.appendChild(sentMessageDiv)
                    }
                })
        })
    </script>
</body>

</html>
