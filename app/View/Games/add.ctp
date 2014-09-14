<h1>Ajouter un jeu</h1>

<?php 
    echo $this->Form->create('Game', array('type' => 'file'));
    
    echo $this->Form->input('NAME_GAME', array("label" => "Nom:"));
    echo $this->Form->input('PHOTO_GAME', array("label" => "Photo:", 'type' => 'file'));
    echo $this->Form->input('MIN_GAMER_GAME', array("label" => "Nombre de joueur minimum:", "min" => 0));
    echo $this->Form->input('MAX_GAMER_GAME', array("label" => "Nombre de joueur maximum:", "min" => 0));
    
    echo $this->Form->input('MIN_AGE_GAME', array("label" => "Age minimum:", "min" => 0));
    echo $this->Form->input('PUBLICATION_DATE_GAME', array("label" => "Date de publication:"));
    echo $this->Form->input('DURATION_GAME', array("label" => "Durée:", "min" => 0));
    echo $this->Form->input('DESCRIPTION_GAME', array("label" => "Description:"));
    echo $this->Form->input('BUY_DATE_GAME', array("label" => "Date d'achat:"));
    echo $this->Form->input('PRICE_GAME', array("label" => "Prix:"));
    echo $this->Form->input('EDITION_GAME', array("label" => "Edition:"));
    
    //emplacement
    //distributeur
    //collection
    //auteur
    //editeur
    //image
    
    
    
    echo $this->Form->end('Ajouter');

?>
<!--
<form enctype="multipart/form-data" action='#' method='post'>   
    
    <label for='upload'>Upload Image: </label>
    <input type="hidden" name="MAX_FILE_SIZE" value="3145728" />
    <input name='upload' id='upload' type='file'/><br/>

    <label for='emplacement'>Emplacement:</label>  
        <label for='room'>Pièce:</label>
        <select id='room' name='room'>
            <option></option>
            <?php foreach ($rooms as $room) {
                echo '<option value="'.$room['ID_ROOM'].'">'.$room['NAME_ROOM'].'</option>';
            }?>
        </select><br/>
        <label for='cabinet'>Meuble:</label> 
        <select id='cabinet' name='cabinet'>
            <option></option>
            <?php foreach ($cabs as $cab) {
                echo '<option value="'.$cab['ID_CABINET'].'">'.$cab['NAME_CABINET'].'</option>';
            }?>
        </select><br/>
        <label for='shelf'>Précision:</label> 
        <select id='shelf' name='shelf'>
            <option></option>
            <?php foreach ($shelfs as $shelf) {
                echo '<option value="'.$shelf['ID_SHELF'].'">'.$shelf['NAME_SHELF'].'</option>';
            }?>
        </select><br/>

    <label for='distributor'>Distributeur:</label>   
    <select id='distributor' name='distributor'>
        <option></option>
            <?php foreach ($dists as $dist) {
                echo '<option value="'.$dist['ID_DISTRIBUTOR'].'">'.$dist['NAME_DISTRIBUTOR'].'</option>';
            }?>
    </select><br/>
    
    <label for='collection'>Collection:</label>    
    <select id='collection' name='collection'>
        <option></option>
            <?php foreach ($colls as $coll) {
                echo '<option value="'.$coll['ID_COLLECTION'].'">'.$coll['NAME_COLLECTION'].'</option>';
            }?>
    </select><br/>
    
    
    
    <div class="displayNone" id="authorsSelected"></div>
    <input id="idsAuthors" name="idsAuthors" type='hidden' value=''/>
    <label for="authors">Auteurs: </label>
    <select id='authors' name='authors'>
            <option value="base"></option>
            <?php foreach ($authors as $author) {
                echo '<option value="'.$author['ID_AUTHOR'].'">'.$author['FIRST_NAME_AUTHOR'].' '.$author['LAST_NAME_AUTHOR'].'</option>';
            }?>
    </select>
    <img class="displayNone littleImg" id="validateImgAuthor" src="media/img/validate.png" title="Valider"/><br/>
    
    
    
    <div class="displayNone" id="editorSelected"></div>
    <input id="idsEditors" name="idsEditors" type='hidden' value=''/>
    <label for="editors">Editeur: </label>
    <select id='editors' name='editors'>
            <option value="base"></option>
            <?php foreach ($editors as $editor) {
                echo '<option value="'.$editor['ID_EDITOR'].'">'.$editor['NAME_EDITOR'].'</option>';
            }?>
    </select>
    <img class="displayNone littleImg" id="validateImgEditor" src="media/img/validate.png" title="Valider"/><br/>
    
    
    
    <div class="displayNone" id="authorsSelected"></div>
    <input id="idsAuthors" name="idsAuthors" type='hidden' value=''/>
    <label for="authors">Auteurs: </label>
    <select id='authors' name='authors'>
            <option value="base"></option>
            <?php foreach ($authors as $author) {
                echo '<option value="'.$author['ID_AUTHOR'].'">'.$author['FIRST_NAME_AUTHOR'].' '.$author['LAST_NAME_AUTHOR'].'</option>';
            }?>
    </select>
    <img class="displayNone littleImg" id="validateImgAuthor" src="media/img/validate.png" title="Valider"/>
    <br/> 
    
    <input type='submit' name='butAddGame' name='butAddGame' value='Valider'/>
    
    <div class="mandatory">*: champs obligatoires</div>
</form>


-->