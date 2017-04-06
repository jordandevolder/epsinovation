<?php
/**
 * Created by PhpStorm.
 * User: Quentin
 * Date: 05/04/2017
 * Time: 15:18
 */

    interfaceTop();

?>
    <h1>Gestion du compte</h1>

    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 custom-table" >
            <?php
                foreach ($user as $u){
            ?>

                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h3 class="panel-title"><?php echo $u['prenom'] . " " ; echo $u['nom'];?></h3>
                    </div>
                    <div class="panel-body">
                        <div class="row">
<<<<<<< Updated upstream
                            <div class=" col-md-12 col-lg-12 ">
=======
                            <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="http://babyinfoforyou.com/wp-content/uploads/2014/10/avatar-300x300.png" class="img-circle img-responsive"> </div>

                            <div class=" col-md-9 col-lg-9 ">
>>>>>>> Stashed changes
                                <table class="table table-user-information">
                                    <tbody>
                                        <tr>
                                            <td>Adresse mail :</td>
                                            <td><?php echo $_SESSION['datas']['email'] ?></td>
                                            <td><span class="glyph-container fa fa-edit"/></td>
                                        </tr>
                                        <tr>
                                            <td>Numéro de téléphone :</td>
                                            <td><?php echo $_SESSION['datas']['telephone'] ?></td>
                                            <td><span class="glyph-container fa fa-edit"/></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>
            </div>
        </div>
    </div>

<?php
    interfaceBot();
?>