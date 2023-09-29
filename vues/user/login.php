<link rel="stylesheet" href="../styles/BaseC.css">

<form action="" methode="" class="form">

    <?php
        require_once 'Form.php';

        $champ = new Form();

        /*differents champ de saisi
        echo $champName->input('User Name', 'text', 'name', 'enter le nom d utilisateur');
        ---------------->input('id', 'type', 'placeholder', 'name') */

        echo $champ->input('title' , 'text', 'etext', 'title');

        
       
        echo $champ->textarea('description');

        //bouton de validation/d'inscription
        $button = new Form();
        echo $button->submit('se connecter');
    ?>
</form>