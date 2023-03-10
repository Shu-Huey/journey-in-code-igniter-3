<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Pet Appointment</title>
</head>

<body>
    <div class="container mt-3">
        <h2>
            Pet Appointment         
            <a href="<?php echo base_url('petappt/add'); ?>" class="btn btn-primary float-right">Add Appointment</a>
        </h2>
    </div>
    <div class="container mt-3">
        <table class="table table-bordered table-striped table-responsive">
            <thead>
                <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Appt. ID</th>
                    <th scope="col">Appointment Date</th>
                    <th scope="col">Selected Service</th>
                    <th scope="col">Name</th>
                    <th scope="col">Phone Number</th>
                    <th scope="col">Email Address</th>
                    <th scope="col">Number of Pet(s)</th>
                    <th scope="col">Edit Appt.</th>
                    <th scope="col">Cancel Appt.</th>
                </tr>
            </thead>

            <tbody>
                <?php $counter = 1; ?>
                <?php foreach ($petappt as $row) : ?>
                <tr>
                    <td><?php
                    echo $counter; 
                    $counter = $counter + 1;
                    ?></td>
                    <td><?php echo $row->id; ?></td>
                    <td><?php echo $row->appointment_date; ?></td>
                    <td><?php echo $row->selected_service; ?></td>
                    <td><?php echo $row->name; ?></td>
                    <td><?php echo $row->phone; ?></td>
                    <td><?php echo $row->email; ?></td>
                    <td><?php echo $row->pet_number; ?></td>
                    <td>
                        <a href="<?php echo base_url('petappt/edit/'.$row->id) ?>" class="btn btn-success btn-sm">EDIT</a>
                    </td>
                    <td>
                        <a href="<?php echo base_url('petappt/delete/'.$row->id) ?>" class="btn btn-danger btn-sm">CANCEL</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>                    
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>    
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
</body>
</html>