<h1> <?php  echo $title; ?> </h1>

<?php foreach ($users as $user) { ?>


   <?php echo $user->p_nome; ?> || <li> <a href="<?php echo "/user/$user->id_user"; ?>">Ir para detalhes</a> </li>

<?php } ?>