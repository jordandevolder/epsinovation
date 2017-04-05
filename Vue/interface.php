<?php

function interfaceTop()
{
    echo '<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
<body class="home">
<div class="container-fluid display-table">
    <div class="row display-table-row">
        <div class="col-md-2 col-sm-1 hidden-xs display-table-cell v-align box" id="navigation">
            <div class="logo">


            </div>
            <div class="navi">
                <ul>
                    <li class="epsinnovation-logo">
                        <img src="Vue/img/LOGO.png" class="logo"/>
                    </li>
                    <li class="active"><a href="#"><i class="fa fa-home" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Accueil</span></a></li>
                    <li><a href="#"><i class="fa fa-tasks" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Workflow</span></a></li>
                    <li><a href="blog.php?action=suivi"><i class="fa fa-bar-chart" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Mon Suivi</span></a></li>
                    <li><a href="#"><i class="fa fa-user" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Utilisateurs</span></a></li>
                    <li><a href="#"><i class="fa fa-calendar" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Calendrier</span></a></li>
                    <li><a href="#"><i class="fa fa-cog" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Paramètres</span></a></li>
                </ul>
            </div>
        </div>
        <div class="col-md-10 col-sm-11 display-table-cell v-align">
            <!--<button type="button" class="slide-toggle">Slide Toggle</button> -->
            <div class="row">
                <header>
                    <div class="col-md-7">
                        <nav class="navbar-default pull-left">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="offcanvas" data-target="#side-menu" aria-expanded="false">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                        </nav>

                    </div>
                    <div class="col-md-5">
                        <div class="header-rightside">
                            <ul class="list-inline header-top pull-right">';
                                if(!$_SESSION)
                                { echo '<span class="pull-right"><a class="btn btn-primary" data-toggle="modal" data-target="#connexion">Se connecter</a>&nbsp;
                                                                <a class="btn btn-primary" data-toggle="modal" data-target="#inscription">S\'inscrire</a>
                                        </span>'; }
                                    else {
                                    echo '
                                   
                                        <img src="http://jskrishna.com/work/merkury/images/user-pic.jpg" alt="user">
                                            <li><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
                                                <li>
                                                    <a href="#" class="icon-info">
                                                        <i class="fa fa-bell" aria-hidden="true"></i>                                       
                                                    </a>
                                                </li>
                                                </li>';
                                       
                                }
                                        echo '</a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <div class="navbar-content">
                                                <span>JS Krishna</span>
                                                <p class="text-muted small"></p>
                                                <div class="divider">
                                                </div>
                                                <a href="#" class="view btn-sm active">View Profile</a>
                                            </div>
                                        </li>
                                       
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </header>
  </div>
  <div class="user-dashboard">
</div>

            






<div id="connexion" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" style="color: #000000" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Connexion</h4>
      </div>
      <div class="modal-body">
    		<div class="panel panel-default">
			  	<div class="panel-body">
			    	<form method="post" accept-charset="UTF-8" role="form" name="connection" action="Controleur/Connect.php">
                    <fieldset>
			    	  	<div class="form-group">
			    		    <input class="form-control" placeholder="E-mail" name="email" type="text">
			    		</div>
			    		<div class="form-group">
			    			<input class="form-control" placeholder="Password" name="password" type="password" value="">
			    		</div>
			    		<input class="btn btn-lg btn-primary btn-block" type="submit" name="login" value="Login" style="color: #0f0f0f">
			    	</fieldset>
			      	</form>
			    </div>
			</div>
		</div>
	</div>
</div> 
</div>


<div id="inscription" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" style="color: #000000" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Connexion</h4>
      </div>
      <div class="modal-body">
    		<div class="panel panel-default">
			  	<div class="panel-body">
			    	<form method="post" accept-charset="UTF-8" role="form" name="connection" action="Controleur/Connect.php">
                    <fieldset>
			    	  	<div class="form-group">
			    		    <input class="form-control" placeholder="E-mail" name="email" type="text">
			    		</div>
			    		<div class="form-group">
			    			<input class="form-control" placeholder="Password" name="password" type="password" value="">
			    		</div>
			    		<input class="btn btn-lg btn-primary btn-block" type="submit" name="login" value="Login" style="color: #0f0f0f">
			    	</fieldset>
			      	</form>
			    </div>
			</div>
		</div>
	</div>
</div> 
</div>

';
}

function interfaceBot()
{
    echo '            </div>
        </div>
    </div>

</div>
</body>';
}
?>

