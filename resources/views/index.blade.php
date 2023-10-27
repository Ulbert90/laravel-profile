<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="resources/assets/favicon.ico" type="image/x-icon">
    <title>Portofolio | Sari Risky</title>
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
                <a class="navbar-brand fs-1 text-dark topbar" href="#">이력서</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link rounded fas fa-user" href="#about">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link rounded fa-solid fa-cog" href="#project">Project</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link rounded fas fa-phone" href="#kontak">Contact Me</a>
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
                    <img src="https://img.freepik.com/free-vector/isolated-young-handsome-man-different-poses-white-background-illustration_632498-859.jpg?w=740&t=st=1698306586~exp=1698307186~hmac=ef5a3594692fc443a21954e13a1af7900cf12563238010b1c59728dd792697ac"
                        alt="profile" width="350" class="rounded-circle bg-primary img-thumbnail" />
                    <div class="h1 mt-3">ABOUT ME</div>
                    <p class="typograph mt-3"> Dengan latar belakang dalam pengembangan perangkat lunak dan analitik
                        data, saya memiliki pandangan yang tajam dan kemampuan teknis yang kuat. Saya tidak hanya
                        mencari pekerjaan; saya mencari petualangan, inovasi, dan peluang untuk terus berkembang.
                    </p>
                </div>
            </div>
        </div>

    </section>
    <!-- ABOUT END -->

    <!-- PROJECT -->
    <section id="project">
        <div class="container project mt-5">
            <div class="row text-center mt-5">
                <div class="col">
                    <h2>PROJECT</h2>
                </div>
            </div>
        </div>

        <div class="container mb-5">
            <div class="row">
                <div class="col-md-4">
                    <div class="card text-center card-content">
                        <img src="https://img.freepik.com/free-vector/hand-drawn-horoscope-symbol-sagittarius-illustration_53876-63842.jpg?w=740&t=st=1698375162~exp=1698375762~hmac=21d03b1501e5f306fc8182157bae14501d95ea72152a878d1ae3dd0801d85e23"
                            class="mx-auto rounded bg-success img-thumbnail" width="150px" alt="...">
                        <div class="card-body ">
                            <p class="card-text">Centaur API*<br>
                            <div class="col ">
                                <a class="nav-link  fas fa-arrow-right" href="{{ route('centaurapi') }}"> GO TO LINK</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card text-center card-content">
                        <img src="https://document-export.canva.com/WcOas/DAFybxWcOas/3/thumbnail/0001.png?X-Amz-Algorithm=AWS4-HMAC-SHA256&X-Amz-Credential=AKIAQYCGKMUHWDTJW6UD%2F20231026%2Fus-east-1%2Fs3%2Faws4_request&X-Amz-Date=20231026T104522Z&X-Amz-Expires=80540&X-Amz-Signature=aaf3beedb934afb5210757dfe579e174f04c4a3e9440847ced63730924e91acd&X-Amz-SignedHeaders=host&response-expires=Fri%2C%2027%20Oct%202023%2009%3A07%3A42%20GMT"
                            class="mx-auto rounded bg-warning img-thumbnail" width="150px" alt="...">
                        <div class="card-body ">
                            <p class="card-text">Pegasus<br>
                            <div class="col ">
                                <a class="nav-link  fas fa-arrow-right" href="{{ route('pegasus') }}"> GO TO LINK</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card text-center card-content">
                        <img src="https://img.freepik.com/free-vector/flat-design-dragon-silhouette_23-2149486319.jpg?w=740&t=st=1698375374~exp=1698375974~hmac=4601d29d5e7539908e13c1fbf60c32ce2054fb9313c0ea5ff07d58249c52a134"
                            class="mx-auto rounded bg-danger img-thumbnail" width="150px" alt="...">
                        <div class="card-body ">
                            <p class="card-text">DraGo<br>
                            <div class="col  ">
                                <a class="nav-link  fas fa-arrow-right" href="{{ route('dragon') }}"> GO TO LINK</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- PROJECT END -->

    <!-- CONTATC ME -->
    <section id="kontak">
        <div class="container mt-4 mb-4">
            <div class="row">
                <div class="col text-center">
                    <h2>Contact Me</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col text-center">
                    <form>

                        <a href="https://wa.me/6283869345457" class="btn btn-success"><i class="fab fa-whatsapp"></i>
                            Hubungi Saya</a>
                        <a href="https://www.instagram.com/saririsky__/" class="btn btn-danger"><i
                                class="fab fa-instagram"></i> Hubungi Saya</a>
                        <a href="https://www.twitter.com/admin" class="btn btn-dark"><i class="fab fa-x-twitter"></i>
                            Hubungi Saya</a>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- CONTATC ME END -->

    <!-- SCRIPTS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
    <script src="https://kit.fontawesome.com/c46db9205b.js" crossorigin="anonymous"></script>
</body>

</html>
