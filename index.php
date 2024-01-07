<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
  </head>
  <body>
 <div class="box" id="mymodal">
      <button type="button" class="close" id="closeButton">&times</button>
      <h2>Registration Form</h2>
      <div class="form-container">
        <form action="reg.php" method="post">
          <div class="input-box">
            <i class="fa fa-user user"></i>
            <input
              type="text"
              placeholder="First Name"
              name="fname"
              class="name"
            />
            <span>
              <i class="fa fa-user user"></i>
              <input
                type="text"
                placeholder="Last Name"
                name="lname"
                class="name"
              />
            </span>
          </div>

          <div class="input-box">
            <i class="fa fa-envelope email"></i>
            <input
              type="text"
              placeholder="Enter Email"
              name="email"
              id="email"
              class="input-text"
              required
            />
          </div>

          <div class="input-box">
            <i class="fa fa-lock lock"></i>
            <input
              type="password"
              placeholder="Enter Password"
              name="password"
              id="password"
              class="input-text"
            />
          </div>

          <div class="input-box">
            <i class="fa fa-lock lock"></i>
            <input
              type="password"
              placeholder="Conform Password"
              name="cpassword"
              id="Cpassword"
              class="input-text"
            />
          </div>

          <!-- <div class="input-box">
            <i class="fa fa-user user"></i>
            <input
              type="file"
              id="myFile"
              name="filename"
              placeholder="Choice file"
              class="input-text"
            />
          </div> -->
          <div class="input-box">
            <input type="radio" name="gender" class="radio-button" />
            <label for="" style="margin-right: 30px; font-size: 17px"
              >Male</label
            >
            <input type="radio" name="gender" class="radio-button" />
            <label for="" style="margin-right: 30px; font-size: 17px"
              >Female</label
            >
            <input type="radio" name="gender" class="radio-button" />
            <label for="" style="margin-right: 30px; font-size: 17px"
              >Other</label
            >
          </div>

          <div class="input-box">
            <select name="selectitem" id="" class="country">
              <option value="">Select a Country</option>
              <option value="">india</option>
              <option value="">China</option>
              <option value="">Shrilanka</option>
              <option value="">Nepal</option>
            </select>
            <div class="arrow"></div>
          </div>
          <div class="input-box">
            <input type="checkbox" id="check-button"  required/>
            <label for="" class="check" 
              >I accept the <a href="">terms and conditions.</a></label
            >
          </div>
          <div class="input-name">
            <input type="submit" class="btn btn-success" value="Register" />
            <div class="link-to-login-page">
              <p id="link-to-login-page">
                Already have an account?<a href="">Login Now</a>
              </p>
            </div>
          </div>
        </form>
      </div>
    </div>
  </body>
  <!-- jQuery library -->
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>

  <!-- Popper JS -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <script
    src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
    crossorigin="anonymous"
  ></script>
  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
    integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
    crossorigin="anonymous"
  ></script>
  <script
    src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
    crossorigin="anonymous"
  ></script>
  <scrip
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
    integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
    crossorigin="anonymous"
  ></scrip>
</html>
