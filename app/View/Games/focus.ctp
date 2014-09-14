<div id="focusGame"> 
        <h1><span id="name"><?php echo $game['Game']['NAME_GAME'];?></span></h1>          

        <?php echo $this->Html->image("upload/".$game['Game']['PHOTO_GAME'], array('class' => 'span3','alt' => $game['Game']['NAME_GAME']));?>
        <div class="infosImportant">        
            <ul>                
                <li>Emplacement: <span id="emplacement"></span></li>
                <li><span id="minGamer"><?php echo $game['Game']['MIN_GAMER_GAME'];?></span>-<span id="maxGamer"><?php echo $game['Game']['MAX_GAMER_GAME'];?></span> joueur<?php if(!$game['Game']['MAX_GAMER_GAME'] == ""){echo "s";}?></li>
                <li>Age Mini: <span id="age"><?php echo $game['Game']['MIN_AGE_GAME'];?></span></li>
                <li>Durée partie: <span id="duration"><?php echo $game['Game']['DURATION_GAME'];?> minutes</span></li>
                <li>Type de jeu: <span id="typeGame"><?php foreach ($game['Gametype'] as $type){echo $type['NAME_GAMETYPE'];}?></span></li>
                <li>Description: <span id="description"><?php echo $game['Game']['DESCRIPTION_GAME'];?></span></li>
            </ul>       
        </div>
        <div class="infosNoImportant">
            <ul>
                <li>Auteur<?php if(count($game['Author']) > 1){echo "s";}?>: <?php foreach ($game['Author'] as $author){echo $author['NAME_AUTHOR']." ";}?></li>
                <li>Editeur<?php if(count($game['Editor']) > 1){echo "s";}?>: <?php foreach ($game['Editor'] as $editor){echo $editor['NAME_EDITOR'];}?></li>
                <li>Illustrateur<?php if(count($game['Illustrator']) > 1){echo "s";}?>: <?php foreach ($game['Illustrator'] as $ill){echo $ill['NAME_ILLUSTRATOR'];}?></li>
                <li>Extention: </li>
                <li>Distributeur: <?php echo $game['Distributor']['NAME_DISTRIBUTOR'];?></li>
                <li>Collection: <?php echo $game['Collection']['NAME_COLLECTION'];?></li>
                <li>Date de publication: <?php echo $this->Validate->makeDateFrench($game['Game']['PUBLICATION_DATE_GAME']);?></li>
                <li>Date Achat: <?php echo $this->Validate->makeDateFrench($game['Game']['BUY_DATE_GAME']);?></li>
                <li>Date d'ajout: <?php echo $this->Validate->makeDateFrench($game['Game']['CREATED']);?></li>
                <li>Prix: <?php echo $this->Validate->makePrice($game['Game']['PRICE_GAME']);?></li>
                <li>Edition: <?php echo $game['Game']['EDITION_GAME'];?></li>
            </ul>       
        </div>        
</div>