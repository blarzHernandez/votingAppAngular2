<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">VotingAPP</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="<?php echo base_url();?>">Home <span class="sr-only">(current)</span></a></li>
        <li><a href="index.php?/home/destroySession/">Salir</a></li>
        
      </ul>
       <div class = 'row' style="color:white;" > <?php echo "Hola: " . $this->session->userdata("userName");?></div>

     
    </div>
  </div>
</nav>