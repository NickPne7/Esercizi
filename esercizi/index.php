<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="style/style.css">
        <title>Esercizio pag 55 no 40</title>

        <?php
            include 'scripts/function.php';
        ?>

    </head>
    <body>
        <h1>TEST</h1>

        <div id="wrapper">
            <form actio="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>"  method="post">
                <fieldset>
                    <p>Alcuni campi di testo:</p>
                    <label for="username">Nome Utente</label>
                    <input id="username" type="text" name="nomeutente">
                    <br>
                    <label for="password">password</label>
                    <input id="password"type="password" name="pass">
                </fieldset>
                
                <fieldset>
                    <p></p>
                    <label for="interessi">Una lista di selezione multipla</label>
                    <select id="interessi" name="interexts" multiple="multiple">
                        <option value="Libri">Libri</option>
                        <option value="Musica">Musica</option>
                        <option value="Sport">Sport</option>
                    </select>
                </fieldset>
                
                <fieldset>
                    <label for="locazione">Una lista di selezione singola</label>
                    <select id="locazione" name="luogoProvenienza">
                        <option value="Libri">Provincia</option>
                        <option value="Musica">Città</option>
                        <option value="Sport">Regione</option>
                    </select>
                </fieldset>
                
                <fieldset>
                    <p>checkbox</p>

                    <label for="box1">Libri</label>
                    <input id="box1" type="checkbox" name="boxLibri" value="Libri">
                    <br>
                    <label for="box2">Musica</label>
                    <input id="box2" type="checkbox" name="Musica" value="">
                    <br>
                    <label for="box3">Sport</label>
                    <input id="box3" type="checkbox" name="Sport" value="">
                </fieldset>
                <fieldset>
                    <p>Radio Button</p>
                    
                    <label for="radio1">Maggiorenne</label>
                    <input id="radio1" type="radio" name="età" value ="maggiorenne">
                    <br>
                    <label for="radio2">Minorenne</label>
                    <input id="radio2" type="radio" name="età" value="minorenne">
                </fieldset>

                <input type="submit" name="invia" value="inviaDati">
                <input type="reset" name="resetta" value="reset">

            </form>

            <?php
                //VALIDAZIONE
                $nomeUtente = $password = $eta = "";
                $errUser = $errPass = $errEtà = "";
                $interessi = array();
                $residenza = array();
                $preferenza = array();


                if(isset($_SERVER['inviaDati'])){
                    if(isset($_POST['nomeutente']) && $_POST('nomeutente') != ""){
                        $var = $_POST('nomeutente');
                        $nomeUtente = test_input($var);
                    }else{

                    }
                    if(isset($_POST['password']) && $_POST('password') != ""){
                        $var = $_POST('nomeutente');
                        $password = test_input($var);
                    }else{
                        
                    }
                    if(isset($_POST['età']) && $_POST('età') != ""){
                        $var = $_POST('età');
                        $eta = test_input($var);
                    }
                    if(isset($_POST['interexts'])){
                        $interessi = $_POST['interexts'];
                    }
                    if(isset($_POST['luogoProvenienza'])){
                        $residenza = $_POST['luogoProvenienza'];
                    }
                    if(isset($_POST[''])){
                        $residenza = $_POST['luogoProvenienza'];
                    }
                }
                
            ?>
            
        </div>
    </body>
</html>