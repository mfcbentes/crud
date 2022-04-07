<?php

require_once("../templates/header.php");

?>
<div class="container">
    <h2 class="text-center">
        <i class="fa fa-user-plus"></i>
        Page of Register
    </h2>

    <hr>

    <form action="../controller/insert_client.php" method="post">

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="name">
                    <i class="fa fa-user"></i>
                    Nome:
                </label>
                <input type="text" name="name" id="name" class="form-control" required autofocus>
            </div>

            <div class="form-group col-md-6">
                <label for="email">
                    <i class="fa fa-envelope"></i>
                    E-mail:
                </label>
                <input type="email" name="email" id="email" class="form-control" required>
            </div>

            <div class="form-group col-md-4">
                <label for="cpf">
                    <i class="fa fa-address-card"></i>
                    CPF:
                </label>
                <input type="text" name="cpf" id="cpf" class="form-control" id="cpf" required>
            </div>

            <div class="form-group col-md-4">
                <label for="birth">
                    <i class="fa fa-calendar"></i>
                    Data de nascimento:
                </label>
                <input type="date" name="birth" id="birth" class="form-control" required>
            </div>

            <div class="form-group col-md-4">
                <label for="phone">
                    <i class="fa fa-phone"></i>
                    Telefone:
                </label>
                <input type="text" name="phone" id="phone" class="form-control" id="phone" required>
            </div>

            <div class="form-group col-md-12">
                <label for="address">
                    <i class="fa fa-map"></i>
                    Endereço:
                </label>
                <input type="text" name="address" id="address" class="form-control" required>
            </div>

            <div class="col-md-4">
                <button class="btn btn-primary btn-lg">
                    <i class="fa fa-user-plus"></i>
                    Insert Client
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