@extends('main')

@section('navbar')
    <a href="{{ url('/') }}" class="nav-item nav-link">Home</a>
    <a href="{{ url('/shop') }}" class="nav-item nav-link">Shop</a>
    <a href="{{ url('/testimonials') }}" class="nav-item nav-link">Testimonial</a>
    <a href="{{ url('/contact') }}" class="nav-item nav-link">Contact</a>
    </div>
    <div class="d-flex m-3 me-0">
        <a href="{{ url('/wishlist') }}" class="position-relative me-4 my-auto">
            <i class="fa fa-heart fa-2x"></i>
        </a>
        <a href="{{ url('/cart') }}" class="position-relative me-4 my-auto">
            <i class="fa fa-shopping-bag fa-2x"></i>
            <span
                class="position-absolute bg-secondary rounded-circle d-flex align-items-center justify-content-center text-light px-1"
                style="top: -5px; left: 15px; height: 20px; min-width: 20px;">3</span>
        </a>
        <a href="{{ url('/login') }}" class="my-auto">
            <i class="fas fa-user fa-2x text-secondary"></i>
        </a>
    @endsection

    @section('body')
        <section class="vh-100" style="background-color: #E981A4;">
            <div class="container py-5 h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col col-xl-10">
                        <div class="card" style="border-radius: 1rem;">
                            <div class="row g-0">
                                <div class="col-md-6 col-lg-5 d-none d-md-block">
                                    <img src="img/login.png" alt="login form" class="img-fluid"
                                        style="border-radius: 1rem 0 0 1rem;" />
                                </div>
                                <div class="col-md-6 col-lg-7 d-flex align-items-center">
                                    <div class="card-body p-4 p-lg-5 text-black">

                                        <form>

                                            <div class="d-flex align-items-center mb-3 pb-1">

                                                <span class="h1 fw-bold mb-0">Forgot Password</span>
                                            </div>


                                            <div data-mdb-input-init class="form-outline mb-4">
                                                <input type="email" id="form2Example17"
                                                    class="form-control form-control-lg" />
                                                <label class="form-label" for="form2Example17">Email address</label>
                                            </div>

                                            <div data-mdb-input-init class="form-outline mb-4">
                                                <input type="new password" id="form2Example27"
                                                    class="form-control form-control-lg" />
                                                <label class="form-label" for="form2Example27">New Password</label>
                                            </div>

                                            <div data-mdb-input-init class="form-outline mb-4">
                                                <input type="confirm password" id="form2Example27"
                                                    class="form-control form-control-lg" />
                                                <label class="form-label" for="form2Example27">Confirm Password</label>
                                            </div>

                                            <div class="pt-1 mb-4">
                                                <button type="submit" data-mdb-button-init data-mdb-ripple-init
                                                    class="btn btn-primary btn-block mb-4 text-center w-100">
                                                    Reset Password
                                                </button>
                                            </div>
                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endsection
