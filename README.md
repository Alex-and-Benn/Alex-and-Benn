ComicBetas
=============
read this in a text editor such as TextMate

Ingredients:
-------------
Mac OS X Maverics
GitHub.app
A TextEditor: TextMate, TextWrangler, BBEdit or just VI
A FTP client: Cyberduck, FileZilla, or just via Terminal (advabced)
Terminal
MAMP

Stack(ish):
-------------
Mac
Apache
MySQL
PHP
SASS
HTML

Setup:
-------------
Open GitHub.app
Select "File>New Repository" (Command-N)
Give it the Name "ComicBetas"
Click, "Create Repository," button
Click, "Settings:" the fourth icon on the left in the Grey bar of the main window.
Make sure the, "Primary remote Repository (origin)"," feild says the following:
    https://github.com/ComicBetas/Initial.git
Click, "Update Remote," button.

Open Terminal
$ cd /ComicBetas/Initial/
$ sudo gem install sass

To Pull:
-------------
Open GitHub.app
elect "Repository Synchronize" (Command-S)
If you get a conflict you'll see 
<<<<<<< HEAD 
your changes
=======
Benn's Changes
>>>>>>> FETCH_HEAD
It's up to you to decide which is right

To Change:
-------------
CSS:
edit style.css
Open terminal
$ cd /ComicBetas/Initial/assets/scss
$ sass style.scss ../css/custom.css --style=compressed /* this is generating custom.css, see site for additional addons

To Commit:
-------------
To Be Written (TBW)

To Push:
-------------
TBW
