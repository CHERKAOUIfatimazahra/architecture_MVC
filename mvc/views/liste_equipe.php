    <?php
    $title = "StadiumStream";
    
    ob_start();
    ?>
    <a href="create.php" class="btn btn-primary">ajoute equipe</a>
    <!-- html + php -->
     <table id="example" class="table table-striped" style="width:100%">
        <thead>
            <tr class="table table-dark">
                <th></th>
                <th>id</th>
                <th>team name</th>
                <th>description</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
           <?php foreach ($equipes as $equipe) : ?>
                <tr>
                    <th></th>
                    <td><?php echo $equipe->id ?></td>
                    <td><?php echo $equipe->name ?></td>
                    <td><?php echo $equipe->description ?></td>
                    <td></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <?php $content = ob_get_clean(); ?>
    <?php
    include_once 'views/layout.php';
    ?>
