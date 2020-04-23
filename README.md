# Al Xam PRODUCTION

Premiére plateform musicale du Sénégal.
Ceci permettra aux artistes d'avoir une espace accueillant toutes leurs réalisation afin de les partager, ou vendre facilement avec des fans. Parmis les artistes, ils peuvent être musicien, beat maker, danceur.

L'objectif est de mettre en place une industrie musical pour les artistes puissent bénéficier des fonctionnalités suivantes:

- Louer un studio d'enregistrement
- Base de données de musique
- Espace vidéo clip, Making of
- Créer un évenement
- Promouvoir son activé dans les réseaux sociaux avec (EasyShare)
- Bénéficier des opportinuité avec nos partenaires (payant/gratuit)

Fonctionnalités à développer:
Les ( V ) indiques les taches terminés.
Les ( X ) sont des qui sont pas encore démarrer.
Les ( E ) sont des tâches qui sont en cours de développement.

- Systeme d'authentification à 4 niveaux 
    * Admin -- X
    * User -- V
    * Artist -- V
    * Studio -- X

- Systéme d'authenfication via les Réseaux sociaux
    * Facebook 
        ^ User -- V
        ^ Artist -- E
    * Instagram
        ^ User -- X
        ^ Artist -- X

- Integration d'un template d'administration
    * Template -- X
    * Integration -- X

- Systéme d'avatar
    * User -- X
    * Artist -- X
    * Sons -- X

- CRUD des Sons par les artists
    * Ajouter -- V
    * Supprimer -- V
    * Lire -- X

- CRUD des videos par les artists
    * Ajouter -- X
    * Supprimer -- X
    * Lire -- X

- CRUD des photos par les artists
    * Ajouter -- X
    * Supprimer -- X
    * Lire -- X
    
- CRUD des opportinuités pour mes artistes
    * Ajouter -- X
    * Lire -- X
    * Modifier -- X
    * Supprimer -- X

- Systémes de LIKE/UNLIKE des sons
    * User -- V
    * Artist -- V

- Systéme de partage des song sur lees réseaux sociaux
    * Facebook -- V
    * Twitter -- V
    * Whatsapp -- V

- Développement d'un lecteur intégré
    * Son ( React JS ) -- X