# writer-s-desk
Writer's desk - simple blogging tool

### Installation

* Download the repository files or clone them via git :

```
git clone https://github.com/Mr-Kumar-Abhishek/writer-s-desk.git
``` 



* Then move the folder to your LAMP server's directory :

```
mv writer-s-desk /var/www/html/
```

or upload the files to your webhost using any FTP application.




* login to the MySQL and create a database called `writer_s_desk`

```
mysql> create database writer_s_desk;
```



* Then use that database:

```
mysql> use writer_s_desk;
```



* After that , import the database file given in the repository to your database.

```
mysql> source db.sql
```



* Go to `.htaccess` file and edit the following line to your blog's base URL.

```
RewriteBase /writer_s_desk/
```

Say if the blog's URL is `http://your-website-address.com/blog/` you have to change that line to:

```
RewriteBase /blog/
```

* Edit the file `includes/config.php` to put proper database credentials

```
//database credentials
define('DBHOST','localhost'); // database name
define('DBUSER','demo'); // database user
define('DBPASS','demo'); // database password
define('DBNAME','writer_s_desk'); // database name
define('DBPORT', '8889'); // database port either 8889 or 3306

```



* Navigate your browser to `http://your-blog-address.com/admin` and login with default credentials  i.e

> Username: demo
> Password: demo

With this you could create edit or delete blog posts. Also if you want new users, you could add them too from 
this admin panel.
