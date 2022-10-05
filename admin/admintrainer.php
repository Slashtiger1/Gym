<?php include('admin website/adminheader.php');  ?>


<body>

<?php include('admin website/adminnavbar.php'); ?>
<!-- SignupModal -->
        <div class="container-fluid">
            
            <div class="col-lg-12">
                <div class="row">
                    <!-- FORM Panel -->
                    <div class="col-md-4">
                    <form action="" id="manage-trainer">
                        <div class="card">
                            <div class="card-header">
                                    Trainer Form
                              </div>
                            <div class="card-body">
                                    <input type="hidden" name="id">
                                    <div class="form-group">
                                        <label class="control-label">Name</label>
                                        <input type="text" class="form-control" name="name">
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Email</label>
                                        <input type="email" class="form-control" name="email">
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Contact</label>
                                        <input type="text" class="form-control" name="contact">
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Rate</label>
                                        <input type="number" class="form-control text-right" name="rate">
                                    </div>
                            </div>
                                    
                            <div class="card-footer">
                                <div class="row">
                                    <div class="col-md-12">
                                        <button class="btn btn-sm btn-primary col-sm-3 offset-md-3"> Save</button>
                                        <button class="btn btn-sm btn-default col-sm-3" type="button" onclick="_reset()"> Cancel</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    </div>
                    <!-- FORM Panel -->
        
                    <!-- Table Panel 
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">
                                <b>List of Trainers</b>
                            </div>
                            <div class="card-body">
                                <table class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th class="text-center">#</th>
                                            <th class="text-center">Information</th>
                                            <th class="text-center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                        $i = 1;
                                        $trainer = $conn->query("SELECT * FROM trainers order by id asc");
                                        while($row=$trainer->fetch_assoc()):
                                        ?>
                                        <tr>
                                            <td class="text-center"><?php echo $i++ ?></td>
                                            <td class="">
                                                <p><i class="fa fa-user"></i> <b><?php echo $row['name'] ?></b></p>
                                                <p><small><i class="fa fa-at"></i> <b><?php echo $row['email'] ?></b></small></p>
                                                <p><small><i class="fa fa-phone-square-alt"></i> <b><?php echo $row['contact'] ?></b></small></p>
                                                <p><small><i class="fa fa-money-bill"></i> <b><?php echo number_format($row['rate'],2) ?></b></small></p>
                                                
                                            </td>
                                            <td class="text-center">
                                                <button class="btn btn-sm btn-primary edit_trainer" type="button" data-id="<?php echo $row['id'] ?>" data-name="<?php echo $row['name'] ?>" data-email="<?php echo $row['email'] ?>" data-contact="<?php echo $row['contact'] ?>" data-rate="<?php echo $row['rate'] ?>" >Edit</button>
                                                <button class="btn btn-sm btn-danger delete_trainer" type="button" data-id="<?php echo $row['id'] ?>">Delete</button>
                                            </td>
                                        </tr>
                                        <?php endwhile; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div> -->
                    <!-- Table Panel -->
                </div>
            </div>	
        
        </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
 <?php include('admin website/adminfooter.php');  ?>

</body>

</html>