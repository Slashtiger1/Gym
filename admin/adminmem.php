<?php include('admin website/adminheader.php');  ?>


<body>

<?php include('admin website/adminnavbar.php'); ?>
<--Signup Modal -->
    <div class="modal-body">
        <form
            action="{{ isset($action) && $action  == 'update' ? route('category.update',['id'=>$category_data->id]) : route('category.store') }}"
            enctype="multipart/form-data" method="POST" id="category-form">
            @method('POST')
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <?php
            if (old('fullname') != null) {
                $fullname_value = old('fullname');
            } else {
                $fullname_value = isset($category_data->fullname) && !empty($category_data->fullname) ? $category_data->fullname : "";;
            }
            ?>
                <input type="email" name="fullname" value="{{ $fullname_value }}" class="form-control"
                    id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                @error('fullname')
                <label id="fullname-error" class="error" for="fullname">{{ $message }}</label>
                @enderror
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                    else.</small>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1"
                    placeholder="Password">
            </div>
            <div class="form-group">
                <label for="CexampleInputPassword1"> Phone Number </label>
                <input type="Int" name="phoneno" class="form-control" id="CexampleInputPassword1"
                    placeholder="Enter Phone number">
            </div>
            <div class="form-group">
                <label for="CexampleInputPassword1"> Height </label>
                <input type="Int" name="height" class="form-control" id="CexampleInputPassword1"
                    placeholder="Enter Height in Cm">
            </div>
            <div class="form-group">
                <label for="CexampleInputPassword1"> Age </label>
                <input type="Int" name="age" class="form-control" id="CexampleInputPassword1" placeholder="Enter Age">
            </div>
            <div class="form-group">
                <label for="CexampleInputPassword1"> Gender </label>
                <input type="text" name="gender" class="form-control" id="CexampleInputPassword1"
                    placeholder="Enter Gender">
            </div>
            <div class="form-group">
                <label for="CexampleInputPassword1"> Address </label>
                <input type="text" name="address" class="form-control" id="CexampleInputPassword1"
                    placeholder="Address">
            </div>
            <div class="form-group">
                <label for="CexampleInputPassword1"> Weight </label>
                <input type="Int" name="weight" class="form-control" id="CexampleInputPassword1"
                    placeholder="Enter your Weight">
            </div>

            <button type="submit" class="btn btn-primary">Create Account</button>
        </form>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
    </div>
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