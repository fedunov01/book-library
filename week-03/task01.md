### LAMP workdlow

0.5) between web page and Apache2 layes DNS resolving layer. it needed to resolve domain name exmpale.com to nat ip of server domain 192.16.128.x
1) web client-->Apache2 -- on web page user opens main page. client asks for example.com/index.php from server.
2) Apache2-->PHP folder -- when request comes to server, it don't know where application code lives. beecause of this all the trafic goes through. in sites-avalible is written path where req should redirect.(ServerName, DocumentRoot).
3) then apache need compile .php code. In /etc/apache2/conf-enabled/docker-php.conf written FileMatch \.php$ and written module that Apache2 seeks to compile code
4) while php code is executing, it's uses pdo to connect to db. class with 3 var: dsn, user, passwd. method queary uses to send req to db.
5) db validates req and send back needed tables/info, php code contines to work.
6) when php executed, php genereates updated headers+body of the page. 
7) Apache2 created body of http responce and sends it to web client aka user
