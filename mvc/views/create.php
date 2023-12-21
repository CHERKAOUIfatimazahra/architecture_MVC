<?php
    $title = "ajoute equipe";
    
    ob_start();
    ?>
    <!--  -->
    <form action="store.php" method="POST">
    <div class="mb-3">
        <label>team name</label>
        <input class="form-control" type="text" name="name">
    </div>
    <div class="mb-3">
        <label>description</label>
        <textarea class="form-control" name="description" rows="3"></textarea>
    </div>
    <input type="submit" class="btn btn-success my-2" value="ajouter" name="ajouter">
    </form>
    <!--  -->
    <?php $content = ob_get_clean(); ?>
    <?php include_once 'views/layout.php';?>
