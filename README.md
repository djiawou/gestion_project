# gestion_project
# Titre Du TP 
    Gestionnaire de projets

# Details Du projet
    Une NavBar
    Deux Models(Task,Project)
    Deux Controllers(Taskcontroller,ProjectController)
    Deux Factories (ProjectFactory,TaskFactory)
    Deux Seeders(ProjectSeeder,TaskSeeder)
    les deux pour genrer des donnes en utilisant la commande suivante
    php artisan db:seed

# Captures D'ecrants

# NavBar
![bare de navigation](public/captures/c1.png)

# Formulaire de project
![formulaire project](public/captures/c2.png)
# Formulaire de task
![formulaire de task](public/captures/c3.png)

# Edit Formulaire Project
![bare1](public/captures/c4.png)

# Edit Formulaire task
![bare2](public/captures/c5.png)
# Ui project sans la nav
![bare3](public/captures/c6.png)
# ui task sans la nav
![bare4](public/captures/c7.png)
# footer
![bare5](public/captures/c8.png)
# ui final
![bare5](public/captures/c9.png)



# Installation

git clone https://github.com/djiawou/gestion_project.git

cd gestion_project

# Installation des dependences
composer install

# Faire les migrations
php artisan db:seed
php artisan migrate

# Demarrer le serveur
php artisan serve
