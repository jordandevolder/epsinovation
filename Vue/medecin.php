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
                                                <span class=""><a class="btn btn-primary" data-toggle="modal" data-target="#contact">Contacter</a></span>
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


<div id="contact" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" style="color: #000000" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Contact</h4>
            </div>
            <div class="modal-body">
                <div class="panel panel-default">
                    <div class="panel-body">

                                <form method="post" id="contact" name="test" enctype="multipart/form-data" action="Controleur/envoi.php">
                                    <fieldset>
                                        <div class="form-group">
                                            <label for="nom-field">Nom</label>
                                            <input id="nom-field" class="form-control" placeholder="Nom" name="nom" type="text">
                                        </div>
                                        <div class="form-group">
                                            <label for="email-field">Email</label>
                                            <input id="email-field" class="form-control" placeholder="E-mail" name="email" type="text">
                                        </div>

                                        <div class="form-group">
                                            <label for="objet-field">Objet</label>
                                            <input id="objet-field" class="form-control" placeholder="Objet" name="objet" type="text">
                                        </div>

                                    <div class="form-group">
                                        <label for="message-field">Message</label>
                                            <textarea id="message-field" class="form-control" name="message" tabindex="4" cols="30" rows="8"></textarea>
                                    </div>


                                    <input class="btn btn-primary col-xs-12" name="envoi" value="Envoyer le message" type="submit" >
                                    </fieldset>
                                </form>
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
