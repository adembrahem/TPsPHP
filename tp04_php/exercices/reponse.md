Act1:
    Question1:
    => Le serveur ne reconnaît pas automatiquement l'utilisateur lui-même. Il utilise des mécanismes comme les sessions et les cookies pour conserver des informations et identifier l'utilisateur connecté.
    Question2:
    => Non, les informations ne sont pas conservées automatiquement. il doit      créer une session pour les stocker.
Act2:
    Question1:
    => création: coté serveur, dans le fichier PHP.
    Question2:
    => Récupération: depuis la session stockée sur le serveur.
    Question3:
    => Le serveur ne peut pas créer une session tout seul ; il utilise la fonction session_start() pour démarrer une nouvelle session ou récupérer une session existante.
    Question4:
    => Non, $_SESSION est une variable superglobale prédéfinie en PHP qui permet de stocker et de récupérer des informations liées à une session.
    Question5:
    => Les informations restent les mêmes.
    .En PHP, la durée par défaut de conservation des données de session est     généralement de 24 minutes.
Act5:
    Question1:
    => Il faut vérifier si la variable $_SESSION['nom'] existe pour savoir si l'utilisateur est déjà connecté et authentifié.
    Question2:
    => Si l'utilisateur n'est pas connecté, la variable $_SESSION['nom'] n'existe pas. Donc, le message « Accès refusé » s'affiche
    Question3:
    => Elle permet de protéger les pages privées et d'empêcher les utilisateurs non connectés d'y accéder.
Act6:
    Question:
    => session_destroy(): Supprimer le fichier de session qui est situé sur le disque dur du serveur. 
Act7:
    Question1:
    => Le cookie est stocké dans le navigateur de l'utilisateur.
    Question2:
    => 3600 représente la durée de vie du cookie en secondes.
    Question3:
    => Cookie : les données sont stockées dans le navigateur du client.
       Session : les données sont stockées sur le serveur.
    question4:
    => Lorsque le cookie expire, le navigateur le supprime automatiquement et ne l'envoie plus au serveur.
Act10:
    Question1:
    => Parce que les informations de l'utilisateur sont stockées sur le serveur, ce qui offre une meilleure sécurité que le stockage direct dans un cookie.
    Question2:
    => Parce que les cookies sont stockés dans le navigateur et peuvent être consultés ou modifiés par l'utilisateur.
    Question3:
    => Non, un cookie n'est pas totalement sécurisé. Il peut être volé ou modifié. Il faut utiliser HTTPS et des options de sécurité comme HttpOnly et Secure.

Act12:
    Question1/2:
    => Si l'un des deux (identifiant ou mot de passe) est incorrect, le message "Identifiants incorrects" s'affichera.
    Question3:
    => .elle ne permet pas de gérer plusieurs utilisateurs.
       .le mot de passe est stocké en texte clair sans protection.

Act16:
    Question1/2:
    => Non, parce que la fonction password_hash() chiffre le mot de passe associé en une empreinte cryptographique appelée "hash".
    Question3:
    => Non, car le hachage est une fonction à sens unique et irréversible qui ne permet pas de retrouver le mot de passe d'origine.
    Question4:
    => en cas de piratage de la base de données, les attaquants pourraient immédiatement lire et voler tous les comptes des utilisateurs.

Act20:
    Question:
    => Utilisez cette fonction pour vérifier si l'utilisateur est connecté ou non Sinon redirigez-le vers la page de connexion (login).
Act21:
    Question:
    => La fonction htmlspecialchars() transforme le code HTML en simple texte pour que le navigateur l'affiche sans l'exécuter.
    

    