<<<<<<< HEAD
# gestion_project
=======
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
![bare de navigation](/home/akw/gest_project/public/captures/c1.png)

# Formulaire de project
![formulaire project](/home/akw/gest_project/public/captures/c2.png)
# Formulaire de task
![formulaire de task](/home/akw/gest_project/public/captures/c3.png)

# Edit Formulaire Project
![bare1](/home/akw/gest_project/public/captures/c4.png)

# Edit Formulaire task
![bare2](/home/akw/gest_project/public/captures/c5.png)
# Ui project sans la nav
![bare3](/home/akw/gest_project/public/captures/c6.png)
# ui task sans la nav
![bare4](/home/akw/gest_project/public/captures/c7.png)
# footer
![bare5](/home/akw/gest_project/public/captures/c8.png)
# ui final
![bare5](/home/akw/gest_project/public/captures/c9.png)



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
>>>>>>> 5c66cb0 (validation de tout le projet)
