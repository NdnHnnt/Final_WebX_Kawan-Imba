## I. About Swakarya
//Soon<br>

## II. Team Name and Member
### A. "Kawan Imba"
//Soon<br>
### B. Our Members
| Name                           | Role                 |
| -------------------------------| ---------------------| 
| Nadine Haninta                 | `Full Stack Dev.`    | 
| Awliya Hanun Izdihar           | `Front-end Dev.`     | 
| Muhammad Ilham Fikriansyah     | `Administration `    |

## III. How to Install
### A. Set Up Website
1. Install local development tool such as [Laragon](https://laragon.org/)/[WAMPServer](https://www.wampserver.com/en/)/[XAMPP](https://www.apachefriends.org/download.html) if there's no local development tool installed before.
2. git clone this repository using git bash on `www` folder in local WAMPServer/laragon or `htdocs` in XAMPP. <br>
```
git clone https://github.com/NdnHnnt/swakarya.git
```
3. Start localhost server access by local development tools.
4. If the website local development tool is already installed and it can be accessed by following link <br>
```
http://localhost/swakarya/
```
### B. Managing Data and Website Features
1. Open database management system (phpMyAdmin)
```
http://localhost/phpmyadmin/
```
2. If you haven't logged in yet, input your user data to log in or using `root` on username section (Login Form) and leave the password blank by default.
3. Make a new database set named `swakarya`
3. Import the SQL file to the database set, named `swakarya.sql` in this repository.
5. The website is ready to use with its features such as adding user, adding event, editing event, and showing other users registered in this system.
*Please make sure to not make a change on this repository, or else the files won't load correctly.
**If the phpMyAdmin login data is different by default, this change can be made on `database.php` file in folder `swakarya/application/config/database.php` within line 78-80 to synchronize current login data. 

## IV. Technology Used
*Back-end*: CodeIgniter3(Framework), phpMyAdmin(Database Management), PHP, SQL <br>
*Front-end*: HTML, CSS<br>
*Local Development Tools*: Laragon(Nadine)/XAMPP(Awliya)
 
