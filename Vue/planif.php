
<?php
/**
 * Created by PhpStorm.
 * User: Jordan
 * Date: 06/04/2017
 * Time: 10:02
 */
    interfaceTop();
?>


<h1>Planification</h1>
<h4> Date de l'injection </h4>

<br><br>

<div class="container">
    <h2> Planification </h2>
    <form action="Controleur/Planification.php" method="POST">
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="datetimepicker1">Date :</label>
                    <div class='input-group date' id='datetimepicker1'>
                        <input name="dateplanif" type='text' class="form-control" />
                        <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                    </div>
                </div>
            </div>
            <script type="text/javascript">
                $(function () {
                    $('#datetimepicker1').datetimepicker();
                });
            </script>
        </div>


        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="qte">Quantité insuline :</label>
                    <input name="qteinsuline" type="number" class="form-control" id="qte" placeholder="Quelle est la dose du jour séléctionné ?">
                </div>
            </div>
        </div>

        <button type="submit" class="btn btn-default">Submit</button>

    </form>
</div>


<?php



?>


<?php
interfaceBot();
?>
