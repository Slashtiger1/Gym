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
                <a class="nav-link" href="/admin/adminmem.php">Member</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="/admin/admintrainer.php">Trainer</a>
            </li>
        </ul>
        <div class="mx-2">
            <button class="btn  btn-danger" data-toggle="modal" data-target="#loginModal">Login</button>
            <button class="btn btn-danger" data-toggle="modal" data-target="#signupModal">Sign-Up</button>
            <button class="btn btn-danger" data-toggle="modal" data-target="">Admin</button>
        </div>
    </div>
</nav>