# thematic-drupal7
Thematic + Drupal7 + Zen (as a subtheme)

# Setting up in Drupal
* cd to your theme directory: ```cd /your-drupal-site/sites/all/themes/```
* [Install Drupal Zen](https://www.drupal.org/docs/7/themes/zen/installing-zen) 
 * TIP: install Zen via Drush: ```drush dl zen && drush en zen```
 * verify that Zen is installed to: ```/your-drupal-site/sites/all/themes/zen```
* Remove the accompanying starter theme folder: ```rm -rf zen/STARTERKIT/```
* Install thematic-drupal7: 
```bash
git submodule add https://github.com/drawcard/thematic-drupal7/ your-theme-name
cd your-theme-name 
```
[ ] Activate the theme
 * Set up the info file: ```mv STARTERKIT.info.txt your-theme-name.info```
 * Edit the info file accordingly to title your theme, and configure other important settings
 * Set the theme as default: ```drush vset theme_default your-theme-name```
 
[ ] Install required libraries
In terminal:
```bash
git clone https://github.com/mehrpadin/Superfish-for-Drupal ../../libraries/superfish
git clone https://github.com/ajaxorg/ace-builds/ ../../libraries/ace
```

[ ] Enable required modules
In terminal:
```bash
drush en superfish ace_editor
# If prompted to install modules, select Yes
```
[ ] Module Setup
### After installation
* Go to /admin/people/permissions and allow all module settings pages for SuperAdmin & Administrator

### Ace Editor
* Go to /admin/config/content/ace-editor
* Set font size to 10pt
* Save Changes
