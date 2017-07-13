<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">

    <!-- Sidebar user panel (optional) -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="<?php echo base_url(); ?>assets/img/perfil.jpg" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p><?php echo $this->session->userdata('nome'); ?></p>
        <!-- Status -->
        <a href=""><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>

    <!-- Sidebar Menu -->
<!--    <ul class="sidebar-menu">
      <li class="header">MENU</li>
       Optionally, you can add icons to the links 

      <li <?php if ($page == 'home') {echo 'class="active"';} ?>>
        <a href="<?php echo base_url('Administrador/index'); ?>">
          <i class="fa fa-home"></i>
          <span>Página Inicial</span>
        </a>
      </li>
      <li <?php if ($page == 'usuarios') {echo 'class="active"';} ?>>
        <a href="<?php echo base_url('Administrador/listarUsuarios'); ?>">
          <i class="fa fa-home"></i>
          <span>Usuários</span>
        </a>
      </li>
      <li <?php if ($page == 'questionarios') {echo 'class="active"';} ?>>
        <a href="<?php echo base_url('Administrador/criarQuestionario'); ?>">
          <i class="fa fa-home"></i>
          <span>Questionários</span>
        </a>
      </li>
    </ul>-->
    <!-- /.sidebar-menu -->
  </section>
  <!-- /.sidebar -->
</aside>