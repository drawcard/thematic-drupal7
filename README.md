# thematic-drupal7
Thematic + Drupal7 + Zen (as a subtheme)

# Setting up in Drupal
* [Install Drupal Zen](https://www.drupal.org/docs/7/themes/zen/installing-zen) 
 * TIP: install Zen via Drush: ```drush dl zen && drush en zen```
 * verify that Zen is installed to: ```/your-drupal-site/sites/all/themes/zen```
* Remove the accompanying starter theme folder: ```cd /your-drupal-site/sites/all/themes/zen && rm -rf STARTERKIT/```
* Install thematic-drupal7: 
```cd .. ; git submodule update --init --recursive https://github.com/drawcard/thematic-drupal7/ your-theme-name && cd your-theme-name```
[] Activate the theme in Drupal 7:
 * Set up the info file: ```mv STARTERKIT.info.txt your-theme-name.info```
 * Edit the info file accordingly to title your theme, and configure other important settings
 * Go to ```https://your-drupal-site.dev/admin``` and log in
 * Go to ```Appearance``` and activate your sub-theme
 
