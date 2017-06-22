<style type="text/css">
  .colorgraph {

  height: 5px;
  border-top: 0;
  background: #c4e17f;
  border-radius: 5px;
  background-image: -webkit-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
  background-image: -moz-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
  background-image: -o-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
  background-image: linear-gradient(to right, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
}
</style>

       <form role="form" action="register.php" method="post" style="margin-top:70px; ">
          <h2>Please Sign Up <small>It's free and always will be.</small></h2>
          <hr class="colorgraph">
            <div class="row">
              <div class="col-md-3 col-sm-2 col-xs-0"></div>
              <div class="col-md-3 col-sm-4 col-xs-6">
                <div class="form-group">
                  <input type="text" name="first_name" id="first_name" class="form-control input-lg" placeholder="First Name" tabindex="1" required>
                </div>
              </div>
              <div class="col-md-3 col-sm-4 col-xs-6">
                <div class="form-group">
                  <input type="text" name="last_name" id="last_name" class="form-control input-lg" placeholder="Last Name" tabindex="2" required>
                </div>
              </div>
              <div class="col-md-3 col-sm-2 col-xs-0"></div>
            </div>
              <div class="row">
                <div class="col-md-3 col-sm-2 col-xs-0"></div>  
              <div class="form-group col-md-6 col-sm-8 col-xs-12">
                  <input type="text" name="user_name" id="display_name" class="form-control input-lg" placeholder="Display Name" tabindex="3" required>
              </div>
              <div class="col-md-3 col-sm-2 col-xs-0"></div>
              </div>
              <div class="row">
                <div class="col-md-3 col-sm-2 col-xs-0"></div>  
              <div class="form-group col-md-6 col-sm-8 col-xs-12">
                  <input type="email" name="email" id="email" class="form-control input-lg" placeholder="Email Address" tabindex="4" required>
              </div>
                <div class="col-md-3 col-sm-2 col-xs-0"></div>
              </div>
              <div class="row">
              <div class="col-md-3 col-sm-2 col-xs-0"></div>
              <div class="col-md-3 col-sm-4 col-xs-6">
          <div class="form-group">
            <input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password" tabindex="5" required>
          </div>
        </div>
        <div class="col-xs-6 col-sm-4 col-md-3">
          <div class="form-group">
            <input type="password" name="password_confirmation" id="password_confirmation" class="form-control input-lg" placeholder="Confirm Password" tabindex="6" required>
          </div>
        </div>
        <div class="col-md-3 col-sm-2 cl-xs-0"></div>
      </div>
      <div class="row">
      <div class="col-md-3 col-sm-2 col-xs-0"></div>
        <div class="col-xs-12 col-sm-8 col-md-7">
          <span class="button-checkbox">
            <button type="button" class="btn" data-color="info" tabindex="7">I Agree</button>
                        <input type="checkbox" name="t_and_c" id="t_and_c" class="hidden" value="1">
          </span>
           By clicking <strong class="label label-primary">Register</strong>, you agree to the <a href="#" data-toggle="modal" data-target="#t_and_c_m">Terms and Conditions</a> set out by this site, including our Cookie Use.
        </div>
        <div class="col-md-2"></div>
      </div>
      <div class="row">
        <div class="col-xs-5 col-sm-6 col-md-5 "></div>
        <div class="col-xs-12 col-md-4"><input type="submit" value="Register" class="btn btn-primary btn-lg" tabindex="7"></div>      
      </div>
      <hr class="colorgraph">
      
    </form>
  
<!--Modal for T&C-->
<div class="modal fade" id="t_and_c_m" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 class="modal-title" id="myModalLabel">Terms & Conditions</h4>
      </div>
      <div class="modal-body">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">I Agree</button>
      </div>
  </div>
  </div>
</div>