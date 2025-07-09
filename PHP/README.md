# PHP
PHP is a scripting Language that's also a hypertext preprocessor, this means that despite the fact that its a serverside scripting language, it also has support for HTML tags, opening up infinite posibilities for web development
- PHP uses the Web Stack : HTML, CSS, JS, PHP, and MySQL.

## Prerequisites
- First lets setup your development environment, you'll need a
- Server Simmulator (WAMP(What I use, WINDOWS only), MAMP(MacOS), LAMP(Linux), XAMPP(Cross Platform)
- Then you'll need a text editor or IDE(Integrated Development Environment) (VScode, PHPStorm)
- And Lastly a browser.

NB: I wont be teaching you how to install any of these, please visit their website for more details.

## 01. The PHP Structure
So PHP Supports HTML so by default, utilizes HTML Tags, however the PHP script runs exclusively in its own tag:
Comments are lines of code that wont run on output are written using `//` For single lines or `/* ... */` for multiple lines.
```
<?PHP
// Your PHP Script goes here
?>
```
From this point forward I'll be posting code snippets assuming you've encapsulated your PHP script in the PHP tag `<?PHP ... ?>`, also we'll be running our code through the terminal, because we can and we dont need it for server side scripting for now. Always remember to turn your Server Simmulator first before running PHP scripts.

To run PHP scripts in your terminal, navigate to your php file and type in `php filename.php`
```
B:\filedirectory> php filename.php
```
