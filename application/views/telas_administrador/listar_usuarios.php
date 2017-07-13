      
<div class="container">
    <div class="row">
        <button class="btn btn-success"  onclick="modalCliente(null)">Novo Cadastro</button>  
        <hr>
    </div>


</div><!-- /.container -->
<div class="panel panel-primary">
    <div class="panel-heading">
        <h3 class="panel-title">Usuários Cadastrados</h3>
    </div>
    <div class="table-responsive">

        <div class="box-body">

            <table  style="text-align: center;"  class="table table-hover table-bordered  table-striped">

                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>E-mail</th>
                    <th>Login</th>
                    <th>Nivel</th>
                    <th>Status</th>
                    <th></th>
                    <th></th>
                </tr>
                <?php foreach ($usuarios as $user) { ;?>
                <tr>
                    <td><?php echo $user->id ?></td>
                    <td><?php echo $user->nome ?> </td>
                    <td><?php echo $user->email ?></td>
                    <td><?php echo $user->login ?></td>
                    <td><?php echo $user->nivel ?></td>
                    <td><?php echo $user->status ?></td>


                    <td>
                        <a class="btn btn-primary" href="javascript:;" onclick="modalCliente(<?php echo $user->id ?>)">Editar</a>
                    </td>
                    <td>
                        <a class="btn btn-danger" href="<?php echo base_url('Administrador/excluirUsuario?editar='.$user->id) ?>"><span class="fa fa fa-remove">Excluir</span></a>
                    </td>
                </tr>
                <?php } 
                ;?>

            </table>

        </div>
    </div>
</div>


<div class="modal fade bs-example-modal-lg" id="modalCliente" >
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Fechar</span></button>
                <h4 class="modal-title">Tela de Cadastro/Edição de Usuário</h4>
            </div>
            <div class="modal-body">

                <form  method="post"  id="formulario_clientes" method="post" action="<?= base_url('Administrador/cadastrarUsuario') ?>">
                    <div class="form-group">
                        <label for="nome">Nome</label>
                        <input type="text" class="form-control" id="nome" autofocus name="nome" value='' required>
                    </div>
                    <div class="form-group">
                        <label for="email">E-mail</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Login</label>
                        <input type="text" class="form-control" id="login" name="login" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Senha</label>
                        <input type="password" class="form-control" id="senha" name="senha" required>
                    </div>
                    <input type="hidden" name="id" id="id" value="" />
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal" onClick='parent.location="javascript:location.reload()"'>Fechar</button>
                    <button type="submit" class="btn btn-primary">Cadastrar</button>
                </div>
            </form>  
            
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->  


<script>

 /*
* Função que carrega após o DOM estiver carregado.
 * Como estou usando o ajaxForm no formulário, é aqui que eu o configuro.
* Basicamente somente digo qual função será chamada quando os dados forem postados com sucesso.
* Se o retorno for igual a 1, então somente recarrego a janela.
*/
$(function () {

 $('#modalCliente').on('show.bs.modal', function (e) {
    $('.formulario').resetForm();
});

 $('.formulario').ajaxForm({
    success: function (data) {
        if (data == 1) {

//se for sucesso, simplesmente recarrego a página. Aqui você pode usar sua imaginação.
document.location.href = document.location.href;

}
}
});
});

            //Aqui eu seto uma variável javascript com o base_url do CodeIgniter, para usar nas funções do post.
            var base_url = "<?= base_url() ?>";

            /*
             *  Esta função serve para preencher os campos do cliente na janela flutuante
             * usando jSon.  
             */
             function carregaDadosClienteJSon(id_cliente) {
                $.post(base_url + '/Administrador/dadosUsuarioEditar', {
                    id_cliente:id_cliente
                }, function (data) {
                    $('#nome').val(data.nome);
                    $('#email').val(data.email);
                    $('#login').val(data.login);
                    $('#senha').val(data.senha);
                    $('#id').val(data.id_cliente);//aqui eu seto a o input hidden com o id do cliente, para que a edição funcione. Em cada tela aberta, eu seto o id do cliente. 
                }, 'json');
            }

            function modalCliente(id_cliente) {

                if (id_cliente != null) {
                    //antes de abrir a janela, preciso carregar os dados do cliente e preencher os campos dentro do modal

                    carregaDadosClienteJSon(id_cliente);
                }


                $('#modalCliente').modal('show');
            }

        </script>
