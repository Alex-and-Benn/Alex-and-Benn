ComicBetas
=============
read this in a text editor such as TextMate

####Ingredients:
-Mac OS X Maverics (http://www.apple.com/)

-GitHub.app (https://github.com/)

-A TextEditor: TextMate (http://macromates.com/), TextWrangler (http://www.barebones.com/products/textwrangler/), BBEdit (http://www.barebones.com/products/bbedit/) or just VI (advanced)

-A FTP client: Cyberduck (http://cyberduck.io/?l=en), FileZilla (https://filezilla-project.org/), or just via Terminal (advanced)

-Terminal (https://github.com/0nn0/terminal-mac-cheatsheet/wiki/Terminal-Cheatsheet-for-Mac-(-basics-))

-MAMP (http://www.mamp.info/en/)

####Stack(ish):
-Mac (http://www.apple.com/)

-Apache (http://httpd.apache.org/)

-MySQL (http://www.mysql.com/)

-PHP (http://www.php.net/)

-SASS (http://sass-lang.com/)

-HTML (http://w3schools.com)

####Setup:
#####Open GitHub.app
1. Select "File>New Repository" (Command-N)
2. Give it the Name "ComicBetas"
3. Click, "Create Repository," button
4. Click, "Settings:" the fourth icon on the left in the Grey bar of the main window.
5. Make sure the, "Primary remote Repository (origin)"," feild says the following:
    https://github.com/ComicBetas/Initial.git
6. Click, "Update Remote," button.

#####Open Terminal

$ cd /ComicBetas/Initial/

$ sudo gem install sass

####To Pull:
#####Open GitHub.app
1. select "Repository Synchronize" (Command-S)
2. If you get a conflict you'll see 
```html
<<<<<<< HEAD
your changes
=======
Benn's Changes
>>>>>>> FETCH_HEAD
```
    It's up to you to decide which is right

####To Change:
#####CSS:
1. edit style.css
2. Open terminal
    $ cd /ComicBetas/Initial/assets/scss
    $ sass style.scss ../css/custom.css --style=compressed /* this is generating custom.css, see site for additional addons

####To Commit:
To Be Written (TBW)

####To Push:
TBW
