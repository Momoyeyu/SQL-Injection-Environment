# SQL-Injection-Environment
- It is a simply environment with manual sql injection vulnerability for new hand.
- I'm a beginner in Cyber security myself. I'm just a freshman in college. My code can be confusing and fragile, so feel free to point out my weaknesses so that I can share better code in the future.
- This was the first time I shared code on Github, and it kicked off my open source life. I really appreciate the open source spirit, and I wish I could be a part of it.

## Intro
- This repo provides the source code for a website used as an SQL injection environment.
- You can read my blog about this penetration test at: [momoyeyu.github.io](https://momoyeyu.github.io/2023/04/28/Cyber%20Security/sql%20injection/#%E4%BA%BA%E5%B7%A5%E6%B3%A8%E5%85%A5%E6%B5%8B%E8%AF%95) (The blog was originally written in English, but translated into Chinese for the sake of my classmates. You can use Google Translate to translate it into English or other languages)
- I built this environment independently, initially intending to complete my school courses, and later when writing a blog about this, coming up with the idea to share it.
- The environment has manual injection vulnerability, which I supposed is friendly for new hand. 

## Usage
- You can use Apache as web server (which I used and it worked fine :-)

+  Then, you need to set up your own database at your PC. MySQL 5.7 is recommended. If you use other database, I can't guarantee my code work well.

- After setting up your databases, let the php code fit your database's information.
- For example, in "select.php"
```php
$servername = "your_server_name"; // "localhost" for example
$username = "your_user_name"; // "root" for example
$password = "your_pass_word"; // "123456" for example
$mydb = "your_database_name"; // "test" for example
$conn = new mysqli($servername, $username, $password, $mydb);// link to the database
```
- Notice that there are several php source code required your database's information be filled in correctly(Forgive me). Basically, there are at least four php file required these set up. Make sure you fill them all correctly before you run the test.

+ For more details, definitely check my blog. I have tried my best explain all about this environment there. ([Link to the blog](https://momoyeyu.github.io/2023/04/28/Cyber%20Security/sql%20injection/#%E4%BA%BA%E5%B7%A5%E6%B3%A8%E5%85%A5%E6%B5%8B%E8%AF%95))

## Tips
- If you are not familiar with SQL and have trouble creating databases or creating table (creating table is really annoying), I recommend you to use "**Navicat**", with which you can do all those stuff with graphical interface. None the less, I supposed all beginner should try to manage their database in console, which is more challenging but rewarding.
- If you have trouble setting up web server and database, "phpstudy" can be a not bad choice to set all those stuff for you (including fulfill virtual website at localhost). None the less, manage to do all those stuff for your future sake.
