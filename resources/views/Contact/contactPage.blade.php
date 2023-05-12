@extends('layout.master')
@section('content')
    <style>
        .card {
            height: 100%;
        }

        
    </style>
    <div class="px-5">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page"></li>
            </ol>
        </nav>

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="home" style="text-decoration: none;" class="text-dark">Ehub</a></li>
                <li class="breadcrumb-item active" aria-current="page">Contact Support</li>
            </ol>
        </nav>
    </div>
    <div>
        <div class="col-15 pb-5" style="text-align: center">
            <h1>Contact Us !</h1>
            <p class="text-secondary" style="font-size: 20px">We are always here to help you whatever way we can.</p>
        </div>
        <form class="cf" action="/support" method="post">
            @csrf
            <div class="container d-flex">
                <div class="row row-cols-1 row-cols-lg-3 g-3 g-lg-1">
                    <div class="col pb-5">
                        <div class="card shadow rounded">
                            <a href="https://accounts.google.com/v3/signin/identifier?dsh=S-1325028933%3A1681892183940442&continue=https%3A%2F%2Fmail.google.com%2Fmail%2Fu%2F0%2F&emr=1&followup=https%3A%2F%2Fmail.google.com%2Fmail%2Fu%2F0%2F&ifkv=AQMjQ7QkhHWgIIk-HjUNmAbpVspOYVmhFq2fLs5kxWOo3FpN-lrcng710oyWEyMSkfEZm5c9GFeBDQ&osid=1&passive=1209600&service=mail&flowName=GlifWebSignIn&flowEntry=ServiceLogin" style="text-decoration: none;">
                                <div class="card-body bg-dark">
                                    <div class="row text-white">
                                        <div class="col " style="text-align: center;">
                                            <i class="fa-regular fa-envelope fa-4x pt-2 mt-4"></i>
                                        </div>
                                        <div class="col  text-align-start pt-3">
                                            <h2>Email Address</h2>
                                            <h5 class="text-secondary">something@example.com</h5>
                                            <h5 class="text-secondary">something@example.com</h5>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col pb-5 ">
                        <div class="card shadow rounded">
                            <a href="https://www.google.com/maps/place/Division+Of+Marikina+City+Schools/@14.6307252,121.0979586,139m/data=!3m1!1e3!4m6!3m5!1s0x3397b8346254fb99:0xdbf3c9ccf3da0ee8!8m2!3d14.6307998!4d121.0978584!16s%2Fg%2F11bzvykdvk!5m1!1e4" style="text-decoration: none;">
                                <div class="card-body bg-dark">
                                    <div class="row text-white">
                                        <div class="col " style="text-align: center;">
                                            <i class="fa-regular fa-envelope fa-4x pt-2 mt-4"></i>
                                        </div>
                                        <div class="col  text-align-start pt-3">
                                            <h2>Address</h2>
                                            <h5 class="text-secondary">000 Kalsada Street,</h5>
                                            <h5 class="text-secondary">Sa tabi tabi lang</h5>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col pb-5">
                        <div class="card shadow rounded">
                            <a href="https://depedmarikina.ph/main/directory" style="text-decoration: none;">
                                <div class="card-body bg-dark">
                                    <div class="row text-white">
                                        <div class="col " style="text-align: center;">
                                            <i class="fa-solid fa-phone fa-3x pt-2 mt-4"></i>
                                        </div>
                                        <div class="col  text-align-start pt-3">
                                            <h2>Contact</h2>
                                            <h5 class="text-secondary">+69 876 543 21</h5>
                                            <h5 class="text-secondary">+69 876 543 21</h5>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                        <div class="col pb-3">
                            <div class="input-group input-group-lg shadow rounded border-0">
                                <input type="text" class="form-control border-0" aria-label="Sizing example input"
                                    aria-describedby="inputGroup-sizing-lg" placeholder="Last Name" name="lastName"
                                    required>
                            </div>
                        </div>
                        <div class="col pb-3">
                            <div class="input-group input-group-lg shadow rounded border-0">
                                <input type="text" class="form-control border-0" aria-label="Sizing example input"
                                    aria-describedby="inputGroup-sizing-lg" placeholder="First Name" name="firstName"
                                    required>
                            </div>
                        </div>
                        <div class="col pb-3">
                            <div class="input-group input-group-lg shadow rounded border-0">
                                <input type="email" class="form-control border-0" id="recipient-email"
                                    aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg"
                                    placeholder="Email" name="email" required>
                            </div>
                        </div>
                        <div class="input-group shadow rounded mt-3">
                            <textarea class="form-control border-0" style="height: 200px;" aria-label="With textarea"
                                placeholder="Enter your message" name="message"></textarea>
                        </div>
                </div>
            </div>
            <div class="col-15 pt-4" style="text-align: center;">
                <button type="button" id="send-message-button" class="btn btn-success shadow rounded pl-5"
                    style="width: 10%">Send Message</button>
            </div>
        </form>

