To whom it may concern:
        If you're reading this, I'm assuming you're someone intending to use this code for a petsite. I hope you got it from me or someone I authorized to give it out! I should be available for contact if you need assistance.
        
ABOUT
        I originally wrote this to be a neopets fansite, NeoMonsters, then recycled what I had so far to assist with MiniNeo, another neopets fansite. MiniNeo had code of its own, but it was extremely poorly written to the point where it was easier to just toss it out and start all over. While some of it was referenced slightly, it is 99% my own code (sans the forums).  
        This site is written almost entirely in PHP and mySQLi. I used this project as an opportunity to teach myself these languages. It was also written pretty quickly. While it should all work properly, it is not the best code out there. I'm sorry about that. The most important problem is security. It's not an area I am familiar with, so, for instance, passwords are stored in plaintext and 


        
        
        
        
HOW TO USE (for people unfamiliar with programming)
        I tried to keep this code easy to read and edit. Of course, if you are making drastic changes, you will need to edit quite a bit, but I tried to make it so that changes are not required on every single page. I also keep things labelled/described in the comments, so if you know a little bit about this stuff, you can (hopefully) figure out what'ss happening everywhere.
        
        These are the minimum changes needed in order for this to work. Even people who are not very comfortable with dynamic programming should be able to make these changes, so this list is written with novices in mind.
        
                -All the files and folders should be uploaded to your server. There should be instructions explaining how to do this provided by your hosting service (godaddy, hostgator, etc). However, do not upload this file (readme.txt). 
        
                -You will need to upload the database tables. There should be a file included in this package with the suffix ".sql" or ".sql.zip", something like that. Whoever has administrator access to the hosting service will need to log into their server's control panel, open "phpMyAdmin," then choose "import" and upload the file. 
        
                -In header.txt, the function "connecttodb()" in the header should be changed to reflect the username/password/name of your own server. This information should be available somewhere in the control panel of your server, and where to find it varies with different hosting services.
                
                -If your site is not a neopets fansite, or is using purely original art the function pet_img() should also be changed. Obviously, you do not need the neopets function, and the URL created by the statement ((((STATEMENT HERE)))) should be altered to reflect the naming scheme of the pet image URLs on your own site (for example, if you save your pet images as site.com/img/SPECIESCOLOR.gif, change it to:
                        " '/img/' . $species . $color . ".gif"
                -If your site does not have the option for "alternates," that section can also be removed, although it will not harm anything if it remains there.
                
                Obviously, the content of most pages will need to be changed. However, this should be easy to do as long as you are familiar with HTML. Any part of the page not enclosed in PHP brackets (they look like this: <?php and ?>) can have HTML. If you need to include dynamic content such as displaying the name of an item, you will need to put it within the PHP brackets, but it will just need a new line with an echo statement. Details on echo statements below.
                
                
                
                
                
                
HOW TO USE ECHO STATEMENTS
        echo statements are very useful for displaying dynamic content(i.e. content that changes depending on who/when it is viewed), such as "Your pet YOURPET is hungry!". The part of the statement that changes, in this case YOURPET, is called a "variable." They're pretty easy to use. Here's an example:
                echo "This item's name is $item"; <- the semicolon is VITAL
                        
                        -NOTE #1: you must use variables already in the code, so be sure to check and make sure that those variables are already there! However, there are some variables that are useable on any page. They are:
                                The username of the logged-in player: $name                                        
                                The user ID # of the logged-in player: $uid
                        
                        -NOTE #2: Watch for quotation marks. Firstly, do not use the "curved" quotation marks you find in programs such as Microsoft Word. Additionally, if the echo statement is contained in double quotes, and you want the text in the echo statement to also have double quotes, yoou must put a backslash in front of it. That's this one: \ For example:
                                echo "Your pet $petname says \"hello\"!";
                        Single quotes are okay as long as you used double quotes around the echo statement.
                        
                        -NOTE #3: If the variable is going to touch another character, you're going to need something a little trickier, or else it will think that character is part of the variable name! In order to say "You have two $items" with no space between the variable and the 's', you will need to do it like this:
                                echo "You have two $item" . "s";
                        The period means that you are adding more text after the first part of your echo statement. You can also use this if you need a dollar sign in your text.
                        
                        -NOTE #4: You can use HTML statements in the echo statements, with no additional work (as long as you are careful about quotes). ex: echo "<font color='black'>"; 
                        
                        
HOW TO USE/EDIT (experts)
        Just some notes on what things are, to make it easier to change.
        
        Tables in the database:
        
        Functions:
        -function connecttodb() 
                returns mySQLi link for use in mySQLi functions. The variable returned is named $link and referred to in nearly every other page.
                Found in header.txt. 
        -function pet_img($link, $species, $color, $alt, $pose)
                returns the URL of the requested pet image.
                if $alt == 0, takes image from neopets' servers.
                if $alt == 2 or higher, considered an "alternate" option for that color/species combo, and the number is appended to the URL.
                Found in header.txt