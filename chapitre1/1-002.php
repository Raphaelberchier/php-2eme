<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>formulaire</title>
    </head>
    <body>
        
        <h1>Inscription</h1>
            <form action="1-002-1.php" method="post">
                <label>login <input type="text" name="login" size="40"/></label><br>
                <label>Mot de passe <input type="password" name="password"/></label><br>
                <label>Majeur
                    <select name="majeur">
                    <option value="1">Oui</option>
                    <option value="0">Non</option>
                    </select>
                </label>
                <label><br>
                <label>Type<br> <input type="radio" name="femme" value="femme" /> Femme
                                <input type="radio" name="femme" value="homme" /> Homme
                </label><br>
                <label><br>
                <label>Options<br> <input type="checkbox" name="option" value="lettre" /> Lettre de nouvelle
                                <input type="checkbox" name="option" value="membre" /> Membre de soutien
                </label><br>
                <input type="submit" name="inscription" value="inscription"/>
        </form>
    </body>
</html>
