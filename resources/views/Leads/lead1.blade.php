<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Booking Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
        }
        .form-container {
            background: #fff;
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            margin: 50px auto;
        }
        .form-container h1 {
            text-align: center;
            margin-bottom: 20px;
            font-size: 1.8rem;
            color: #333;
        }
        .form-container .btn-primary {
            width: 100%;
            padding: 10px;
            font-size: 1rem;
            border-radius: 5px;
        }
        .form-container label {
            font-weight: bold;
        }
        .form-container .form-control {
            border-radius: 5px;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="form-container">
        <h1>Booking Form</h1>
        <form action="{{ route('lead.submit') }}" method="POST">
            @csrf
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="name" class="form-label">First Name</label>
                    <input type="text" class="form-control" id="name" placeholder="Enter your first name" name="name" required>
                </div>
                <div class="col-md-6">
                    <label for="phn" class="form-label">Phone Number</label>
                    <input type="tel" class="form-control" id="phn" placeholder="Enter your phone number" name="phn" required>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="email" class="form-label">Email Address</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter your email" name="email" required>
                </div>
                <div class="col-md-6">
                    <label for="peoples" class="form-label">Number of People</label>
                    <input type="number" class="form-control" id="peoples" placeholder="Enter number of people" name="peoples" required>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="rooms" class="form-label">Number of Rooms</label>
                    <input type="number" class="form-control" id="rooms" placeholder="Enter number of rooms" name="rooms" required>
                </div>
                <div class="col-md-6">
                    <label for="bed" class="form-label">Extra Bed</label>
                    <input type="number" class="form-control" id="bed" placeholder="Enter number of extra beds" name="bed">
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>
