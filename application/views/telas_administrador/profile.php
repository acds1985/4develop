<div class="row">
  <div class="col-md-3">
    <!-- Profile Image -->
    <div class="box box-primary">
      <div class="box-body box-profile">
        <img class="profile-user-img img-responsive img-circle" src="<?php echo base_url(); ?>assets/img/<?php echo $userdata->foto;?>" alt="User profile picture">

        <h3 class="profile-username text-center"><?php echo $userdata->nome; ?></h3>

        <p class="text-muted text-center">Administrador</p>

        <ul class="list-group list-group-unbordered">
          <li class="list-group-item">
            <b>Usuário</b> <a class="pull-right"><?php echo $userdata->nome; ?></a>
          </li>
        </ul>
      </div>
    </div>
  </div>

  <div class="col-md-9">
    <div class="nav-tabs-custom">
      <ul class="nav nav-tabs">
        <li class="active"><a href="#settings" data-toggle="tab">Perfil</a></li>
        <li><a href="#password" data-toggle="tab">Alterar senha</a></li>
      </ul>

      <div class="tab-content">
      <!--Aba Perfil -->
        <div class="active tab-pane" id="settings">
          <form class="form-horizontal" action="<?php echo base_url('Profile/update') ?>" method="POST" enctype="multipart/form-data">
            <div class="form-group">
              <label for="inputUsername" class="col-sm-2 control-label">Usuário:</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id= placeholder="Username" name="username" value="<?php echo $userdata->username; ?>">
              </div>
            </div>
            <div class="form-group">
              <label for="inputNama" class="col-sm-2 control-label">Nome</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" placeholder="Nome" name="nome" value="<?php echo $userdata->nome; ?>">
              </div>
            </div>
            <div class="form-group">
              <label for="inputFoto" class="col-sm-2 control-label">Foto</label>
              <div class="col-sm-10">
                <input type="file" class="form-control" placeholder="Foto" name="foto">
              </div>
            </div>
            
            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-success">Alterar</button>
              </div>
            </div>
          </form>
        </div>
         <!--Aba Password -->
        <div class="tab-pane" id="password">
          <form class="form-horizontal" action="<?php echo base_url('Profile/alteraSenha') ?>" method="POST">
            <div class="form-group">
              <label for="SenhaAntiga" class="col-sm-2 control-label">Senha antiga</label>
              <div class="col-sm-10">
                <input type="password" class="form-control"  name="senhaAntiga">
              </div>
            </div>
            <div class="form-group">
              <label for="senhaNova" class="col-sm-2 control-label">Senha nova</label>
              <div class="col-sm-10">
                <input type="password" class="form-control"  name="senhaNova">
              </div>
            </div>
            <div class="form-group">
              <label for="senhaNova2" class="col-sm-2 control-label">Confirmar nova senha</label>
              <div class="col-sm-10">
                <input type="password" class="form-control" name="senhaNova2">
              </div>
            </div>
            
            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-success">Alterar</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>

    <div class="msg" style="display:none;">
      <?php echo $this->session->flashdata('msg'); ?>
    </div>
  </div>
</div>