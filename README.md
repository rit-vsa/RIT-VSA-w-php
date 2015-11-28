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

___

# Refactored (Nov 29th, 2015)
We separated concerns in various files to support collaborations. The new changes mitigated risks of merge conflicts so that multiple contributors can easily work on different subsystems of the project.

**Summary**

- all resources such as images, css, js, fonts...are stored in a folder called "assets"
  - assets/custom: all original assets we own/created
    - css
    - img
    - js
  - assets/bootstrap: Bootstrap framework's files
    - css
    - fonts
    - js
  - assets/other: any third-party resources that have their own folder organizations and are too complicated to sort them ourselves
    - calendar
    - lightbox
    - etc.
- "include" files
  - inc/header: now only a fixed-top navigation bar
  - inc/head: everything that goes inside the "head" tag of a PHP page
- paths corrected based on refactored locations
- search.php is still untouched 
- shoutbox.php doesn't work without database created correctly

**Goals**

- *MOST IMPORTANT*: albums have repeated code --> hard to maintain. Solution: populate albums in a database (or like in inc/members.php) and display them accordingly
  - probably putting subpages in a subfolder so the top level folder doesn't get too big
    - this requires dynamic paths in the head.php file that loads CSS and JS resources (maybe done by PHP parameter passing)
- get database columns created correctly (maybe by pasting SQL commands that made the table for the official site) for shoutbox.php
- save space in each album's view
- change spacing in gallery.php when page changes to the compact view
- remove border radius on header navbar that's making the bar feel detached from the rest of the pages
