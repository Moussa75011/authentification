# authentification








				AUTHETIFICATOIN SECURISEE


Dans cet exercice, il est question de mettre en place une application d'authetification sécurisée d'un utilisateur.


LANGAGES UTILISES: 
- PHP
- HTML / CSS

BASE DE DONNEES
-MYSQL

SERVEUR
-WAMP server


Ainsi je commence à créer une base de données (_dada.sql) avec une table users. Afin d'avoir des informations sur les utilsateus,  on utilisera un fichier de renseignement d'information de l'utilisateur (étape 2) pour l'enregistrer.

1 - Le fichier conexion.php contient les paramettres des connection a la base de données.

C'est a dire, pour pouvoir se connecter a la base de données, il faudra renseigner les bons paramettres:mot de pass, le root, adresse du serveur, le nom de la base de données. Pour pouvoir ce connecter a la base de données, il faudra rentrer les bon paramettre lors de la connexion a celle-ci.

2 - Le fichier inscription.php permet à un utilisateur de s'enregistrer ce qui deduit le fait d'etre enregistré dans la base de données et de pouvoir se connecter par la suite.

3 - Le fichier login.php va permettre de s'authentifier en tant qu'utilisateur sinon on aura un message d'erreur.



SECURITE:

Ici l'objectif de faire une application sécurisée signifie se protéger des harker, des injections...

Je rappelle que dans mon programme, dans le fichier inscription et login' j'utilise des fonctions telles que :
- mysqli_real_escape_string
- stripslashes
le premier qui protège les caracteres speciaux d'une chaine de caractère pour etre utilisé dans une requete. Le second  supprime les anti-slashs d'un formulaire.
- j'utiliuse egalement les hashage(hash) qui permet de crypter le mot de passe saisir par l'utilisateur.

TEST:

Enfin meme si je n'ai pu mettre en place tous les tests hormi celui du mail qui marche comme prevu, le but étant de, via des expressions irregulières(REGEX), telle que la fonction preg_mach qui verifie un element attendu par rapport a un format imposé ne sont pas identique. Dans notre cas, on verifie si lors de l'inscription, l'utulisateur rentre dans le champs identifiant, des caractères non autorisés, dans ce cas il aura une erreur et ne pourra pas se connecter par la suite, sinon ce l'information renseigné(identifiant sera enregistré).

Meme processus pour le mail et le mot de pass. Le mot de passs ne devra pas depasser un taille et ne devra pas etre different d'un format donné par la fonction preg_mach().   
