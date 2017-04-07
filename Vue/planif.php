
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
    <div class="row">
        <div class='col-sm-3'>
            <div class="form-group">
                <div class='input-group date' id='datetimepicker1'>
                    <input type='text' class="form-control" name="dateplanif" />
                        <span class="input-group-addon">
                            <span class="fa fa-calendar"></span>
                        </span>
                </div>
            </div>
        </div>
        <script type="text/javascript">
            $(function () {
                $('#datetimepicker1').datetimepicker({

                });
            });
        </script>
    </div>

    <h4> Dose à injecter </h4>
    <div class="row">
        <div class='col-sm-3'>
            <input type="number" step="any" name="valeurinsuline"/>
        </div>
    </div>

    <div class="row">
        <a class="btn btn-primary margin-btn-planif" data-toggle="modal" data-target="#planif">Valider la planification</a>
    </div>

<?php



?>


<?php
interfaceBot();
?>
