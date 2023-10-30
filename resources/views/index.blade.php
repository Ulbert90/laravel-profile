@php
    $site_name = get_setting_value('_site_name');
    $jumbotron = get_section_data('JUMBOTRON');
    $about = get_section_data('ABOUT');
    $location = get_setting_value('_location');
    $site_des = get_setting_value('_portofolio');
    $instagram = get_setting_value('_instagram');
    $youtube = get_setting_value('_youtube');
    $whatsapp = get_setting_value('_whastapp');
    $facebook = get_setting_value('_facebook');
    $twitter = get_setting_value('_twitter');
    $github = get_setting_value('_git');
    $partner = get_partners();

@endphp


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="resources/assets/favicon.ico" type="image/x-icon">
    <title>{{ $site_name }}</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}?v={{ time() }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <!-- NAVBAR -->
    <section id="home">
        <nav class="navbar navbar-expand-lg shadow p-3 mb-5 bg-body rounded">
            <div class="container depan">
                <a class="navbar-brand fs-1 text-dark topbar" href="#">{{ $site_name }}</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link rounded fs-6 fas fa-user" href="#about">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link rounded fs-6 fa-solid fa-cog" href="#project">Project</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link rounded fs-6 fas fa-phone" href="#kontak">Contact Me</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </section>
    <!-- NAVBAR END -->

    <!-- ABOUT -->
    <section id="about">
        <div class="container d-block mt-5 ">
            <div class="row">
                <div class="col justify-content-center text-center prof">
                    <img src="{{ Storage::url($jumbotron->thumbnail) }}" alt="profile" width="350"
                        class="rounded-circle bg-primary img-thumbnail" />
                    <div class="h1 mt-3">ABOUT ME</div>
                    <p class="typograph mt-3"> {!! strip_tags($jumbotron->content) !!}
                    </p>
                </div>
            </div>
        </div>

    </section>
    <!-- ABOUT END -->

    <!-- PROJECT -->
    <section id="project">
        @php
            $i = 1;
        @endphp
        <center>
            <h2>PROJECT</h2>
        </center>
        @foreach ($partner as $item)
            <!-- item project  -->
            <div class="container project mt-5">
                <div class="row text-center mt-5">
                    <div class="col">

                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="card card-content m-3">
                            <!-- Tambahkan class "m-3" di sini untuk memberikan jarak -->
                            <img src="{{ storage::url($item->thumbnail) }}"
                                class="mx-auto rounded bg-dark img-thumbnail" style="max-width: 150px;" alt="...">
                            <!-- Atur lebar maksimum gambar -->
                            <div class="card-body">
                                <p class="card-text text-center">{{ $item->title }}</p> <!-- Teks berada di tengah -->
                                <div class="col text-center">
                                    <a class="nav-link fas fa-arrow-right" href="{{ $item->link }}"> GO TO LINK</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @php
                $i++;
            @endphp
        @endforeach
    </section>




    <!-- PROJECT END -->
    <footer class="footer text-center dll" id="kontak">
        <div class="container">
            <div class="row">
                <!--footer loc-->
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <h4 class="fa-solid fa-location-dot m-3 text uppercase mb-4">Location</h4>
                    <p class="lead mb-0">
                        {{ $location }}
                    </p>
                </div>
                <!--social med-->
                <div class="col-lg-4 mb-2 mb-lg-0">
                    <h4 class="fa-solid fa-hashtag text-uppercase mb-4">My Social Media</h4><br>
                    @if ($instagram)
                        <a class="btn btn-outline-danger btn-social mx-1 fs-5" href="{{ $instagram }}"
                            target="blank"><i class="fab fa-fw fa-instagram"></i></a>
                    @endif

                    @if ($facebook)
                        <a class="btn btn-outline-primary btn-social mx-1 fs-5" href="{{ $facebook }}"
                            target="blank"><i class="fab fa-fw fa-facebook-f"></i></a>
                    @endif

                    @if ($youtube)
                        <a class="btn btn-outline-danger btn-social mx-1 fs-5" href="{{ $youtube }}"
                            target="blank"><i class="fab fa-fw fa-youtube"></i></a>
                    @endif


                    @if ($whatsapp)
                        <a class="btn btn-outline-success btn-social mx-1 fs-5" href="{{ $whatsapp }}"
                            target="blank"><i class="fab fa-fw fa-whatsapp"></i></a>
                    @endif

                    @if ($twitter)
                        <a class="btn btn-outline-dark btn-social mx-1 fs-5" href="{{ $twitter }}"
                            target="blank"><i class="fab fa-fw fa-x-twitter"></i></a>
                    @endif

                </div>
                <!-- Footer About Text-->
                <style>
                    li {
                        font-family: cursive;
                        font-size: 25px;
                    }
                </style>
                <div class="col-lg-4 justify-content-center">
                    <h4 class="fa-solid fa-graduation-cap text-uppercase mb-4">SCHOOL</h4>
                    <p class="lead mb-0 ">
                        {!! strip_tags($about->title) !!}<br>
                        <a class="fab fa-fw fa-github text-dark text-center"
                            href="https://github.com/Ulbert90"><i>GitHub</i></a>
                    </p>
                </div>
            </div>
        </div>
    </footer>
    </div>
    </div>
    </footer>

    <!--modal -->
    <!-- CONTATC ME -->


    <div class="copyright py-4 text-center fs-5 ">
        <div class="container"><small>Copyright &copy;{{ $site_name }}
            </small>
        </div>
    </div>

    <!-- CONTATC ME END -->

    <!-- SCRIPTS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
    <script src="https://kit.fontawesome.com/c46db9205b.js" crossorigin="anonymous"></script>
</body>

</html>
