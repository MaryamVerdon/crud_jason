# Application de création d'un équipage
Cette application à pour but d'enregistrer un équipier, à l'aide d'un formulaire, dans une base de données puis d'afficher tous les équipiers enregistré en base dans un tableau de 3 colonnes. Elle implémente les fonctionnalités `Create` et `Read` d'un CRUD.

Technologies utilisées : `Symfony`, `Bootstrap`

## Comment participer au projet ?

1. Git clone

        $ git clone https://github.com/MaryamVerdon/crud_jason.git

2. Démarrer le serveur

        $ composer start

3. Installer les dépendances si besoin

        $ composer install

4. Créer la BDD
    - Dupliquer le fichier `.env` et le renommer en `.env.local`
    - Modifier la ligne commençant par `DATABASE_URL`
    - Créer la BDD avec la commande
        
            $ bin/console doctrine:schema:create
    
  ## Rendu final
