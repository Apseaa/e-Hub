@extends('layout.master')
@section('content')
    <div class="album py-5 d-flex align-center">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-8">
                    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                        <!-- Card 1 -->
                        <div class="col">
                            <div class="card shadow-lg">
                                <a href="help" style="text-decoration: none;">
                                    <div class="card-body">
                                        <i
                                            class="fa-brands fa-android fa-2xl mx-5 position-absolute top-50 start-0 translate-middle"></i>
                                        <p class="card-text p-5 text-dark text-center mt-3">Android</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!-- Card 2 -->
                        <div class="col">
                            <div class="card shadow-lg">
                                <a href="help" style="text-decoration: none;">
                                    <div class="card-body">
                                        <i
                                            class="fa-solid fa-wifi fa-2xl mx-5 position-absolute top-50 start-0 translate-middle"></i>
                                        <p class="card-text p-5 text-dark text-center mt-3">Internet</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!-- Card 3 -->
                        <div class="col">
                            <div class="card shadow-lg">
                                <a href="help" style="text-decoration: none;">
                                    <div class="card-body">
                                        <i
                                            class="fa-solid fa-cloud-arrow-down fa-2xl mx-5 position-absolute top-50 start-0 translate-middle"></i>
                                        <p class="card-text p-5 text-dark text-center mt-3">Backup</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!-- Card 4 -->
                        <div class="col">
                            <div class="card shadow-lg">
                                <a href="help" style="text-decoration: none;">
                                    <div class="card-body">
                                        <i
                                            class="fa-solid fa-envelope fa-2xl mx-5 position-absolute top-50 start-0 translate-middle"></i>
                                        <p class="card-text p-5 text-dark text-center mt-3">Email</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!-- Card 5 -->
                        <div class="col">
                            <div class="card shadow-lg">
                                <a href="help" style="text-decoration: none;">
                                    <div class="card-body">
                                        <i
                                            class="fa-solid fa-network-wired fa-2xl mx-5 position-absolute top-50 start-0 translate-middle"></i>
                                        <p class="card-text p-5 text-dark text-center mt-3">Network</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!-- Card 6 -->
                        <div class="col">
                            <div class="card shadow-lg">
                                <a href="help" style="text-decoration: none;">
                                    <div class="card-body">
                                        <i
                                            class="fa-solid fa-microchip fa-2xl mx-5 position-absolute top-50 start-0 translate-middle"></i>
                                        <p class="card-text p-5 text-dark text-center mt-3">Hardware</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container pt-5 ">
                    <div class="row justify-content-md-center">
                        <div class="col-md-auto text-center">
                            <h3 class="pb-3">Can't find what you're looking for?</h3>
                            <p class="pb-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                tempor incididunt ut labore et
                                dolore magna aliqua.</p>
                            <a href="contact"><button type="button" class="btn btn-primary w-30 p-3 rounded-pill">Contact
                                    Support</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
                            The Department of Education was established through the Education
                            Decree of 1863 as the Superior

                            Commission of Primary Instruction under a Chairman. The Education
                            agency underwent many

                            reorganization efforts in the 20th century in order to better define
                            its purpose vis a vis the

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
                            <a href="https://deped.gov.ph/" class="text-reset"
                                style="text-decoration: none" target="_blank"
                                rel="noopener noreferrer">Department of Education</a>
                            </p>
                        <p>
                            <a href="https://tesda.gov.ph/" class="text-reset"
                                style="text-decoration: none" target="_blank"
                                rel="noopener noreferrer">TESDA</a>
                            </p>
                        <p>
                            <a href="https://peac.org.ph/" class="text-reset"
                                style="text-decoration: none" rel="noopener noreferrer"
                                target="_blank">Private

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
