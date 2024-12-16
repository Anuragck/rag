@extends('layouts.app-1')
@section('title','Lead View')
@section('content')


<main id="main" class="main">

    <div class="pagetitle">
      <h1>Data Tables</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Tables</li>
          <li class="breadcrumb-item active">Data</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
             

              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Unique Number</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone No</th>
                        <th scope="col">No of Peoples</th>
                        <th scope="col">No of Rooms</th>
                        <th scope="col">No of Bed</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($lead as $item)

                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->unique_number }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->email }}</td>
                        <td>{{ $item->phn }}</td>
                        <td>{{ $item->peoples }}</td>
                        <td>{{ $item->rooms }}</td>
                        <td>{{ $item->bed }}</td>
                    </tr>
                    @endforeach





                </tbody>
            </table>
            <!-- End Table with stripped rows -->

          </div>
        </div>

      </div>
    </div>
  </section>

</main><!-- End #main -->
@endsection