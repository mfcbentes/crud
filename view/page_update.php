<?php

require_once("../db/Connection.class.php");
require_once("../model/Manager.class.php");
require_once("../templates/header.php");

$manager = new Manager();
$id = $_POST['id'];
$data = $manager->listClient("registros", $id);

?>
<div class="container">
    <h2 class="text-center">
        <i class="fa fa-user-edit"></i>
        Page of Update
    </h2>

    <hr>

    <form action="../controller/update_client.php" method="post">
        <div class="form-row">
            <?php foreach($data as $client): ?>
            <div class="form-group col-md-6">
                <label for="name">
                    <i class="fa fa-user"></i>
                    Nome:
                </label>
                <input type="text" name="name" id="name" class="form-control" required value="<?=$client["name"]?>">
            </div>

            <div class="form-group col-md-6">
                <label for="email">
                    <i class="fa fa-envelope"></i>
                    E-mail:
                </label>
                <input type="email" name="email" id="email" class="form-control" required value="<?=$client["email"]?>">
            </div>

            <div class="form-group col-md-4">
                <label for="cpf">
                    <i class="fa fa-address-card"></i>
                    CPF:
                </label>
                <input type="text" name="cpf" id="cpf" class="form-control" id="cpf" required value="<?=$client["cpf"]?>">
            </div>

            <div class="form-group col-md-4">
                <label for="birth">
                    <i class="fa fa-calendar"></i>
                    Data de nascimento:
                </label>
                <input type="date" name="birth" id="birth" class="form-control" required value="<?=$client["birth"]?>">
            </div>

            <div class="form-group col-md-4">
                <label for="phone">
                    <i class="fa fa-phone"></i>
                    Telefone:
                </label>
                <input type="text" name="phone" id="phone" class="form-control" id="phone" required value="<?=$client["phone"]?>">
            </div>

            <div class="form-group col-md-12">
                <label for="address">
                    <i class="fa fa-map"></i>
                    Endereço:
                </label>
                <input type="text" name="address" id="address" class="form-control" required value="<?=$client["address"]?>">
            </div>
            <input type="hidden" name="id" value="<?=$client["id"]?>">
            <?php endforeach; ?>
            <div class="col-md-4">
                <button class="btn btn-warning btn-lg">
                    <i class="fa fa-user-edit"></i>
                    Update Client
                </button>
                <br>
                <br>
                <a href="../index.php">
                    Voltar
                </a>
            </div>
        </div>

    </form>
</div>
<?php

require_once("../templates/footer.php");

?>