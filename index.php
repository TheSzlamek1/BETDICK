<?php include "config.php"; ?>

<link rel="stylesheet" href="css/style.css">

<div class="navbar">

<div class="logo">SlimBet</div>

<div class="menu">

<a href="matches.php">Mecze</a>

<?php

if(isset($_SESSION['user'])){

echo "<a href='profile.php'>Profil</a>";
echo "<a href='logout.php'>Wyloguj</a>";

}else{

echo "<a href='login.php'>Login</a>";
echo "<a href='register.php'>Rejestracja</a>";

}

?>

</div>

</div>

<div class="container">

<h1>Witaj w SlimBet ⚽</h1>

<p>Obstawiaj mecze dla zabawy!</p>

</div>
