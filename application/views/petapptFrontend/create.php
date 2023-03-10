<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Pet Appointment</title>
</head>

<body>
    <div class="container mt-3">
        <div class="row">
            <div class="col-11">
                <h3>Make An Appointment<h3>
            </div>
            <div class="col-1">
                <a href="<?php echo base_url('petappt'); ?>" class="btn btn-danger float-right">Back</a>
            </div>
        </div>
    </div>

    <div class="container mt-3">
        <form action="<?php echo base_url('petappt/store'); ?>" method="POST">
            <div class="mb-3">
                <label for="appointment_date" class="form-label">Appointment Date</label>
                <input type="date" class="form-control" name="appointment_date">
                <small><?php echo form_error('appointment_date') ?></small>
            </div>

            <div class="mb-3">
                <label for="selected_service" class="form-label">Select Service</label>
                
                <select class="form-select" name="selected_service">
                    <option value="">Select A Service</option>
                    <option value="Pet Grooming">Pet Grooming</option>
                    <option value="Pet Sitting">Pet Sitting</option>
                    <option value="Pet Walking">Pet Walking</option>
                </select>

                <small><?php echo form_error('selected_service') ?></small>

            </div>

            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" class="form-control" placeholder="Type in your name">
                <small><?php echo form_error('name') ?></small>
            </div>

            <div class="mb-3">
                <label for="phone" class="form-label">Phone Number</label>
                <input type="text" name="phone" class="form-control" placeholder="Type in your phone number">
                <small><?php echo form_error('phone') ?></small>
                </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email Address</label>
                <input type="text" name="email" class="form-control" placeholder="Type in your email address">
                <small><?php echo form_error('email') ?></small>
            </div>

            <div class="mb-3">
                <label for="pet_number" class="form-label">Number of Pet(s)</label>
                <input type="text" name="pet_number" class="form-control" placeholder="Type in your number of pet(s)">
                <small><?php echo form_error('pet_number') ?></small>
            </div>

            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>
    </div>
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>