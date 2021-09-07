# Commandes utilisées

1. laravel new Maisonneuve2095538

2. create database Maisonneuve2095338

3. php artisan make:model Etudiant
php artisan make:model Ville

4. php artisan make:migration create_etudiants_table
php artisan make:migration create_villes_table
php artisan migrate

5. php artisan make:factory VilleFactory
php artisan tinker
>>>> App\Models\Ville::factory()->count(15)->create();

6. php artisan make:factory EtudiantFactory
>>>> App\Models\Etudiant::factory()->count(100)->create();

8. php artisan make:controller VilleController
php artisan make:controller EtudiantController

9. php artisan make:component Layouts\Mainframe
php artisan make:component Etudiant\EtudiantListe