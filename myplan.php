<?php include('website/header.php');  ?>


<body>

<?php include('website/navbar.php'); ?>

<body>
    <!-- <div class="alert alert-danger text-center" role="alert">
        <h4 class="alert-heading">Please Fill this Form very Carefully!</h4>
        <p>Based on your Input You will get your Personalized Plan.</p>
    </div> 
    <form>
        <div class="container my-3 text-center">
            <div class="form-group">
              <label for="formGroupExampleInput">Full Name</label>
              <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Your Full Name Please">
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Address</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
              </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                    placeholder="Enter email">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                    else.</small>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
                    <div class="my-4">
                        <div class="form-group">
                            <label for="exampleInputEmail1"> Height in Centimeters</label>
                            <input type="number" class="form-control" aria-describedby="HeightHelp"
                                placeholder="Please enter your height in Centimeters">
                        </div>
                        <div class="my-4">
                            <div class="form-group">
                                <label for="exampleInputEmail1">What's your current body weight? </label>
                                <input type="number" class="form-control" aria-describedby="WeightHelp"
                                    placeholder="Please enter your current body weight? in KG">
                            </div>
                            <div class="my-4">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">What's your current Age ? </label>
                                    <input type="number" class="form-control" aria-describedby="AgeHelp"
                                        placeholder="Please enter your current Age">
                                </div>
                                <div class="my-4">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">What's your Phone Number? </label>
                                        <input type="number" class="form-control" aria-describedby="PhoneHelp"
                                            placeholder="Please enter your Phone Number">
                                    </div>
                                <p>your Gender</p>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                                    <label class="form-check-label" for="gridRadios1">
                                      Male
                                    </label>
                                  </div>
                                  <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                                    <label class="form-check-label" for="gridRadios2">
                                      Female
                                    </label>
                                  </div>
                                  <hr>
                                  <br>
                                  <p>Choose any One from These</p>
                                  <select class="form-select" aria-label="Default select example">
                                    <option selected>What are your goals?</option>
                                    <option value="1">Build Muscle</option>
                                    <option value="2">Lose Fat</option>
                                    <option value="3">Stay healthy</option>
                                  </select>
                </div>
                <div class="container my-5">
                <button type="button" class="btn btn-primary btn-lg">Submit</button>
            </div> -->

            <main>
        <p class="text-center font-weight-bold" style="margin-top: 25px; font-size: large;">Insert your data below to calculate your recommended calories intake!</p>
        <div class="card text-center border-warning-color-dark" style="max-width: 50rem; margin: auto; border: 3px solid orange; width: 50%; margin-top: 30px; min-width: 20rem;">
    
          <table class="table" style="border-spacing: 0rem;">
            <form></form>
              <tbody><tr>
                <td class="T">Gender</td>
                <td class="I">
                  <input type="radio" name="gender" value="male" id="male" checked="checked"> Male &nbsp; &nbsp;
                  <input type="radio" name="gender" value="female" id="female"> Female
                </td>
              </tr>
              <tr>
                <td class="T">Age</td>
                <td class="I" id="AT"><input type="number" min="0" id="age" placeholder="" style="border-width: 2px; border-color: rgb(255, 123, 0); border-radius: 5px;"><div style="display: none;" id="ATT">Please enter valid number</div></td>
              </tr>
              <tr>
                <td class="T">Weight</td>
                <td class="I"><input type="number" min="0" id="weight" style="border-width: 2px; border-color: rgb(255, 123, 0); border-radius: 5px;" placeholder="Kg"><div style="display: none;" id="WTT">Please enter valid number</div></td>
              </tr>
              <tr>
                <td class="T">Height</td>
                <td class="I"><input type="number" min="0" id="height" style="border-width: 2px; border-color: rgb(255, 123, 0); border-radius: 5px;" placeholder="Cm"><div style="display: none;" id="HTT">Please enter valid number</div></td>
              </tr>
            
    
            <tr>
              <td class="T">Exercise level<p>/Activity</p></td>
              <td>
                <select class="custom-select custom-select-sm" style="width: 70%; margin: auto; border-width: 2px; border-color: rgb(255, 123, 0); border-radius: 5px; margin-top: 12px;"> <!--KONO DIO DA -->
                  <option value="0" id="0">Basal Metabolic Rate (BMR)</option>
                  <option value="1" id="1">Little/No exercise</option>
                  <option value="2" id="2">Low activity (exercise 1-3 times/week)</option>
                  <option value="3" id="3">Active (daily exercise or intense exercise 3-4 times/week)</option>
                  <option value="4" id="4">High activity (intense exercise 6-7 times/week)</option>
                  <option value="5" id="5">Very high activity (very intense exercise daily, or physical job)</option>
                </select>
              </td>
            </tr>
          </tbody></table>
    
          <!-- UwU -->
          <button id="B" type="button" onclick="calc()" class="btn btn-amber waves-effect waves-light" style="width: 300px; margin: auto; margin-bottom: 25px; border-radius: 25px;">Calculate</button>
        </div>
    
        <!-- Score -->
        <div id="Final" class="card text-center" style="max-width: 25rem; margin: auto; border: 6px solid orange; width: 50%; margin-top: 45px; background-color:#fff176; border-radius: 20px; color:#ff6d00; display: none; margin-bottom: 30px">
          <table style="margin-top: 15px;">
            <tbody><tr>
              <td class="T" style="font-weight: bold;">Maintain weight <p></p>
              </td>
              <td><div id="a" class="SS">&nbsp;</div><div class="CD">Calories/day</div></td>
            </tr>
            <tr>
              <td class="T" style="font-weight: bold;">Weight loss <p style="font-size: small; color:#888; font-weight: lighter;">0.5 kg/week</p>
              </td>
              <td><div id="b" class="SS">&nbsp;</div><div class="CD">Calories/day</div></td>
            </tr>
            <tr>
              <td class="T" style="font-weight: bold;">Weight gain <p style="font-size: small; color:#888; font-weight: lighter;">0.5 kg/week</p>
              </td>
              <td><div id="c" class="SS">&nbsp;</div><div class="CD">Calories/day</div></td>
            </tr>
          </tbody></table>
        </div>
    
      </main>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script>
    function calc() {
        let A = document.getElementById("age").value;
        let W = document.getElementById("weight").value;
        let H = document.getElementById("height").value;
        let S
        let R
    
    
        // input check
        if (document.getElementById("age").value.length == 0) {
    
            document.getElementById("ATT").style = "color: red;"
            document.getElementById("WTT").style = "display: none;"
            document.getElementById("HTT").style = "display: none;"
    
            return
    
        }
    
        if (document.getElementById("weight").value.length == 0) {
    
            document.getElementById("ATT").style = "display: none;"
            document.getElementById("HTT").style = "display: none;"
            document.getElementById("WTT").style = "color: red;"
            
            return
    
        }
    
        if (document.getElementById("height").value.length == 0) {
    
            document.getElementById("ATT").style = "display: none;"
            document.getElementById("WTT").style = "display: none;"
            document.getElementById("HTT").style = "color: red;"
            
            return
    
        }
    
    
        // Basal
        if (document.getElementById("male").checked) {
            S =  Math.round((9.99*W)+(6.25*H)-(4.92*A)+5)
        } else if (document.getElementById("female").checked) {
            S =  Math.round((9.99*W)+(6.25*H)-(4.92*A)-161)
        }
    
        // Activity 0 (BMR)
        if (document.getElementById("0").selected) {
            R = S
        }
    
        // Activity 1
        if (document.getElementById("1").selected) {
            R = S*1.2
        }
    
        // Activity 2
        if (document.getElementById("2").selected) {
            R = S*1.35
        }
    
        // Activity 3
        if (document.getElementById("3").selected) {
            R = S*1.55
        }
        
        // Activity 4
        if (document.getElementById("4").selected) {
            R = S*1.75
        }
    
        // Activity 5
        if (document.getElementById("5").selected) {
            R = S*1.95
        }
    
        document.getElementById("ATT").style = "display: none;"
        document.getElementById("HTT").style = "display: none;"
        document.getElementById("WTT").style = "display: none;"
    
        document.getElementById("age").placeholder = " "
        document.getElementById("weight").placeholder = "Kg"
        document.getElementById("height").placeholder = "Cm"
    
        document.getElementById("a").innerHTML = Math.round(R)
    
        document.getElementById("b").innerHTML = Math.round(R*0.80)
    
        document.getElementById("c").innerHTML = Math.round(R*1.20)
    
        document.getElementById("Final").style = "max-width: 25rem; margin: auto; border: 6px solid orange; width: 50%; margin-top: 45px; background-color:#fff176; border-radius: 20px; color:#ff6d00; margin-bottom: 30px"
    }
</script>


<?php  include('website/footer.php');  ?>

</body>

</html>