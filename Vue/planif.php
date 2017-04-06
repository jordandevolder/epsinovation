
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

<div class="container">
    <div class="row">
        <div class='col-sm-6'>
            <div class="form-group">
                <div class='input-group date' id='datetimepicker1'>
                    <input type='text' class="form-control" />
                        <span class="input-group-addon">
                            <span class="fa fa-calendar"></span>
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
</div>

<?php



?>


<?php
interfaceBot();
?>
