@Author Mohammed El SAKA

To run this project:
1. Install VirtualBox
2. Install Vagrant
3 Clone Project to your PC
4. open directory in a shell and run "Vagrant Up"

To use Application:
1. to view webserver1 enter 192.168.56.22 in browesr
2. to view webserver2 enter 192.168.56.23 in browesr
  -------------------------------------

To modify Websites on webserver1:

-Go to the "Web1-sites" directory and all the web Files are there. 
 
-Connection to Databse
   web-db.php

 -Main sites for displaying data tables:
 1. Index.html
 2. assetManager.php
 3. renewal.php
 4. stock.php
 5. user.php
 6. dash.php

 -Sites for Data Entry:
 1. new.php
 2. up.php
 3. replace.php
 4. newUser.php
 5. update.php
 6. view.php

 -backend sites for pure SQL operations:
1. del.php
2. newadd.php
3. add.php
4. Swap.php
5. newAddUser.php
6. addUser.php
7. dashboard.php
8. delete.php
9. done.php

-CSS files: 
style.CSS
form.CSS
table.CSS

To modify configuration for root directory on webserver1:
-Go to the "Web1-Config" directory.

  -------------------------------------
To modify Websites on webserver2:

-Go to the "Web2-sites" directory and all the web Files are there. 
 
 -Main site for displaying data tables:
  Index.html

 -Sites for Data Entry:
 1. newAccount.php
 2. newDevice.php
 3. StaffLeave.php
 
-CSS files: 
style.CSS
table.CSS

To modify configuration for root directory on webserver1:
-Go to the "Web2-Config" directory.
  -------------------------------------

To modify the databse configuration on the databse server:
  -go to bootstrap.sh (you would need to Vagrant Destroy and Vagrant Up to activate change)
  
  -make sure to update info on wev-db.php after any changes

  -My Method of changing the databse is through editing the db.sql. This is the databse file.
  After any change to the db.sql would need to Vagrant Destroy and Vagrant Up to activate change.

