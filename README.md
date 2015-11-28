# RIT-VSA
This is main website for Vietnamese Student Association at RIT.
The website is developed on server side using PHP and therefore requires XAMP (or similar program) to turn your computer into a local server in order to run this website.

**XAMPP Set Up Instructions**

1. Go to https://www.apachefriends.org/download.html and download compatible version of XAMP
2. Install XAMP and open XAMP Control Panel
3. Click "Start" button for Module Apache and MySQL
4. Clone the project folder to your local machine and place it in C:\xampp\htdocs (or wherever you chose to install XAMPP, but it must be inside htdocs folder).
5. To access website, open browser and enter 'localhost' as the address; to access database, open browser and enter 'localhost/phpmyadmin or simply click "Admin" button next to "Start" button in XAMP Control Panel.
6. Localhost takes you to htdocs folder and there you can see RIT-VSA folder, clicking on it will display index.php as home page.

**(Further Instructions)**

7. If you're cloning from GitHub Desktop application and your project is in a deeper level ("htdocs/*project_name*" instead of just "htdocs"), go to "C:\xampp\apache\conf" or wherever you installed XAMPP.
8. Open "httpd.conf" file in a text editor.
9. Press Ctrl + F and search for "htdocs", you'll find the DocumentRoot and Directory have the htdocs path
10. Change the path into the appropriate path (e.g. "...htdocs/*project_name*")
