<p align="center">
    <h1 align="center">Sistem Aplikasi Laporan Bulanan Bank Umum</h1>
    <br>
</p>

DIRECTORY STRUCTURE
-------------------

      assets/             contains assets definition
      commands/           contains console commands (controllers)
      config/             contains application configurations
      controllers/        contains Web controller classes
      mail/               contains view files for e-mails
      models/             contains model classes
      runtime/            contains files generated during runtime
      tests/              contains various tests for the basic application
      vendor/             contains dependent 3rd-party packages
      views/              contains view files for the Web application
      web/                contains the entry script and Web resources



REQUIREMENTS
------------

The minimum requirement by this project template that your Web server supports PHP 5.4.0.


INSTALLATION
------------

### Install from Archive File

Extract the archive file downloaded from this page (https://github.com/raitogenki/aplikasilbu/archive/master.zip) to
a directory named `aplikasilbu` that is directly under the Web root.

### Database

Create a new database named `aplikasilbu` in the  MySQL server.

Import the file `web/aplikasi.lbu`

Edit the file `config/db.php` so that it match the MySQL server credentials, for example:

```php
return [
    'class' => 'yii\db\Connection',
    'dsn' => 'mysql:host=localhost;dbname=aplikasilbu',
    'username' => 'root',
    'password' => '1234',
    'charset' => 'utf8',
];
```

You can then access the application through the following URL:

~~~
http://localhost/aplikasilbu/web/
~~~


**NOTES:**
- This application won't create the database for you, this has to be done manually before you can access it.