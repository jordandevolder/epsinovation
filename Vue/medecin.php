<?php
/**
 * Created by PhpStorm.
 * User: Quentin
 * Date: 05/04/2017
 * Time: 15:18
 */
interfaceTop();
?>
<h1>Informations de votre médecin</h1>

<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 custom-table" >
            <div class="panel panel-info">
                <?php foreach ($medecin as $med)
                { ?>
                <div class="panel-heading">
                    <h3 class="panel-title"><?php echo $med['prenom'] . ' ' . $med['nom']; ?></h3>
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
                                                foreach ($medecin as $info)
                                                {
                                                    echo $info['nom'] . ' ' . $info['prenom'];?>
                                                    <a href="blog.php?action=medecin&id=<?php echo $info['id']; ?>" class="btn btn-primary">Acceder à son profil</a>
                                                    <?php
                                                }
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
                <?php } ?>
            </div>
        </div>
    </div>
</div>





<div class="container" id="contact">
    <div class="row">
        <h2>Contacte nous ! </h2>
    </div>
    <div class="row">
            <form method="post" id="contact" name="test" enctype="multipart/form-data" action="vue/envoi.php">
                <div class="form-group">
                    <label for="validate-text">Nom</label>
                    <div class="input-group">
                        <input type="text" class="form-control"  id="nom" name="nom" tabindex="1" required/>
                        <span class="input-group-addon danger"><span class="glyphicon glyphicon-remove"></span></span>
                    </div>
                </div>

                <div class="form-group">
                    <label for="validate-email">Email</label>
                    <div class="input-group">
                        <input type="email" class="form-control"  id="email" name="email" tabindex="2" required/>
                        <span class="input-group-addon danger"><span class="glyphicon glyphicon-remove"></span></span>
                    </div>
                </div>

                <div class="form-group">
                    <label for="validate-text">Objet</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="objet" name="objet" tabindex="3" required/>
                        <span class="input-group-addon danger"><span class="glyphicon glyphicon-remove"></span></span>
                    </div>
                </div>

                <div class="form-group">
                    <label for="validate-text">Message</label>
                    <div class="input-group">
                        <!--input type="text" class="form-control" id="objet" name="objet" tabindex="3" required/-->
                        <textarea id="validate-text" class="form-control" name="message" tabindex="4" cols="30" rows="8"></textarea>
                        <span class="input-group-addon primary"></span>
                    </div>
                </div>

                <input class="btn btn-primary col-xs-12" name="envoi" value="Envoyer le message" type="submit" >
            </form>
        </div>
</div>


<?php
interfaceBot();
?>
