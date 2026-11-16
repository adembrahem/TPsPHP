Act1:
    Question1:
    => Une ligne représente un enregistrement, c'est-à-dire les informations d'un  seul étudiant (nom, prénom, âge, formation et moyenne).
    Question2:
    => Une colonne représente un attribut (champ) qui contient un type d'information précis pour tous les étudiants.
    Question3:
    => L'identifiant (id) permet de distinguer chaque étudiant des autres, même si plusieurs étudiants ont le même nom et le même prénom. Il permet aussi de retrouver facilement un étudiant.
    Question4:
    => Une base de données permet de rechercher, ajouter, modifier et supprimer rapidement des informations, grâce aux requêtes SQL, même lorsqu'elle contient un grand nombre d'enregistrements.
Act2:
    Question1:
    => L'id est une clé primaire pour servir d'identifiant unique à chaque ligne de la table.
    Question2:
    => La contrainte NOT NULL signifie que le champ est obligatoire.
    Question3:
    => AUTO_INCREMENT indique à la base de données de gérer automatiquement la numérotation de la clé primaire.
    Question4:
    => La moyenne n'est pas stockée en texte pour deux raisons informatiques et mathématiques indispensables (calculs,tri).
    Question5:
    => Si l'on essaie d'insérer une valeur vide (NULL) dans un champ configuré en NOT NULL, le serveur de base de données bloque immédiatement l'opération.
Act3:
    Question1:
    => INSERT INTO: il sert à ajouter (insérer) de nouvelles lignes de données dans une table.
    Question2:
    => Select: il sert à lire (récupérer) et afficher les données stockées dans une table.
    Question3:
    => Where: elle sert à filtrer les résultats pour afficher uniquement les lignes qui respectent une condition précise.
    Question4:
    => Order By: elle sert à trier les lignes affichées dans un ordre précis, soit croissant (ASC), soit décroissant (DESC).
    Question5:
    => SELECT * récupère toutes les colonnes d'une table sans exception.
Act5:
    Question1:
    => new PDO(): Il sert à créer une connexion active entre votre script PHP et le serveur de base de données.
    Question2:
    => requise_once: Il sert à inclure un autre fichier PHP de manière obligatoire et une seule fois, pour éviter de dupliquer du code.
    Question3:
    => _DIR_: On l'utilise pour obtenir le chemin absolu et sécurisé du dossier actuel, ce qui évite les erreurs de fichier introuvable peu importe d'où le script est exécuté.
Act8:
    Question1:
    => La méthode prepare() permet de préparer la requête SQL et de séparer le code SQL des données à insérer.
    Question2:
    => La méthode execute() permet d'exécuter la requête préparée en lui transmettant les valeurs des paramètres.
    Question3:
    => Ce sont des paramètres nommés (placeholders) qui représentent les valeurs à remplacer par les données du formulaire.
    Question4:
    => Pour éviter les injections SQL, qui permettent à un utilisateur malveillant de modifier ou d'exécuter des commandes SQL non autorisées.
    Question5:
    => Non, car une requête préparée protège contre les injections SQL, mais ne vérifie pas si les données sont correctes (âge positif, nom non vide, etc.). Il faut donc toujours valider les données avant leur insertion.