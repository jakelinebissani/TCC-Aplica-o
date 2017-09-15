<html>
<head>
    <link rel="stylesheet" href="<?= base_url("css/bootstrap.css") ?>">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>
<div class="container">

    <h1>Cadastro de novas Questões</h1>
    <?php
    echo form_open("questoes/nova");

    echo form_label("Enunciado da questão", "enunciado");
    echo form_input(array(
        "name" => "enunciado",
        "id" => "enunciado",
        "class" => "form-control",
        "maxlength" => "255"
    ));
    echo form_button(array(
        "class" => "btn btn-primary",
        "content" => "Cadastrar",
        "type" => "submit"
    ));


    echo form_close();
    ?>

</div>
</body>
</html>