<?php

include '../controllers/userRegister.php';
?>


<!--Page : My_porfolio generator     FEATURE Wor in progress-->
<section id="my_porfolio_generator">
    <p id="anim_work_in_progress">
        WORK IN PROGRESS
    </p>
</section>


<div align="center">
    <form name="form_register" id="form_register" class="displayAll" action="" method="post">
        <h2>Formulaire d'inscription</h2>
        <div id="line"></div>
        <label for="name">Name:</label><br />
        <input type="text" id="name" name="name" maxlength="20" value="riozacki" required><br />
        <label for="first_name">First-name:</label><br />
        <input type="text" id="first_name" name="first_name" maxlength="20" value="rio" required><br />
        <label for="mail">E-mail:</label><br />
        <input type="mail" id="mail" name="mail" maxlength="25" value="riozacki@gmx.com" required><br />
        <label for="mailConfirm">E-mail confirm:</label><br />
        <input type="mail" id="mailConfirm" name="mailConfirm" maxlength="25" value="riozacki@gmx.com" required><br />
        <label for="password">Password:</label><br />
        <input type="password" id="password" name="password" maxlength="150" value="123456" required><br />
        <label for="passwordConfirm">Password confirm:</label><br />
        <input type="password" id="passwordConfirm" name="passwordConfirm" maxlength="150" required><br />
        <input type="submit" id="register" name="formRegister" value="Start"><br />
    </form>
</div>

<div align="center">
    <form action="" method="post" id="form_connexion">
        <h2>Formulaire de connexion</h2><br />
        <div id="line">
            <label for="nom">Entrez votre Nom:</label><br />
            <input pattern="[A-Za-z0-9]+" type="text" value="joss09site" name="nom" maxlength="20" required><br />
            <label for="mail">E-mail:</label><br />
            <input type="mail" value="joss@gmx.fr" name="mail" id="mail" maxlength="25" required><br />
            <label for="mdp">Mot de passe:</label><br />
            <input pattern="[A-Za-z0-9]+" type="password" value="s" name="mdp" maxlength="150" required><br />
            <label for="mdpc">Confirmer mot de passe:</label><br />
            <input type="password" id="mdpc" name="mdpc" maxlength="150" required><br />
            <input pattern="[A-Za-z0-9]+" type="submit" name="connexion" id="login" value="Se connecter">
        </div>
    </form>
</div>

<!--
<div id="scroll-container">
    <div id="text-container">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
        Sed auctor, magna id faucibus malesuada, justo ipsum malesuada
        tellus, id congue ipsum erat non quam. Sed tincidunt,
        ligula eu dictum viverra, turpis mauris pharetra augue,
        id bibendum lorem ante vel elit.
        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
        Sed auctor, magna id faucibus malesuada, justo ipsum malesuada
        tellus, id congue ipsum erat non quam. Sed tincidunt,
        ligula eu dictum viverra, turpis mauris pharetra augue,
        id bibendum lorem ante vel elit.
        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
        Sed auctor, magna id faucibus malesuada, justo ipsum malesuada
        tellus, id congue ipsum erat non quam. Sed tincidunt,
        ligula eu dictum viverra, turpis mauris pharetra augue,
        id bibendum lorem ante vel elit.
        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
        Sed auctor, magna id faucibus malesuada, justo ipsum malesuada
        tellus, id congue ipsum erat non quam. Sed tincidunt,
        ligula eu dictum viverra, turpis mauris pharetra augue,
        id bibendum lorem ante vel elit.
        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
        Sed auctor, magna id faucibus malesuada, justo ipsum malesuada
        tellus, id congue ipsum erat non quam. Sed tincidunt,
        ligula eu dictum viverra, turpis mauris pharetra augue,
        id bibendum lorem ante vel elit.
        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
        Sed auctor, magna id faucibus malesuada, justo ipsum malesuada
        tellus, id congue ipsum erat non quam. Sed tincidunt,
        ligula eu dictum viverra, turpis mauris pharetra augue,
        id bibendum lorem ante vel elit.
    </div>
</div>
-->
<div id="margin"></div>