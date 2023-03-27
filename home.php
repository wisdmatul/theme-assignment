<?php get_header(); ?>

<?php if (is_home()) : ?>
    <!-- Features section-->
    <section class="py-5" id="features">
                <div class="container px-5 my-5">
                    <div class="row gx-5">
                        <div class="col-lg-4 mb-5 mb-lg-0"><h2 class="fw-bolder mb-0">MotoWorld can be used for these things:</h2></div>
                        <div class="col-lg-8">
                            <div class="row gx-5 row-cols-1 row-cols-md-2">
                                <div class="col mb-5 h-100">
                                    <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-collection"></i></div>
                                    <h2 class="h5">Finding Accessories</h2>
                                    <p class="mb-0">Find all the spare parts related to the vehicle</p>
                                </div>
                                <div class="col mb-5 h-100">
                                    <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-building"></i></div>
                                    <h2 class="h5">Compare prices</h2>
                                    <p class="mb-0">Compare the Accessories with respect to there prices</p>
                                </div>
                                <div class="col mb-5 mb-md-0 h-100">
                                    <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-toggles2"></i></div>
                                    <h2 class="h5">Stock Record</h2>
                                    <p class="mb-0">Invantory control for the spare parts, for keeping the track</p>
                                </div>
                                <div class="col h-100">
                                    <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-toggles2"></i></div>
                                    <h2 class="h5">Evaluate Products</h2>
                                    <p class="mb-0">Evaluate the Accessories with respect to the rating given with the products</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Testimonial section-->
            <div class="py-5 bg-light">
                <div class="container px-5 my-5">
                    <div class="row gx-5 justify-content-center">
                        <div class="col-lg-10 col-xl-7">
                            <div class="text-center">
                                <div class="fs-4 mb-4 fst-italic">"No matter how bad your day is bike will always make you feel better."</div>
                                <div class="d-flex align-items-center justify-content-center">
                                    <img class="rounded-circle me-3" src="<?php echo (get_template_directory_uri(). '/assets/images/riders-view.webp') ?>" alt="..." />
                                    <div class="fw-bold">
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Blog preview section-->
            <section class="py-5">
                <div class="container px-5 my-5">
                    <div class="row gx-5 justify-content-center">
                        <div class="col-lg-8 col-xl-6">
                            <div class="text-center">
                                
                            </div>
                        </div>
                    </div>
                    <div class="row gx-5">
                        <div class="col-lg-4 mb-5">
                            <div class="card h-100 shadow border-0">
                                <img class="card-img-top" src="<?php echo (get_template_directory_uri(). '/assets/images/tyre2.jpg') ?>" alt="..." />
                                <div class="card-body p-4">
                                    <!-- <div class="badge bg-primary bg-gradient rounded-pill mb-2">News</div> -->
                                    <a class="text-decoration-none link-dark stretched-link" href="#!"><h5 class="card-title mb-3">Tubeless Tyres</h5></a>
                                    <p class="card-text mb-0">Tyres are the primary contact of the vehicle to the road, its better to choose the best. </p>
                                </div>
                                <div class="card-footer p-4 pt-0 bg-transparent border-top-0">
                                    <div class="d-flex align-items-end justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <!-- <img class="rounded-circle me-3" src="https://dummyimage.com/40x40/ced4da/6c757d" alt="..." /> -->
                                            <div class="small">
                                                <div class="fw-bold">Ceat Tyres</div>
                                                <div class="text-muted">March 12, 2022 &middot;</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mb-5">
                            <div class="card h-100 shadow border-0">
                                <img class="card-img-top" src="<?php echo (get_template_directory_uri(). '/assets/images/silencer1.jpg') ?>" alt="..." />
                                <div class="card-body p-4">
                                    <!-- <div class="badge bg-primary bg-gradient rounded-pill mb-2">Media</div> -->
                                    <a class="text-decoration-none link-dark stretched-link" href="#!"><h5 class="card-title mb-3">Megaphone silencer</h5></a>
                                    <p class="card-text mb-0">It does not feel like riding a bullet untill it has some nice sound coming out of exhausts.</p>
                                </div>
                                <div class="card-footer p-4 pt-0 bg-transparent border-top-0">
                                    <div class="d-flex align-items-end justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <!-- <img class="rounded-circle me-3" src="https://dummyimage.com/40x40/ced4da/6c757d" alt="..." /> -->
                                            <div class="small">
                                                <div class="fw-bold">RoadMaster</div>
                                                <div class="text-muted">March 23, 2022 &middot;</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mb-5">
                            <div class="card h-100 shadow border-0">
                                <img class="card-img-top" src="<?php echo (get_template_directory_uri(). '/assets/images/seat.webp') ?>" alt="..." />
                                <div class="card-body p-4">
                                    <!-- <div class="badge bg-primary bg-gradient rounded-pill mb-2">News</div> -->
                                    <a class="text-decoration-none link-dark stretched-link" href="#!"><h5 class="card-title mb-3">Split Seats</h5></a>
                                    <p class="card-text mb-0">Seats are the only thing ina bike that provide you comfirt. The best the seat the more comfirtable you are.</p>
                                </div>
                                <div class="card-footer p-4 pt-0 bg-transparent border-top-0">
                                    <div class="d-flex align-items-end justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <!-- <img class="rounded-circle me-3" src="https://dummyimage.com/40x40/ced4da/6c757d" alt="..." /> -->
                                            <div class="small">
                                                <div class="fw-bold">Rajputana Customs</div>
                                                <div class="text-muted">April 2, 2022 &middot;</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </section>
        </main>

        <?php endif; ?>

        
        <?php get_footer(); ?>