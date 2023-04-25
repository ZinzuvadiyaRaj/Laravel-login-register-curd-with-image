
<h1> How to run it Locally </h1>

<h4> Stap 1 : </h4>
<p> Create a Database locally and import the user_model.sql file</p>

<h4> Stap 2 : </h4>
<p> Download the project</p>

<h4> Stap 3 : </h4>
<p> Rename .env.example file to .env inside your project root and fill the database information. (windows wont let you do it, so you have to open your console cd your project root directory and run mv .env.example .env ). </p>

<p> Need to fill some details in .env file like AWS details Google Login Details </p>

<h4> Stap 4 : </h4>
<p> Install the packages Install the packages described in the package.json and verify that it works: <br> 
command : $ composer install
</p>

<h4> Stap 5 : </h4>
<p> Run this command for Generate new app key<br> 
command : $ php artisan key:generate
</p>

<h4> Stap 6 : </h4>
<p> Run this command for Database Migration<br> 
command : $ php artisan migrate
</p>

<h4> Stap 7 : </h4>
<p> Run this command for seeders<br> 
command : $ php artisan db:seed
</p>

<h4> Stap 6 : </h4>
<p> Run project<br> 
command : $ php artisan serve
</p>

<h3> Developed By :- Zinzuvadiya Raj </h3>
