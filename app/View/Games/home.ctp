<?php 
    foreach ($datas as $key => $data) {
        echo "<div class='span3'>";
        
        echo "<a href='http://localhost/gamesCake/jeu/".$data['Game']['id']."'>";
        
        echo "<h2>".$data['Game']['NAME_GAME']."</h2>";
        
        echo $this->Html->image("upload/".$data['Game']['PHOTO_GAME'], array('class' => 'imgGame span4', 'alt' => $data['Game']['NAME_GAME']));
        
        echo "<ul>
                    <li>Age minimum: ".$data['Game']['MIN_AGE_GAME']."</li>
                    <li>".$data['Game']['MIN_GAMER_GAME']."-".$data['Game']['MAX_GAMER_GAME']." joueur(s)</li>
                    <li>".$data['Game']['DURATION_GAME']." minutes pour une partie</li>
            </ul>";
        
        echo "</a>";
        
        echo "</div>";
}
?>

<?= $this->start('sidebar'); ?>
    <ul class="nav nav-list">
        <?php
            foreach($gametypes as $gt){
                echo "<li><a href='http://localhost/gamesCake/recherche/".$gt['Gametype']['id']."'>".$gt['Gametype']["NAME_GAMETYPE"]."</a></li>";
            }
        ?>
    </ul>
<?= $this->end();?>