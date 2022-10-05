<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">FitNerd</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="index.php">Home<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="about.php">About</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="getatrainer.php">Get a Choach</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="contact.php">Contact</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="myplan.php">My Plan</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="Suppliments.php">Supplements</a>
            </li>
        </ul>
        <div class="mx-2">
            <button class="btn  btn-danger" data-toggle="modal" data-target="#loginModal">Login</button>
            <button class="btn btn-danger" data-toggle="modal" data-target="#signupModal">Sign-Up</button>
            <button class="btn btn-danger" data-toggle="modal" data-target="">Admin</button>
        </div>
    </div>
</nav>
<!-- loginModal -->
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Login for FitNerd</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                            else.</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <button type="submit" class="btn btn-primary">Login</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- SignupModal -->
<div class="modal fade" id="signupModal" tabindex="-1" role="dialog" aria-labelledby="signupModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Sign-Up for FitNerd</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <form action="controllers/register.php" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="exampleInputEmail1">fullname</label>
                        <input type="text" name="fullname" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Fullname">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                            else.</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <label for="CexampleInputPassword1"> Phone Number </label>
                        <input type="int" name="phoneno" class="form-control" id="CexampleInputPassword1" placeholder="Enter Phone number">
                    </div> 
                    <div class="form-group">
                        <label for="CexampleInputPassword1"> Height </label>
                        <input type="int" name="height" class="form-control" id="CexampleInputPassword1" placeholder="Enter Height in Cm">
                    </div>
                    <div class="form-group">
                        <label for="CexampleInputPassword1"> Age </label>
                        <input type="int" name="age" class="form-control" id="CexampleInputPassword1" placeholder="Enter Age">
                    </div>
                    <div class="form-group">
                        <label for="CexampleInputPassword1"> Gender </label>
                        <input type="text" name="gender" class="form-control" id="CexampleInputPassword1" placeholder="Enter Gender">
                    </div>
                    <div class="form-group">
                        <label for="CexampleInputPassword1"> Address </label>
                        <input type="text" name="address" class="form-control" id="CexampleInputPassword1" placeholder="Address">
                    </div>
                    <div class="form-group">
                        <label for="CexampleInputPassword1"> Weight </label>
                        <input type="int" name="weight" class="form-control" id="CexampleInputPassword1" placeholder="Enter your Weight">
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Create Account</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>