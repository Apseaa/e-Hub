@extends('layout.master1')
@section('bot')
    <style>
        .star-rating {
            display: inline-block;
            font-size: 1em;
            color: gold;
        }

        .star {
            cursor: pointer;
        }
    </style>

    <div class="container-fluid col-md-6 pt-5 ">
        <div class="border-start border-5 border-primary">
            <p class="px-3 fs-5 mb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                incididunt ut
                labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                deserunt mollit anim id est laborum.</p>
        </div>
        <div class="text-align-start">
            <h1 class="text-secondary"><i class="fa-sharp fa-solid fa-book fa-lg mx-2 bg-primary"></i>Title of the article
            </h1>
            <div class="border-bottom border-primary border-3" style="width: 520px;">
            </div>
            <button type="button" class="btn btn-white" data-bs-toggle="tooltip" data-bs-placement="bottom"
                title="Article"><i class="fa-sharp fa-regular fa-folder-open fa-xs"></i>
                Posts
            </button>
            <button type="button" class="btn btn-white" data-bs-toggle="tooltip" data-bs-placement="bottom"
                title="Author Name"><i class="fa-sharp fa-solid fa-user-tie fa-xs"></i>
                Rinrin Caballero
            </button>
            <span class="btn btn-white" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Published Date">
                <i class="fa-sharp fa-solid fa-calendar-days fa-xs"></i>
                April 14 2023
            </span>
            Rating:
            <div class="star-rating">
                <span class="star" onclick="setRating(1)">★</span>
                <span class="star" onclick="setRating(2)">★</span>
                <span class="star" onclick="setRating(3)">★</span>
                <span class="star" onclick="setRating(4)">★</span>
                <span class="star" onclick="setRating(5)">★</span>
            </div>
        </div>
        <p class="pt-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
            labore et dolore magna aliqua. Leo a diam sollicitudin tempor id. Metus aliquam eleifend mi in. Dui faucibus in
            ornare quam viverra. Libero nunc consequat interdum varius sit amet mattis. Enim sed faucibus turpis in. Lectus
            vestibulum mattis ullamcorper velit sed. Senectus et netus et malesuada fames ac turpis egestas. Sit amet risus
            nullam eget. Libero enim sed faucibus turpis in eu. Imperdiet nulla malesuada pellentesque elit. Ac felis donec
            et odio pellentesque diam volutpat commodo sed. Sollicitudin aliquam ultrices sagittis orci a scelerisque purus.
        </p>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
            magna aliqua. Leo a diam sollicitudin tempor id. Metus aliquam eleifend mi in. Dui faucibus in ornare quam
            viverra. Libero nunc consequat interdum varius sit amet mattis. Enim sed faucibus turpis in. Lectus vestibulum
            mattis ullamcorper velit sed. Senectus et netus et malesuada fames ac turpis egestas. Sit amet risus nullam
            eget. Libero enim sed faucibus turpis in eu. Imperdiet nulla malesuada pellentesque elit. Ac felis donec et odio
            pellentesque diam volutpat commodo sed. Sollicitudin aliquam ultrices sagittis orci a scelerisque purus.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
            magna aliqua. Leo a diam sollicitudin tempor id. Metus aliquam eleifend mi in. Dui faucibus in ornare quam
            viverra. Libero nunc consequat interdum varius sit amet mattis. Enim sed faucibus turpis in. Lectus vestibulum
            mattis ullamcorper velit sed. Senectus et netus et malesuada fames ac turpis egestas. Sit amet risus nullam
            eget. Libero enim sed faucibus turpis in eu. Imperdiet nulla malesuada pellentesque elit. Ac felis donec et odio
            pellentesque diam volutpat commodo sed. Sollicitudin aliquam ultrices sagittis orci a scelerisque purus.</p>

        <hr>
        <h6 class="text-secondary ">Also on Content hive</h6>
        <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner pb-5">
                <div class="carousel-item active" data-bs-interval="10000">
                    <div class="card">
                        <div class="card-body" style="text-align: start">
                            <p class="secondary">7 years ago · 3 comments</p>
                            <div class="col">
                                <p class="px-5 mx-5 ">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                    eiusmod tempor incididunt ut labore et dolore magna aliqua...</p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-caption d-none d-md-block pb-5 mb-4">
                        <h5>First slide Title</h5>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                    <div class="card">
                        <div class="card-body" style="text-align: start">
                            <p class="secondary">7 years ago · 3 comments</p>
                            <div class="col">
                                <p class="px-5 mx-5 ">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                    eiusmod tempor incididunt ut labore et dolore magna aliqua...</p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-caption d-none d-md-block pb-5 mb-4">
                        <h5>Second slide Title</h5>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="card">
                        <div class="card-body" style="text-align: start">
                            <p class="secondary">7 years ago · 3 comments</p>
                            <div class="col">
                                <p class="px-5 mx-5 ">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                    eiusmod tempor incididunt ut labore et dolore magna aliqua...</p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-caption d-none d-md-block pb-5 mb-4">
                        <h5>Third slide Title</h5>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>


    <script>
        function setRating(rating) {
            // Remove active class from all stars
            const stars = document.querySelectorAll(".star-rating .star");
            stars.forEach((star) => {
                star.classList.remove("active");
            });

            // Add active class to selected stars
            for (let i = 0; i < rating; i++) {
                stars[i].classList.add("active");
            }
        }
    </script>
@endsection
