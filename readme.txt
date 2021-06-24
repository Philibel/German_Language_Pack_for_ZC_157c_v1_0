      Readme File for German Language Pack ZC v1.5.7c

      Readme File for German Language Pack updated for Zen Cart Version 1.5.7c Version 1.0
        The purpose of this mod is to provide a German Language Pack to work with Zen Cart Version
        1.5.7c .

        History

        1. Version 1.0 May 2021
        The version 1.0 (dated May 2021) was made for v1.5.7c and included all changes relevant
        up to Zen Cart version 1.5.7c.
        It contains a plugin so you can check in your admin under configuration if a new
        version for the language package is available. The plugin was originally written for the
        Dutch Language Pack by Zen4All, who was so kind to let me modify it for use in other
        language packs.
        In case you want to remove the German language package; the uninstall.sql file in this
        folder will remove the database changes that the plugin made.

        STOP!

        Before you upload this package to your site: back-up EVERYTHING!
        Your files AND your database must be backed-up.

        Installation
        
        1. Install the files
        
        Unzip the release package to a new folder.
        Rename the admin folder to reflect the name of your admin folder
        Drag all folders into the root folder for your site (that's the one with an includes
        folder already as well as images, cache, media and a number of others).
        Upload all files of this package to your live server.
        
        If you are upgrading from an older German Language Pack, You'll find
        obsolete files.
          They can be removed, i.e. text from widerrufsrecht.php has to be taken care of as part of
          the general conditions in conditions.php.
        
        2. Activate this language pack in your admin
        
        Login to your Admin and in Localization &gt; Languages click the "new language" button.
      
        set "Name:" to "german"
        set "Code:" to "de"
        set "Image:" to "icon.gif"
        set "Directory:" to "german"
        set "Sort Order:" to your choice of order
        Set as default: check this box if you want this language to be your store default
        language - otherwise leave blank
        click the "insert" button
        
        3. Making changes
        
        If you intend to make changes to any of the defines contained in the files of this package,
        save the changed files to the relevant template folder of your install. It is not
        recommended to overwrite the existing core files as it will make future upgrades much more
        difficult. For information about how to use the override system please <a href=
        "https://docs.zen-cart.com/user/template/template_overrides/" target=
        "_blank"><strong>consult this tutorial</strong></a>.

        4. Assign currency to this language pack

        If you want your customers to automatically switch to the German default currency Euro when
        they select the German language at your store front, then go to Admin &gt; Configuration
        &gt; My Store and set 'Switch To Default Language Currency' to true. This will
        automatically switch to the language's currency when it is changed.

        Additional Help

        If you have any problems using this add-on module, then first review its <a href=
        "https://www.zen-cart.com/showthread.php?205359-German-Language-Pack-for-ZC-version-1-5-x"
        target="_blank"><strong>support thread</strong></a> for a solution.
