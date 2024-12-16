@extends('layouts.app-1')
@section('title', 'Lead Create')
@section('content')

    <main id="main" class="main">


        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Add Leads</h5>

                            <!-- Floating Labels Form -->
                            <form action="{{ route('lead.submit') }}" method="POST" class="row g-3">
                                @csrf
                                <div class="row mt-4">
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="floatingName" name="name"
                                                placeholder="Your Name">
                                            <label for="floatingName">First Name</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="number" class="form-control" name="phn" id="floatingEmail"
                                                placeholder="Enter your phone number">
                                            <label for="floatingEmail">Phone Number</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mt-4">
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="email" class="form-control" id="floatingPassword" name="email"
                                                placeholder="Enter your email">
                                            <label for="floatingPassword">Email Address</label>
                                        </div>
                                    </div>

                                    <div class="col-md-6">

                                        <div class="form-floating">
                                            <input type="number" class="form-control" id="floatingCity"
                                                placeholder="Enter number of people" name="peoples">
                                            <label for="floatingPassword">Number of People</label>
                                        </div>

                                    </div>
                                </div>


                                <div class="row mt-4">

                                <div class="col-md-6">

                                    <div class="form-floating">
                                        <input type="number" class="form-control" id="floatingCity"
                                            placeholder="Enter number of rooms" name="rooms">
                                        <label for="floatingPassword">Number of Rooms</label>

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="number" class="form-control" id="floatingZip"
                                            placeholder="Enter number of extra beds" name="bed">
                                        <label for="floatingZip">Extra Bed</label>
                                    </div>
                                </div>
                                </div>
                                <div class="text-center mt-5">
                                    <button type="submit" class="btn btn-primary">Submit</button>

                                </div>
                            </form><!-- End floating Labels Form -->

                        </div>
                    </div>

                </div>
            </div>
        </section>

    </main><!-- End #main -->
@endsection
