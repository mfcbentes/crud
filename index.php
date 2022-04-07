<?php

require_once("db/Connection.class.php");
require_once("model/Manager.class.php");
require_once("templates/header.php");

$manager = new Manager();

?>
<div class="container">
    <h2 class="text-center">
        <i class="fa fa-list"></i>
        List of Clients
    </h2>

    <h5 class="text-right">
        <a href="view/page_register.php" class="btn btn-primary btn-xs">
            <i class="fa fa-user-plus"></i>
        </a>
    </h5>

    <div class="table-responsive">
        <table class="table table-hover">
            <thead class="thead">
                <tr>
                    <th>ID</th>
                    <th>NOME</th>
                    <th>E-MAIL</th>
                    <th>CPF</th>
                    <th>DT. NASC.</th>
                    <th>ENDEREÇO</th>
                    <th>TELEFONE</th>
                    <th colspan="3">AÇÕES</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($manager->listClients("registros") as $client) : ?>
                    <tr>
                        <td><?php echo $client['id']; ?></td>
                        <td><?php echo $client['name']; ?></td>
                        <td><?php echo $client['email']; ?></td>
                        <td><?php echo $client['cpf']; ?></td>
                        <td><?php echo date("d/m/Y", strtotime($client['birth'])); ?></td>
                        <td><?php echo $client['address']; ?></td>
                        <td><?php echo $client['phone']; ?></td>
                        <td>
                            <form action="view/page_update.php" method="post">
                                <input type="hidden" name="id" value="<?= $client['id'] ?>">
                                <button class="btn btn-warning btn-xs">
                                    <i class="fa fa-user-edit"></i>
                                </button>
                            </form>
                        </td>
                        <td>
                            <form method="post" action="controller/delete_client.php" onclick="return confirm('Você tem certeza que deseja excluir?');">
                                <input type="hidden" name="id" value="<?= $client['id'] ?>">
                                <button class="btn btn-danger btn-xs">
                                    <i class="fa fa-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
<?php
require_once("templates/footer.php");
?>