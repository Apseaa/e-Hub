@extends('layout.master')
@section('content')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item active" aria-current="page">Topics</li>
                        </ol>
                    </nav>
                    <h3 class="mt-2 text-center fw-bold">Android</h3>
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Get to Know Android
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <ul class="" style="list-style: none;">
                                        <?php
                                        // connect to database
                                        $conn = mysqli_connect('localhost', 'root', '', 'ehub');
                                        if (!$conn) {
                                            die('Connection failed: ' . mysqli_connect_error());
                                        }

                                        // query the database
                                        $sql = "SELECT id, title FROM android_table WHERE category='android'";
                                        $result = mysqli_query($conn, $sql);

                                        // loop through the results and display links
                                        if (mysqli_num_rows($result) > 0) {
                                            while ($row = mysqli_fetch_assoc($result)) {
                                                echo '<li class="pb-2">';
                                                echo '<a href="post/android/' . $row['id'] . '/' . '" class="link-dark" style="text-decoration: none;">' . $row['title'] . '</a>';
                                                echo '</li>';
                                            }
                                        } else {
                                            echo '0 results';
                                        }

                                        // close database connection
                                        mysqli_close($conn);
                                        ?>
                                    </ul>


                                </div>
                            </div>
                        </div>
                        <div class="accordion-item
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Use Android Apps
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <ul class="" style="list-style: none;">
                                        <li class="pb-2">
                                            <a href="button" class="link-dark" style="text-decoration: none;">This is an
                                                example
                                                link</a>
                                        </li>
                                        <li class="pb-2">
                                            <a href="button" class="link-dark" style="text-decoration: none;">This is an
                                                example
                                                link</a>
                                        </li>
                                        <li class="pb-2">
                                            <a href="button" class="link-dark" style="text-decoration: none;">This is an
                                                example
                                                link</a>
                                        </li>
                                        <li class="pb-2">
                                            <a href="button" class="link-dark" style="text-decoration: none;">This is an
                                                example
                                                link</a>
                                        </li>
                                        <li>
                                            <a href="button" class="link-dark" style="text-decoration: none;">This is an
                                                example
                                                link</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Change Android Settings
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <ul class="" style="list-style: none;">
                                        <li class="pb-2">
                                            <a href="button" class="link-dark" style="text-decoration: none;">This is an
                                                example
                                                link</a>
                                        </li>
                                        <li class="pb-2">
                                            <a href="button" class="link-dark" style="text-decoration: none;">This is an
                                                example
                                                link</a>
                                        </li>
                                        <li class="pb-2">
                                            <a href="button" class="link-dark" style="text-decoration: none;">This is an
                                                example
                                                link</a>
                                        </li>
                                        <li class="pb-2">
                                            <a href="button" class="link-dark" style="text-decoration: none;">This is an
                                                example
                                                link</a>
                                        </li>
                                        <li>
                                            <a href="button" class="link-dark" style="text-decoration: none;">This is an
                                                example
                                                link</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    Protect your Android devices
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <ul class="" style="list-style: none;">
                                        <li class="pb-2">
                                            <a href="button" class="link-dark" style="text-decoration: none;">This is an
                                                example
                                                link</a>
                                        </li>
                                        <li class="pb-2">
                                            <a href="button" class="link-dark" style="text-decoration: none;">This is an
                                                example
                                                link</a>
                                        </li>
                                        <li class="pb-2">
                                            <a href="button" class="link-dark" style="text-decoration: none;">This is an
                                                example
                                                link</a>
                                        </li>
                                        <li class="pb-2">
                                            <a href="button" class="link-dark" style="text-decoration: none;">This is an
                                                example
                                                link</a>
                                        </li>
                                        <li>
                                            <a href="button" class="link-dark" style="text-decoration: none;">This is an
                                                example
                                                link</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    Get Help with Android
                                </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <ul class="" style="list-style: none;">
                                        <li class="pb-2">
                                            <a href="button" class="link-dark" style="text-decoration: none;">This is an
                                                example
                                                link</a>
                                        </li>
                                        <li class="pb-2">
                                            <a href="button" class="link-dark" style="text-decoration: none;">This is an
                                                example
                                                link</a>
                                        </li>
                                        <li class="pb-2">
                                            <a href="button" class="link-dark" style="text-decoration: none;">This is an
                                                example
                                                link</a>
                                        </li>
                                        <li class="pb-2">
                                            <a href="button" class="link-dark" style="text-decoration: none;">This is an
                                                example
                                                link</a>
                                        </li>
                                        <li>
                                            <a href="button" class="link-dark" style="text-decoration: none;">This is an
                                                example
                                                link</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <br>
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
    <script>
    @endsection
