<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="css/accordion.css" rel="stylesheet">
    <link href="css/search.css" rel="stylesheet">
    <title>eHub</title>
</head>

<body>
    <div class="container-col mb-5 pt-3" style="background-color:rgb(100, 152, 229 );">
        <div class="b-example-divider"></div>
        <nav class="py-2">
            <div class="container d-flex flex-wrap">
                <ul class="nav me-auto">
                    <li class="nav-item"><a href="home"
                            class="nav-link link-dark px-2 active fa-brands fa-hubspot fa-2xl px-2 p-2 text-white"
                            aria-current="page">eHub</a></li>
                    <li class="nav-item"><a href="home" class="nav-link link-dark px-2 p-1 text-white">Home</a></li>
                    {{-- <li class="nav-item"><a href="community" class="nav-link link-dark px-2 p-1 text-white">Content
                            Hive</a></li> --}}
                    <li class="nav-item"><a href="about" class="nav-link link-dark px-2 p-1 text-white">About</a></li>
                    </li>
                </ul>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-link text-decoration-none text-white" data-bs-toggle="modal"
                    data-bs-target="#staticBackdrop">
                    Admin
                </button>

                <!-- Modal -->
                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false"
                    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog ">
                        <div class="modal-content">
                            <div class="modal-header">
                                <div class="col text-center">
                                    <h5>Sign in</h5>
                                </div>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="timeline-image">
                                    <img class="rounded-circle img-fluid mb-5"
                                        src="https://imgs.search.brave.com/t7LH4e6TuAEF7ZDNHTIVDYjTgBWt6acbrMWztc177Xc/rs:fit:474:225:1/g:ce/aHR0cHM6Ly90c2Ux/Lm1tLmJpbmcubmV0/L3RoP2lkPU9JUC45/NzNJekRfTzBIeUp2/QTVKbVZGbG9BSGFI/YSZwaWQ9QXBp"
                                        alt="..." style="display: block; margin: 0 auto;" />
                                    <form method="POST" action="{{ route('login') }}">
                                        @csrf

                                        <div class="mb-3">
                                            <input type="email" class="form-control border-0 border-bottom"
                                                name="email" id="exampleInputEmail1" aria-describedby="emailHelp"
                                                placeholder="Your email" required>
                                        </div>
                                        <div class="mb-3">
                                            <div class="input-group">
                                                <input type="password" class="form-control border-0 border-bottom"
                                                    name="password" id="exampleInputPassword1"
                                                    placeholder="Your password" required>
                                                <button class="btn btn-outline-none border-bottom" type="button"
                                                    id="showPasswordBtn" onclick="togglePasswordVisibility()">
                                                    <i class="fa-solid fa-eye-slash"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="mb-3 text-end">
                                            <a href="#" class="text-decoration-none">Forgot Password?</a>
                                        </div>
                                        <div class="d-grid gap-2 mb-3 mt-5 w-50 mx-auto">
                                            <button type="submit" class="btn btn-none shadow"
                                                style="background: linear-gradient(to right, #314755 0%, #26a0da 51%, #314755 100%);">
                                                <span class="text-decoration-none text-white">Login</span>
                                            </button>
                                        </div>
                                        <div class="mb-3 text-center text-secondary or-separator">
                                            <span>or</span>
                                        </div>
                                        <div class="mb-3 w-100"
                                            style="display: flex; justify-content: center; align-items: center;">
                                            <button type="button" class="login-with-google-btn"
                                                onclick="window.location.href='https://accounts.google.com/'">
                                                Sign in with Google
                                            </button>
                                        </div>
                                        @if ($errors->any())
                                            <div class="alert alert-danger">
                                                <ul>
                                                    @foreach ($errors->all() as $error)
                                                        <li>{{ $error }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        @endif

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <div class="container-fluid text-center">
            <div class="row justify-content-center pt-5">
                <div class="col-sm-12 col-md-6 col-lg-6 pt-1 my-5 py-5">
                    <h1 class="text-center pb-2 text-white">How can we help?</h1>
                    <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                        tempor
                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam
                    </p>
                    <form class="form-search">
                        <div
                            class="d-flex align-items-center rounded-pill bg-light px-3 py-2 shadow p-3 mb-5 bg-body rounded">
                            <input class="form-control border-0 bg-transparent rounded-pill me-2" type="search"
                                placeholder="Search" aria-label="Search" list="datalistOptions" id="options">
                            <datalist id="datalistOptions">
                                <option value="Rinrin">
                                <option value="Caballero">
                                <option value="Pogi">
                                <option value="San Francisco">
                                <option value="New York">
                                <option value="Seattle">
                                <option value="Los Angeles">
                                <option value="Chicago">
                            </datalist>
                            <button class="btn btn-primary rounded-pill" id="searchbar" type="submit">
                                <i class="fas fa-search"></i></button>
                        </div>
                        <div class="tags-container ">
                            <h6 class="text-white p-2">Popular search :</h6>
                            <span class="tag bg-light"><a href="help" class="link-dark"
                                    style="text-decoration: none;">Sample</a></span>
                            <span class="tag bg-light"><a href="help" class="link-dark"
                                    style="text-decoration: none;">Sample</a></span>
                            <span class="tag bg-light"><a href="help" class="link-dark"
                                    style="text-decoration: none;">Sample</a></span>
                            <span class="tag bg-light"><a href="help" class="link-dark"
                                    style="text-decoration: none;">Sample</a></span>
                            <span class="tag bg-light"><a href="help" class="link-dark"
                                    style="text-decoration: none;">Sample</a></span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="back-to-top-btn"><i class="fa-solid fa-angle-up"></i></div>
    @yield('content')
    <script>
        /*recommendation*/
        const options = document.querySelector('#options');
        options.addEventListener('change', () => {
            const selectedOption = options.value.toLowerCase();
            switch (selectedOption) {
                case 'rinrin':
                case 'Rinrin':
                    window.location.href = 'search';
                    break;
                case 'caballero':
                case 'Caballero':
                    window.location.href = 'search';
                    break;
                case 'pogi':
                case 'Pogi':
                    window.location.href = 'search';
                    break;
                case 'san francisco':
                case 'San Francisco':
                    window.location.href = 'search';
                    break;
                case 'new york':
                case 'New York':
                    window.location.href = 'search';
                    break;
                case 'seattle':
                case 'Seattle':
                    window.location.href = 'search';
                    break;
                case 'los angeles':
                case 'Los Angeles':
                    window.location.href = 'search';
                    break;
                case 'chicago':
                case 'Chicago':
                    window.location.href = 'search';
                    break;
                default:
                    // do nothing
                    break;
            }
        });

        // Search Bar
        const searchbar = document.querySelector('#searchbar');
        const searchInput = document.querySelector('#searchInput');

        searchbar.addEventListener('click', (event) => {
            event.preventDefault(); // prevent the form from submitting
            const query = searchInput.value.trim().toLowerCase();
            if (query !== '') {
                window.location.href = `search?q=${query}`; // change to the correct URL of your search page
            }
        });

        searchInput.addEventListener('input', () => {
            if (searchInput.value.trim() === '') {
                searchbar.disabled = true;
            } else {
                searchbar.disabled = false;
            }
        });
    </script>

    <script>
        window.onscroll = function() {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                document.querySelector('.back-to-top-btn').style.display = "block";
            } else {
                document.querySelector('.back-to-top-btn').style.display = "none";
            }
        }

        document.querySelector('.back-to-top-btn').addEventListener('click', function(e) {
            e.preventDefault();
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        });

        //Hide Password
        function togglePasswordVisibility() {
            var passwordInput = document.getElementById("exampleInputPassword1");
            var showPasswordBtn = document.getElementById("showPasswordBtn");

            if (passwordInput.type === "password") {
                passwordInput.type = "text";
                showPasswordBtn.innerHTML = '<i class="fa-solid fa-eye"></i>';
            } else {
                passwordInput.type = "password";
                showPasswordBtn.innerHTML = '<i class="fa-solid fa-eye-slash"></i>';
            }
        }
    </script>

    <!-- Start of ChatBot (www.chatbot.com) code -->

    <script type="text/javascript">
        window.__be = window.__be || {};
        window.__be.id = "643cb35e2587fe0007a8e611";
        (function() {
            var be = document.createElement('script');
            be.type = 'text/javascript';
            be.async = true;
            be.src = ('https:' == document.location.protocol ? 'https://' : 'http://') +
                'cdn.chatbot.com/widget/plugin.js';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(be, s);
        })();
    </script>
    <!-- End of ChatBot code -->

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script scr="js/script.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
    <script src="https://pingendo.com/assets/bootstrap/bootstrap-4.0.0-alpha.6.min.js"></script>
</body>

</html>
