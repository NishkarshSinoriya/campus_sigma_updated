<div id="reg">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-8 col-sm-offset-2">
        <div class="card">
          <div class="container-fluid">
            <div class="row">
              <div class="col-sm-8">
                <div class="left">
                <a href="index.php">
                  <div class="back">
                    <h3>back to home</h3>
                  </div>
                </a>
                <div class="head">
                  <h3>register</h3>
                </div>
                  <form class="" action="handlers/login/register.php" method="post">
                    <div class="grid">

                    <div class="col-sm-12">
                      <div class="input_group">
                        <label for="">register as</label>
                        <select class="input" name="type">
                          <option value="">select</option>
                          <option value="college">college</option>
                          <option value="company">company</option>
                          <option value="student">student</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-sm-12">
                      <div class="input_group">
                        <label for="">username</label>
                        <input class="input" type="text" name="username" value="">
                      </div>
                    </div>
                    <div class="col-sm-12">
                      <div class="input_group">
                        <label for="">email</label>
                        <input class="input" type="text" name="email" value="">
                      </div>
                    </div>
                    <div class="col-sm-12">
                      <div class="input_group">
                        <label for="">password</label>
                        <input class="input" type="text" name="password" value="">
                      </div>
                    </div>
                    <div class="col-sm-12">
                      <div class="input_group">
                        <label for="">confirm password</label>
                        <input class="input" type="text" name="cpassword" value="">
                      </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="button_pane">
                          <button type="submit" name="button">register</button>
                        </div>
                    </div>
                    </div>
                  </form>

              </div>
            </div>
            <div class="col-sm-4">
              <div class="right">
                <div class="text">
                  <h3>campus sigma</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                </div>
                <div class="button_pane" >
                  <p>already have an account?</p>
                    <a href="login.php"><button type="button" name="button">sign in</button></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
</div>
