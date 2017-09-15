<!DOCTYPE html>
<html>
<head>
    <title>Home</title>

    <link rel="stylesheet" href="<?= base_url("css/bootstrap.css") ?>">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

</head>
<body>
<div class="container">
    <?= anchor('login/logout', 'Logout', array("class" => "btn btn-primary")) ?>
    <?= anchor('questoes/nova', 'Cadastrar Novas Questões', array("class" => "btn btn-primary")) ?>

    <p>home is here</p>
</div>
</body>
</html>




