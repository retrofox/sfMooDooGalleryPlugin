h1. sfMooDooPlugin plugin (for symfony 1.4)

h2. Summary

This 'sfMooDooPlugin' plugin implements a photo gallery easily.

h2. Features
* symfony core 1.4
* Doctrine ORM 1.2
* Depend of sfImageTransformPlugin
  http://www.symfony-project.org/plugins/sfImageTransformPlugin
* Use milkbox (http://reghellin.com/milkbox/) and mootools for lighbox effect.

h2. What it does

Basically added some tables to the model database, management classes, and special components via modules that facilitate the work producing rapid deployment.

h2. Install

h3. Donwload 'sfMooDooPlugin' into pluggins/ folder.

you can use 'Download source' button, clone the repository or add a submodule.

h3. Create the necessary folders.

* upload folder: By default this should be within the web/uploads/mooDooGallery folder.
* created images folder: By default this should be within the web/uploads/mooDooGallery folder.

don't forget add write permission to both folders.

* chmod 777 mooDooGallery/ -R

h3. Add plugin assets
./symfony plugin:publish-assets



h2. Helper
mooDooGallery