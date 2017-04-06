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
                                                <td>
                                                    <?php echo $_SESSION['datas']['id_medecin']; if($_SESSION['datas']['id_medecin'] == 0 )
                                                    { ?>
                                                    <form method="post" accept-charset="UTF-8" role="form" name="ajoutMedecin" action="Controleur/AddMedecin.php">
                                                        <select name="medecin">
                                                            <option value="">Selectionne un médecin</option>
                                                                <?php foreach ($medecin as $med){
                                                                    if($med['id_medecin'] == 0)
                                                                    {?>
                                                                        <option value="<?php echo $med['id']; ?>"><?php echo $med['prenom'] . ' ' . $med['nom'];?> </option>
                                                                    <?php
                                                                    }

                                                                }?>
                                                        </select>

                                                        <input class="btn btn-success" type="submit" name="login" value="Valider" style="color: white">
                                                    </form>
                                                    <?php } ?>
                                                </td>
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
