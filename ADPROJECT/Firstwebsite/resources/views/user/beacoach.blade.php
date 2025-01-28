<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Venue - File A Report</title>
    <link rel="stylesheet" href="/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="icon" href="{{ URL::asset('images/icon.png') }}" type="image/png">
</head>

<body style="background-color: #efefef;">

    @include('comp.userNav')
    @include('comp.sidbar')
    @if (Auth::user()->gender == '' || Auth::user()->quizstatus == '0')
        <script>
            window.location = "/dashboard";
        </script>
    @endif

    {{-- if theres data count > 1 sweat alert --}}
    @if (count($data) > 1)
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

        <script>
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'you have submit report',
            })
        </script>
    @endif

    {{-- if success a sweat alert --}}

    @if (session('success'))
        {{-- cdn sweet alert --}}
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

        <script>
            // image in the sweet alert
            Swal.fire({
                icon: 'success',
                title: 'Thank you!',
                text: 'you have file a report',
            })
        </script>
    @endif
    {{-- if success a sweat alert --}}

    {{-- if success a sweat alert --}}

    <div id="page-content-wrapper">
        <div class="container mt-5  ">
            <div class="row">
                <div class="col-lg-12">
                    <a href="#menu-toggle" class=" text-success " id="menu-toggle"><svg class="mt-2 mb-2"
                            xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                            class="bi bi-toggles" viewBox="0 0 16 16">
                            <path
                                d="M4.5 9a3.5 3.5 0 1 0 0 7h7a3.5 3.5 0 1 0 0-7h-7zm7 6a2.5 2.5 0 1 1 0-5 2.5 2.5 0 0 1 0 5zm-7-14a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zm2.45 0A3.49 3.49 0 0 1 8 3.5 3.49 3.49 0 0 1 6.95 6h4.55a2.5 2.5 0 0 0 0-5H6.95zM4.5 0h7a3.5 3.5 0 1 1 0 7h-7a3.5 3.5 0 1 1 0-7z" />
                        </svg></i></a>

                    {{-- <h1>Welcome to Your Coaching Dashboard</h1>

                <p>From here, you can manage your coaching schedule, review your progress, and book new coaching sessions or online courses. Use the menu on the left to access different parts of your dashboard, or click on the quick links to jump to specific actions. We hope you find our platform helpful in achieving your sports goals, and we look forward to seeing your progress!</p> --}}
                </div>

            </div>
            <!-- /#page-content-wrapper -->
            <div class="row mb-4">

                <div class="mt-2">

                </div>
                {{-- h1 in green top coaches --}}
                {{-- --}}
                @if (count($data) > 0)
                    <div class="col-md-12">
                        <h1 class="text-success">Your Report Has been Submitted</h1>
                        <p class="text-dark">Thank You for your cooperation. Admin will take further action!!</p>
                    </div>
                    <div class="imageGif">
                        <img src="https://64.media.tumblr.com/20bc582f7f3d22b8b3c65408bdffa7bb/fb0eba7a92a04691-54/s540x810/93301ec2be5458211b6a8f1432fe2204a91fb9c1.gif"
                            alt="" class="img-fluid ">
                    </div>
                @else
                    <div class="">
                        <div class="firstSection" id="home">
                            <div class="container ">
                                <div class="row align-items-center">
                                    <div class="col-md-6">
                                        <img src="../images/paper.jpg" alt=""
                                            class="img-fluid ">
                                    </div>
                                    <div class="col-md-6 ">
                                        <h2 class="text-success ">File a Report</h2>
                                        <p class="text-dark">Make a report or complaint that you thought need a repair or upgrades.Thank you for the cooperation. </p>
                                        <button data-bs-toggle="modal" data-bs-target="#exampleModal"
                                            class="btn btn-success w-75  mt-3 shadow rounded-3">File now !</button>

                                    </div>
                                </div>
                            </div>
                            <div>
                            </div>
                        </div>

                    </div>
                    {{-- <div class="col">
          <div class="card h-100">
            <img src="https://cdn.becomeopedia.com/wp-content/uploads/Sports-Coach.jpg" class="card-img-top" alt="Los Angeles Skyscrapers"/>
            <div class="card-body">
              <h5 class="card-title">Nadia DARIM</h5>
              <p class="card-text">I am a female coach with 4 years of experience , i love Baskete-ball <3 </p>
            </div>
            <div class="card-footer">
              <small class="text-muted"><i class="bi bi-check-all"></i> Online</small>
            </div>
          </div>
        </div> --}}
                    {{-- <div class="col">
          <div class="card h-100">
            <img src="https://media.stack.com/stack-content/uploads/2020/02/11185812/Coach-Communication.jpg" class="card-img-top" alt="Palm Springs Road"/>
            <div class="card-body">
              <h5 class="card-title">Ahmad Yassin CHAFII</h5>
              <p class="card-text">
            I am a Foot-ball player & coach , i have 5 years of experience in the field of coaching.
              </p>
            </div> --}}

            </div>
        </div>
    </div>
    </div>

    </div>
    {{-- top top courses --}}
    @endif
    <!-- /#wrapper -->
    @include('comp.jq')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>

    {{-- modal --}}

    <!-- Button trigger modal -->

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"
        style="z-index: 999999999">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel"><i class="bi bi-clipboard-fill"></i> File A Report!
                    </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('applycoaching') }}" method="post">
                        @csrf
                        <label for="sport">
                            <h5 class="text-success">ROOM :</h5>
                            <input type="text" name="sport" class="form-control" id="sport"
                                placeholder="Room">
                        </label>
                        {{-- years of experience --}}
                        <label for="experience">
                            <h5 class="text-success">ROOM NUMBER:</h5>
                            <input type="number" class="form-control" name="yearsofexperience" id="experience"
                                placeholder="Room Number">
                        </label>
                        {{-- localitaion --}}
                        <label for="location">
                            <h5 class="text-success">Location :</h5>
                            <select class="form-select" aria-label="Default select example" name="location">
                                <option selected>Open this select menu</option>
                                {{-- morocco citys as options value is the name of city --}}
                                <option value="Faculty Computing">Faculty Computing</option>
                                <option value="Rabat">Faculty Mechanical Eng</option>
                                <option value="Marrakech">Faculty Civil Eng</option>

                            </select>
                        </label>
                        {{-- price par hour --}}
                        <label for="price">
                            <h5 class="text-success">Number of Case :</h5>
                            <input type="number" class="form-control" id="price" name="price"
                                placeholder="How many cases?">
                        </label>
                        <label for="motivation">
                            <h5 class="text-success">Description :</h5>
                            <textarea class="form-control" name="description"

                                id="exampleFormControlTextarea1" rows="8" cols="50"></textarea>
                        </label>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
