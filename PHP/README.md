# Welcome To PHP
PHP(Formerly Personal Home Page, now Hypertext Preprocessor) is a server-side scripting language designed for web development but also used as a general-purpose programming language.

However, we won't focus on server-side scripting just yet.

# 1. Setup PHP Environment

Before you can run PHP code, you need three main tools:

1. **A Web Browser** – e.g., Chrome, Firefox, Edge.  
   - This is how you’ll *see* the results of your PHP code.  

2. **A Text Editor or IDE (Integrated Development Environment)** –  
   - Example: **VS Code** (recommended), Sublime Text, or PHPStorm.  
   - This is where you’ll *write* your code.  

3. **The PHP Environment** –  
   - This is what *executes* your PHP code. You can set it up in two ways:  
     - **Manual installation** (advanced: installing PHP, Apache, MySQL separately, But we'll only install PHP).  
     - **Using a Server Simulator** (easy mode, all-in-one).  

---

## Installing a Server Simulator (The Easy Way)

Server Simulators are beginner-friendly tools that bundle PHP with other necessary components like **Apache** (web server) and **MySQL** (database).  

👉 Think of them as a “ready-made kitchen” — you don’t have to buy each utensil separately.  

---

## Popular Server Simulators

### 1. WAMP (Best for Windows)  
- Download: [WAMP](https://sourceforge.net/projects/wampserver/)  
- Install it like a normal Windows program.  
- Once installed, launch WAMP. You’ll see a green/orange/red icon in the system tray (bottom-right corner).  
- **Turn services on**:  
  - Left-click the WAMP icon → Start **Apache** (for running PHP) and **MySQL** (for databases).  
  - Make sure the icon turns **green** (means everything is running).  
- Your local web server is now ready!  

📂 Save your PHP files inside:  where_you_installed_wamp/wamp64/www/

---

### 2. XAMPP (Cross-Platform, More Complex)  
- Download: [XAMPP](https://www.apachefriends.org/index.html)  
- Works on **Windows, Mac, Linux**.  
- Install it → Open the **XAMPP Control Panel**.  
- Start **Apache** and **MySQL** (they’ll show a green “Running” label).  
- Your local web server is ready.  

📂 Save your PHP files inside:  where_you_installed_xampp/xampp/htdocs/

🔗 Run in browser:  localhost/projectfoldername/yourfile.php


**Benefits**
- Server Simulators offer the basic web server services (Apache, PHP, MySQL, and so on)
- You turn on the server and forget about it, for every time you turn your computer on.




*/
