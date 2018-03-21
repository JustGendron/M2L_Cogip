<div class="container" role="main">

    <p class="bg-success">
        Informations sur la ligue <?php echo $laLigue['nomLigue'] ?>
    </p>

    <ul>

        <div id="list-example" class="list-group">
            <li class="list-group-item">
                Logo : <img src="<?php echo "./public/image/".$laLigue['urlImage'] ?>" width="200" height="300">

            <li class="list-group-item">
                
                Nom : <?php echo $laLigue['nomLigue'] ?>
            </li>

            <li class="list-group-item">
                Adresse : <?php echo $laLigue['adrLigue']." ".$laLigue['cpLigue']." ".$laLigue['villeLigue'] ?>
            </li>

            <li class="list-group-item">
                Téléphone : <?php echo $laLigue['TelLigue'] ?>
            </li>

            <li class="list-group-item">
                Email de contact : <?php echo $laLigue['emailLigue'] ?>
            </li>

            <li class="list-group-item">
                Site web : <?php echo $laLigue['urlLigue'] ?>
            </li>

            <li class="list-group-item">
                Discipline Olympique : <?php echo $laLigue['DiscLigue'] ?>
            </li>

        </div>
    </ul>

</div>
