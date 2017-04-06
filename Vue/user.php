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
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h3 class="panel-title"><?php echo $_SESSION['datas']['prenom'] . ' ' . $_SESSION['datas']['nom']; ?></h3>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class=" col-md-12 col-lg-12 ">

                            <div class=" col-md-9 col-lg-9 ">
                                <table class="table table-user-information">
                                    <tbody>
                                        <tr>
                                            <td>Adresse mail :</td>
                                            <td><?php echo $_SESSION['datas']['email'] ?></td>
                                        </tr>
                                        <tr>
                                            <td>Numéro de téléphone :</td>
                                            <td><?php echo $_SESSION['datas']['telephone'] ?></td>
                                        </tr>
                                        <tr>
                                                <td>Mon Médecin traitant :</td>

                                                    <?php if($_SESSION['datas']['id_medecin'] == 0 )
                                                    { ?>
                                            <td>
                                                    <form method="post" accept-charset="UTF-8" role="form" name="ajoutMedecin" action="Controleur/AddMedecin.php">
                                                        <select name="medecin">
                                                            <option value="">Selectionne un médecin</option>
                                                                <?php foreach ($medecin as $med)
                                                                {
                                                                        ?>
                                                                        <option value="<?php echo $med['id']; ?>"><?php echo $med['prenom'] . ' ' . $med['nom']; ?> </option>
                                                                        <?php
                                                                }?>
                                                        </select>

                                                        <input class="btn btn-success" type="submit" name="login" value="Valider" style="color: white">
                                                    </form></td>
                                                    <?php }
                                                    else {?>
                                                        <td>
                                                            <?php
                                                                foreach ($informations as $info)
                                                                {
                                                                    echo $info['nom'] . ' ' . $info['prenom'];?>
                                                                    <a href="blog.php?action=medecin&id=<?php echo $i['id']; ?>" class="btn btn-primary">Acceder à son profil</a>
                                                                <?php}
                                                            ?>

                                                        </td>
                                            <?php } ?>


                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
<?php
    interfaceBot();
?>
