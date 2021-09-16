# Adresse du site

https://entrailles-les-oies.digitalmilitia.net

# Commandes utilisées

1. laravel new Maisonneuve2095538

2. create database Maisonneuve2095338

3-4-5-6-8. php artisan make:model Etudiant -a
php artisan make:model Ville -a

4. php artisan make:migration create_etudiants_table
php artisan make:migration create_villes_table
php artisan migrate

5. php artisan make:factory VilleFactory
php artisan make:seeder VilleSeeder pour automatiser la chose lors de la création des tables

ou

php artisan tinker
>>>> App\Models\Ville::factory()->count(15)->create()

6. php artisan make:factory EtudiantFactory
php artisan make:seeder EtudiantSeeder pour automatiser la chose lors de la création des tables

ou

php artisan tinker
>>>> App\Models\Etudiant::factory()->count(15)->create()

5 et 6. (en automatisation) php artisan migrate:fresh --seed

8. php artisan make:controller VilleController -m Ville
php artisan make:controller EtudiantController -m Etudiant

9. composer require laravel/ui
php artisan ui bootstrap
npm install && npm run dev

php artisan make:component layouts\\Mainframe