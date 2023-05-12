@extends('layout.master1')
@section('bot')
    <div class="container-fluid" style="background-color: white; padding: 20px;">
        <div class="row">
            <div class="col-sm-12 col-md-7 col-lg-7 mt-5" id="scrollable-column">
                <div class="col-md-15">
                    <div class="overflow-auto p-3" style="width: 100%; max-height: 1000px;" id="contents">
                        @for ($i = 0; $i < 5; $i++)
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <img class="card-img-top rounded-pill" style="width: 50px;"
                                            src="https://scontent.fmnl17-4.fna.fbcdn.net/v/t1.15752-9/321376570_535500711674006_452399297377209167_n.png?_nc_cat=105&ccb=1-7&_nc_sid=ae9488&_nc_eui2=AeE6zYS3zRMZDBphTMWYhRZMW7UHGvq837BbtQca-rzfsES9JBw9ekctN6vZ-6Ch3YU0ZX4MpJ8qck3mvIXVLxol&_nc_ohc=Yolpjl7IYEIAX-f27WM&_nc_ht=scontent.fmnl17-4.fna&oh=03_AdT5ZZaaFP8XKo8NF2ahrtJ85y4u-vtgsmbO-L7Upo8ZtA&oe=645DD402"
                                            alt="Title">
                                        <div class="d-flex flex-column mx-2">
                                            <h4 class="card-title pt-5">Rinrin Caballero</h4>
                                            <p class="text-muted"><i class="fas fa-earth-americas"></i> Public</p>
                                        </div>
                                    </div>

                                    <small class="text-success">1 hour ago</small>
                                    <a href="article" class="text-decoration-none link-dark"> <p class="text-dark">It is a long established fact that a reader will be distracted
                                        by the readable content of a page when looking at its layout. The point of using
                                        Lorem Ipsum is
                                        that it has a more-or-less norm</a></p>
                                    <div class="rating">
                                        <input type="radio" name="rating" id="star5" value="5">
                                        <label for="star5"><i class="fas fa-star"></i></label>
                                        <input type="radio" name="rating" id="star4" value="4">
                                        <label for="star4"><i class="fas fa-star"></i></label>
                                        <input type="radio" name="rating" id="star3" value="3">
                                        <label for="star3"><i class="fas fa-star"></i></label>
                                        <input type="radio" name="rating" id="star2" value="2">
                                        <label for="star2"><i class="fas fa-star"></i></label>
                                        <input type="radio" name="rating" id="star1" value="1">
                                        <label for="star1"><i class="fas fa-star"></i></label>
                                    </div>
                                </div>
                            </div>
                        @endfor
                    </div>
                </div>
            </div>
            <div class="col-md-3 d-flex align-items-start" id="fixed-column" style="margin-left: 100px;">
                <div>
                    <h4 class="mt-5 pt-5">Related Post</h4>
                    <div>
                        <div class="list-group list-group-flush">
                            <a href="page2"
                                class="list-group-item list-group-item-action bi bi-card-text border border-0">
                                Quis autem vel eum iure reprehenderit
                            </a>
                            <a href="button"
                                class="list-group-item list-group-item-action bi bi-card-text border border-0">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit
                            </a>
                            <a href="page2"
                                class="list-group-item list-group-item-action bi bi-card-text border border-0">
                                Ut enim ad minim veniam
                            </a>
                            <a href="button"
                                class="list-group-item list-group-item-action bi bi-card-text border border-0">
                                Duis aute irure dolor in reprehenderit in voluptate velit esse
                            </a>
                            <a href="page2"
                                class="list-group-item list-group-item-action bi bi-card-text border border-0">
                                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                                mollit
                                anim
                                id est laborum
                            </a>
                            <a href="button"
                                class="list-group-item list-group-item-action bi bi-card-text border border-0">
                                Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                            </a>
                        </div>
                    </div>

                    <h6 class="p-4 text-center">Tags :</h6>
                    <div class="tags-container ">
                        <span class="tag bg-white"><a href="help" class="link-dark"
                                style="text-decoration: none;">Sample</a></span>
                        <span class="tag bg-white"><a href="help" class="link-dark"
                                style="text-decoration: none;">Sample</a></span>
                        <span class="tag bg-white"><a href="help" class="link-dark"
                                style="text-decoration: none;">Sample</a></span>
                        <span class="tag bg-white"><a href="help" class="link-dark"
                                style="text-decoration: none;">Sample</a></span>
                        <span class="tag bg-white"><a href="help" class="link-dark"
                                style="text-decoration: none;">Sample</a></span>
                        <span class="tag bg-white"><a href="help" class="link-dark"
                                style="text-decoration: none;">Sample</a></span>
                        <span class="tag bg-white"><a href="help" class="link-dark"
                                style="text-decoration: none;">Sample</a></span>
                        <span class="tag bg-white"><a href="help" class="link-dark"
                                style="text-decoration: none;">Sample</a></span>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <footer>
            <div class="bg-light py-3 sticky-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <p>&copy; 2021 My Company. All rights reserved.</p>
                        </div>
                        <div class="col-md-6 text-md-end">
                            <a href="#">Privacy Policy</a>
                            <span class="mx-2">|</span>
                            <a href="#">Terms of Service</a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
@endsection
