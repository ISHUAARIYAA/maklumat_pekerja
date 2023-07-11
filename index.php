<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    



<h1 class="h1" >SELAMAT DATANG</h1>
<form action="add.php" method="post">




        <h2>LOGIN</h2>
        <?php if  (isset($_GET['error'])) { ?>
            <p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

         <label class="label">Nama</label>
     	<input class="input"type="text" name="uname" placeholder="User Name"><br>

     	<label class="label">Katalaluan</label>
     	<input class="input" type="password" name="password" placeholder="Password"><br>

     	<button>Login</button>
        <button><a  href="tambahpekerja.php"> Add</a></button>
    </form>
</body>
</html>





