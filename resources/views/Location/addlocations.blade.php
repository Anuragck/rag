




@extends('layouts.app-1')
@section('title','Lead Create')
@section('content')

<main id="main" class="main">


    <section class="section">
      <div class="row">
        <div class="col-lg-6">

<div class="card">
    <div class="card-body">
        <h5 class="card-title">Add Location</h5>

        <!-- Floating Labels Form -->
        <form action="{{ route('location.save') }}" method="POST">
           @csrf
            <div class="col-md-6">
                <div class="form-floating">
                    <input type="text" id="location" name="location" placeholder="Enter your location" required>
                    
                </div>
            </div>
       
       
            <div class="text-center">
                <button type="submit" class="btn btn-primary">Add</button>
               
            </div>
        </form><!-- End floating Labels Form -->

    </div>
</div>

  </div>
      </div>
    </section>

  </main><!-- End #main -->
@endsection