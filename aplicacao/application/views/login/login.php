<html>
<head>
    <link rel="stylesheet" href="<?= base_url("css/bootstrap.css") ?>">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>
<div class="container">

    <?php if($this->session->flashdata("success")) : ?>
        <p class="alert alert-success"><?= $this->session->flashdata("success") ?></p>
    <?php endif ?>

    <?php if($this->session->flashdata("danger")) : ?>
        <p class="alert alert-danger"><?= $this->session->flashdata("danger") ?></p>
    <?php endif ?>

    <?php if($this->session->userdata("usuario_logado")) : ?>

        <?= anchor('login/logout','Logout', array("class" => "btn btn-primary"))?>

    <?php else : ?>

        <h1>Login</h1>
        <?php
        echo form_open("login/autenticar");

        echo form_label("Email", "email");
        echo form_input(array(
            "name" => "email",
            "id" => "email",
            "class" => "form-control",
            "maxlength" => "255"
        ));

        echo form_label("Senha", "senha");
        echo form_password(array(
            "name" => "senha",
            "id" => "senha",
            "class" => "form-control",
            "maxlength" => "255"
        ));

        echo form_button(array(
            "class" => "btn btn-primary",
            "content" => "Login",
            "type" => "submit"
        ));

        echo form_close();
        ?>
        <?= anchor('home/novoUsuario','Cadastre-se', array("class" => "btn btn-primary"))?>

    <?php endif ?>

</div>
</body>
</html>