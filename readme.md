# Hakv framework readme

##Hämta och installera

###Hämta

Ladda ner eller klona hakv Framework från github https://github.com/derpnificent/hakv eller använd dig av git clone https://github.com/derpnificent/hakv.git.

###Installation

För att få detta ramverk att fungera behöver du göra 3 steg.

1. Du börjar med att öppna filen .HTACCESS som du hittar i huvudmappen, där hittar du följande kod: `RewriteBase /~hakv13/phpmvc/kmom8/Hakv/`. har du inte valt att lägga filerna du har klonat/laddat ner på webserverns root så måste du ändra länken till så du har valt att lägga filerna.

2. För att databasen ska fungera så måste du sätta att katalogen site/data är skrivbar, rättigheterna som bör användas är 777. Det gör du via filezilla eller använd dig av kommandot:  cd hakv chmod 777 site/data.

3. Nu måste du initiera modulerna och det gör du genom att peka din webbläsare till module/install. På index sidan finns det knapp som heter "module/install" när du tryckt på den så skapas två användare som har användarnamn och password, root:root eller doe:doe.

##Utseende och konfiguration

Du kan enkelt konfiguera sidan och det gör du via filen site/config.php. Gör så här:

###Header
Raden 'header' => 'Hakv' där byter du ut 'Hakv' till det du vill ha utskrivet på sidan.

###Footer
Raden `'footer' => '<p>Hakv &copy; by Hampus Kvarnhammar</p>'`, där byter du ut 'Hakv &copy; by Hampus Kvarnhammar' till det du vill ha utskrivet på sidan.

###Logo
Logon vi använder på den här sidan är 80x80 pixlar och det är bara att ändra raden `'logo' => 'logo_80x80.png'` och skriva namnet på din bild. Bilden ska ligga i mappen site/themes/mytheme.

###Navmenyn
Du kan ändra innehållet i navigeringsmenyn och den hittar du under raden `$ha->config['menus']` i site/config.php. Du skriver in t ex `'content'   => array('label'=>'Content', 'url'=>'my/content')`, under 'my-navbar' för att få fram en till knapp som leder dig in på Content sidan.

##Innehåll

###Blog
För att skapa ett blogg inlägg då pekar du din webläsare mot content/create som finns i navigeringsmenyn. Efter det trycker du på Create new content där du kan skriva din text du vill ha och på filter använder du dig av "plain" och på typ kan du använda "post".

###Page
Vill du skapa en sida gör du även detta med content/create i navigeringsmenyn. För att en sida ska skapas måste du använda 'page' som type.





