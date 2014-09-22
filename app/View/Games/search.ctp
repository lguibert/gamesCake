<h1>Résultat de la recherche...</h1> 
<?php
    if(!empty($games)){     
        foreach ($games as $key => $game) {
            echo "<div class='span3'>";

            echo "<a href='http://localhost/gamesCake/jeu/".$game['Game']['id']."'>";

            echo "<h2>".$game['Game']['NAME_GAME']."</h2>"; 

            echo $this->Html->image("upload/".$game['Game']['PHOTO_GAME'], array('class' => 'imgGame span4', 'alt' => $game['Game']['NAME_GAME']));

            echo "<ul>
                        <li>Age minimum: ".$game['Game']['MIN_AGE_GAME']."</li>
                        <li>".$game['Game']['MIN_GAMER_GAME']."-".$game['Game']['MAX_GAMER_GAME']." joueur(s)</li>
                        <li>".$game['Game']['DURATION_GAME']." minutes pour une partie</li>
                </ul>";

            echo "</a>";

            echo "</div>";
        }
    }else{
        echo "<div class='error'>Aucun jeu pour le type sélectionné!</div>";
    }
?>