{{-- <script>
            document.getElementById("send-message-button").addEventListener("click", function() {
                const recipientEmail = document.getElementById("recipient-email").value;
                const emailSubject = "My Subject"; // Replace with your own subject
                const emailBody = "My message body"; // Replace with your own message

                const mailtoUrl = "mailto:" + recipientEmail + "?subject=" + encodeURIComponent(emailSubject) +
                    "&body=" + encodeURIComponent(emailBody);
                window.location.href = mailtoUrl;
            });
        </script> --}}
<!-- Footer -->

<footer class="text-center text-lg-start bg-light text-muted p-0">


            <!-- Section: Links  -->

            <section class="">

                <div class="container text-center text-md-start mt-5 p-3">


                    <!-- Grid row -->

                    <div class="row mt-3">





                        <!-- Grid column -->

                        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">





                            <!-- Content -->

                            <h6 class="text-uppercase fw-bold mb-4">

                                <i class="fas fa-gem me-3"></i>DepEd Marikina

                            </h6>

                            <p>

                                The Department of Education was established through the
                                Education Decree of 1863 as the Superior

                                Commission of Primary Instruction under a Chairman. The
                                Education agency underwent many

                                reorganization efforts in the 20th century in order to better
                                define its purpose vis a vis the

                                changing administrations and charters.

                            </p>


                        </div>


                        <!-- Grid column -->

                        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">


                            <!-- Links -->

                            <h6 class="text-uppercase fw-bold mb-4">

                                Related Sites

                            </h6>

                            <p>

                                <a href="https://deped.gov.ph/" class="text-reset" style="text-decoration: none"
                                    target="_blank" rel="noopener noreferrer">Department of Education</a>

                            </p>




                            <p>

                                <a href="https://tesda.gov.ph/" class="text-reset" style="text-decoration: none"
                                    target="_blank" rel="noopener noreferrer">TESDA</a>

                            </p>

                            <p>

                                <a href="https://peac.org.ph/" class="text-reset" style="text-decoration: none"
                                    rel="noopener noreferrer" target="_blank">Private

                                    Education Assistance Committee (PEAC)</a>

                            </p>


                        </div>


                        <!-- Grid column -->

                        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">


                            <!-- Links -->

                            <h6 class="text-uppercase fw-bold mb-4">Contact</h6>

                            <p><i class="fas fa-home me-3"></i> Department of Education

                                Schools Division Office - Marikina City

                                191 Shoe Avenue, Sta. Elena, Marikina City</p>

                            <p>

                                <i class="fas fa-envelope me-3"></i>

                                sdo.marikina@deped.gov.ph

                            </p>

                            <p><i class="fas fa-phone me-3"></i> +63 02 8682-2472 (OSDS)</p>

                            <p><i class="fas fa-print me-3"></i> +63 02 8682-3989 (CID)</p>


                        </div>


                    </div>


                    <!-- Grid row -->


                </div>

            </section>


            <hr style="height: 1px; width:80%; margin: 0 auto;">


            <!-- Copyright -->

            <div class="bg-light py-3 sticky-bottom">

                <div class="container">

                    <div class="row">

                        <div class="col-md-6">

                            <p>&copy; 2023 eHub. All rights reserved.</p>

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

{{-- <!doctype html>
<html lang="en">
<link rel="stylesheet" href="{{ asset('css/contactPage.css') }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>

<body>

    @if(session('flash'))
        <p style="color: lawngreen">{{ session('flash') }}</p>
    @endif

    <h1>Elegant Contact Form</h1>
    <form class="cf" action="/contact" method="post">
        @csrf
        <div class="half left cf">
            <input type="text" id="input-name" placeholder="Name" name="name">
            <input type="email" id="input-email" placeholder="Email address" name="email">
            <input type="text" id="input-subject" placeholder="Subject" name="subject">
        </div>
        <div class="half right cf">
            <textarea name="message" type="text" id="input-message" placeholder="Message"></textarea>
        </div>
        <input type="submit" value="Submit" id="input-submit">
    </form>
</body>

</html> --}}
