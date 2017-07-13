<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SAIFAC | CPA</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.css">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/eksternal/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/eksternal/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/iCheck/square/blue.css">

</head>
<body style="background-image: url(<?php echo base_url(); ?>assets/img/fundoSAIFAC.png);">

  <div style="background-color: white; 
  border-radius: 20px; 
  width:650px;
  height:auto;
  position:absolute;
  top:50%;
  left:50%;
  margin-top:-250px;
  margin-left:-325px;
  text-align: center;">


  <div class="col-lg-12"><img style="width: 600px" src="<?php echo base_url();?>assets/img/logomarca.png?>"></div>
  <!-- /.login-box-body -->
  <div style="margin-top: 60px" class="row">
   <?php
     echo show_err_msg($this->session->flashdata('error_msg'));
     ?>
   <div class="login-box">
    
     <form action="<?php echo base_url('Login/login'); ?>" method="post">
      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Login" name="login">

      </div>

      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Senha" name="senha">

      </div>
      <div class="form-group">
       <label for="" class="col-sm-1 control-label">Tipo:</label>
         <select class="form-control" name="tipo">
          <option value="1">Aluno</option>
          <option value="2">Professor</option>
          <option value="3">Coordenador</option>
          <option value="4">Técnico-Administrativo</option>
          <option value="5">Comissão de Avaliadores</option>
        </select>
      </div>
    <button type="submit" class="btn btn-primary">Acessar</button>
  </form>

</div>

</div>
</div>






<!-- jQuery 2.2.3 -->
<script src="<?php echo base_url(); ?>assets/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url(); ?>assets/bootstrap/js/bootstrap.min.js"></script>
<!-- iCheck -->
<!-- <script src="<?php echo base_url(); ?>assets/plugins/iCheck/icheck.min.js"></script> -->
    <!-- <script>
      $(function () {
        $('input').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue',
          increaseArea: '20%' // optional
        });
      });sesese
    </script> -->
  </body>
  </html>
