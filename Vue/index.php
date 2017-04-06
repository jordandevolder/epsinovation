    <?php
        interfaceTop();
    ?>
    <h1 class="welcome-page-title">Bienvenue sur le site d'EPSInnovation !</h1>

    <?php interfaceBot(); ?>

<script>
    $(document).ready(function(){
        $('[data-toggle="offcanvas"]').click(function(){
            $("#navigation").toggleClass("hidden-xs");
        });
    </script>