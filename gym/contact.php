<?php include('website/header.php');  ?>


<body>

<?php include('website/navbar.php'); ?>

<div class="container my-4">
    <h2>Contact Us</h2>
    <form>
        <fieldset class="form-group">
            <div class="row">
                <legend class="col-form-label col-sm-2 pt-0">Who are you to FitNerd</legend>
                <div class="col-sm-10">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1"
                               value="option1" checked>
                        <label class="form-check-label" for="gridRadios1">
                            Member.
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2"
                               value="option2">
                        <label class="form-check-label" for="gridRadios2">
                            Trainer.
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3"
                               value="option3">
                        <label class="form-check-label" for="gridRadios3">
                            None of these.
                        </label>
                    </div>
                </div>
            </div>
        </fieldset>
        <div class="form-group">
            <label for="exampleFormControlInput1">Email address</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" required>
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Select your Query</label>
            <select class="form-control" id="exampleFormControlSelect1">
                <option>bodybuilding</option>
                <option>Fatloss</option>
                <option>Gain weight</option>
                <option>Suppliments</option>
                <option>Another</option>
            </select>
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Please write your Concern</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <button class="btn btn-primary">submit</button>
    </form>
</div>
<div class="container my-auto">
    <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-sm-center">
            <li class="page-item"><a class="page-link" href="#">Previous</a></li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">Next</a></li>
        </ul>
    </nav>
</div>

<?php  include('website/footer.php');  ?>

</body>

</html>