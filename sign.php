<?php require_once 'header.php';

?>
<html>
<head> <title>Connexion </title> </head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-4 col-md-offset-4">
                <h1 class="text-center login-title">Connexion</h1>
                <div class="account-wall">

                    <form class="form-signin" action="login.php" method="post">
                        <input type="text" class="form-control" placeholder="Name" name="login" required autofocus     >
                        <input type="password" class="form-control" placeholder="Password" name="pwd" required>
                         <button class="btn btn-lg btn-primary btn-block" type="submit" value="Connexion" name="connexion">Connexion</button>
                       
                 </form>
             </div>
         </div>
     </div>
 </div>
</body>
</html>

<?php require_once 'footer.php'; ?>



