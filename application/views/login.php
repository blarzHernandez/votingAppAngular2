<form class="form-horizontal" action="index.php?/home/login" method="POST">
  <fieldset>
    <legend>Login</legend>
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Username</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" data-bv-notempty="true" required  name="username" id="username" placeholder="username">
      </div>
    </div>
    <div class="form-group">
      <label for="inputPassword" class="col-lg-2 control-label">Password</label>
      <div class="col-lg-10">
        <input type="password" class="form-control" data-bv-notempty="true"  name="password" required id="password" placeholder="Password">
      </div>
    </div>     
    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
        <a data-toggle="modal" class="btn btn-default" href="<?php echo base_url('index.php?/home/loadUserRegistration'); ?>" data-target="#userRegistration">Sign Up!</a>
        <a type="button" class="btn btn-default" href="<?php  echo base_url('/index.php?/home/login'); ?>" >Log In</a>
      </div>
    </div>
  </fieldset>
</form>
<!-- Modal -->
<div class="modal fade" id="userRegistration" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
   <div class="modal-content">
   </div> <!-- /.modal-content -->
 </div> <!-- /.modal-dialog -->
</div> <!-- /.modal -->
