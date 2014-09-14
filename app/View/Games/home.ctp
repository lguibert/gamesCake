<!--<div class="span2">
              <h2>Heading</h2>
              <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
              <p><a class="btn" href="#">View details &raquo;</a></p>
            </div>
            
            -->
            
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