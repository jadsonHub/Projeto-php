<h1> <?php  echo $title; ?> </h1>

<?php foreach ($users as $user) { ?>


  <p class="text-white">  <?php echo $user->p_nome; ?> </p>|| <li> <a href="<?php echo "/user/$user->id_user"; ?>">Ir para detalhes</a> </li>

  <img src="<?php echo  $user->img_perfil; ?>" class=" img-perfil rounded-circle" alt="...">

  <img  alt="">
<?php } ?>