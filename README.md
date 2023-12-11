<p align="center"><img src="https://medrate.nexmatics.africa/public/7776056916445910b95139.png" width="400"></p>
<p align="center"><h2>Medrate Healthcare Reviews</h2></p>

##  Setting up Git bash 
- Download Git bash from here :[https://git-scm.com/download](https://git-scm.com/download)
- Follow wizard to complete installation

## Pre - Installation Instruction ( Setting up xampp server )
- Download xampp version 7.4.1 from [https://sourceforge.net/projects/xampp/files/XAMPP%20Windows/7.4.1/xampp-portable-windows-x64-7.4.1-1-VC15-installer.exe/download](here)
- Follow wizard to complete installation

##  Setting up Laravel 
- Download composer from [https://getcomposer.org/download/](https://getcomposer.org/download/)
- Follow wizard to complete setup


## Cloning project files
- Create a folder under this directory >> C:\xampp\htdocs and name it according to your project

- Clone this repo into your project folder by opening git bash or terminal  in the current directory and typing in : git clone 
```bash
git clone https://github.com/Medrate-DPG/medrate.git
cd medrate
```

## Setting up database
- Open Xampp Control Panel from Start menu and start *Apache* and *MySQL* modules by clicking on start button.

- Open [localhost/phpmyadmin] and create a new database.

- Enter your database name (e.g: medrate)

- Make sure your database is selected, then click on Import 

- Click on Select file to locate "db_default.sql" from your project folder. Usually found here >> C:\xampp\htdocs\<project_name>\ <br /> 
Then scroll down and click on Import

- Rename .env.example file to .env inside your project folder and fill in the database information. <br />
(Windows wont show .env, so you have to open git bash or your console in your current directory and run the code below ) <br />
```bash
mv .env.example .env
```
- Open .env file with notepad / vscode and edit by inserting your database details ( Refer to image below )
  Database Host : is IP of your host or it is local server , it is something like [ 127.0.0.1 ] or localhost <br />
  Database name : is Name of created database. ( the database name you used above ) <br />
  Database user name : root ( this is the default username ) <br />
  Database password   : ( leave the password space blank by default ) <br />
- Save the file


## Running the project

Open Git Bash or terminal in your proeject folder and run the following commands to run the project <br />
```bash
composer update
composer install
php artisan key:generate
php artisan serve

```
- Access and log into your project here : http://localhost:8000/admin/login

Default Admin credentials ( You can change later under profile ) <br />
Email: admin <br />
Password: admin <br />


## How to contribute - For developers ( Knowledge of Php , Laravel , Javascript is required )
8. PHP source files for pages can be found here >> project_folder/resources/views

9. You can make changes as you wish in this file.


## Built With
1.	Laravel Framework 
4.	Bootstrap.
5.	Font Awesome.

## Contributing

Thank you for considering contributing to this project! Our user guide can be found here :

## Security Vulnerabilities

If you discover a security vulnerability within this project, please send an e-mail to our tech team via [odoijoshua55@gmail.com](mailto:odoijoshua55@gmail.com). All security vulnerabilities will be promptly addressed.

## Copyright
Ownership by Unicef Startup Lab Cohort 3 (Ghana).


## License

The Laravel framework is open-sourced software licensed under the [GPL-3 license](https://opensource.org/license/gpl-3-0/).
