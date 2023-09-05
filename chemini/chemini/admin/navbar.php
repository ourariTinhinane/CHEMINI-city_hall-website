         <!-- Navbar -->
         <nav class="navbar navbar-expand-md navbar-light">

             <!-- Links -->
             <div class="collapse navbar-collapse" id="basicExampleNav3">

                 <!-- Right -->
                 <ul class="navbar-nav ml-auto nav-flex-icons">
                     <li class="nav-item dropdown">
                         <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                             <i class="fas fa-user"></i>&nbsp;&nbsp; Administrateur &nbsp;&nbsp;
                         </a>
                         <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink-333">
                             <a class="dropdown-item" href="../index.php">Aller à la page d'acceuil</a>
                             <a class="dropdown-item" href="password.php">Changer le mot de passe</a>
                             <a class="dropdown-item"><form method="POST" action="">
                                 <button name="logout" type="submit">Déconnexion</button>
                             </form></a>
                         </div>
                     </li>
                 </ul>

             </div>
             <!-- Links -->

         </nav>
         <?php if($_SERVER['PHP_SELF'] != "/admin/dash.php"){ ?>
         <a href="dash.php" class="previous">&laquo; Tableau de bord</a>
        <?php } ?>
         <!-- Navbar -->
<style>
    button{
        background-color: transparent;
        border : none;
    }
    button:focus{
        outline: none;
    }
    .dropdown-item{
        padding : 1rem;
        text-align: center;
    }
    form{
        margin : 0
    }
    .previous{
        padding : 10px;
        text-decoration : none!important;
    }
</style>