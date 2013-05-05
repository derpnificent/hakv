<?php
/**
 * Site configuration, this file is changed by user per site.
 *
 */

/**
 * Set level of error reporting
 */
error_reporting(-1);
ini_set('display_errors', 1);

/**
* Set what to show as debug or developer information in the get_debug() theme helper.
*/
$ha->config['debug']['hakv'] = false;
$ha->config['debug']['session'] = false;
$ha->config['debug']['timer'] = true;
$ha->config['debug']['db-num-queries'] = true;
$ha->config['debug']['db-queries'] = true;

/**
*Set database.
*/
$ha->config['database'][0]['dsn'] = 'sqlite:' . Hakv_SITE_PATH . '/data/.ht.sqlite';


/**
 * What type of urls should be used?
 * 
 * default      = 0      => index.php/controller/method/arg1/arg2/arg3
 * clean        = 1      => controller/method/arg1/arg2/arg3
 * querystring  = 2      => index.php?q=controller/method/arg1/arg2/arg3
 */
$ha->config['url_type'] = 1;

/**
 * Set a base_url to use another than the default calculated
 */
$ha->config['base_url'] = null;

/**
 * How to hash password of new users, choose from: plain, md5salt, md5, sha1salt, sha1.
 */
$ha->config['hashing_algorithm'] = 'sha1salt';


/**
 * Allow or disallow creation of new user accounts.
 */
$ha->config['create_new_users'] = true;

/**
 * Define session name
 */
$ha->config['session_name'] = preg_replace('/[:\.\/-_]/', '', __DIR__);
$ha->config['session_key']  = 'hakv';

/**
 * Define default server timezone when displaying date and times to the user. All internals are still UTC.
 */
$ha->config['timezone'] = 'Europe/Stockholm';

/**
 * Define internal character encoding
 */
$ha->config['character_encoding'] = 'UTF-8';

/**
 * Define language
 */
$ha->config['language'] = 'en';



/**
 * Define the controllers, their classname and enable/disable them.
 *
 * The array-key is matched against the url, for example: 
 * the url 'developer/dump' would instantiate the controller with the key "developer", that is 
 * CCDeveloper and call the method "dump" in that class. This process is managed in:
 * $ha->FrontControllerRoute();
 * which is called in the frontcontroller phase from index.php.
 */
$ha->config['controllers'] = array(
  'index'     => array('enabled' => true,'class' => 'CCIndex'),
  'developer' => array('enabled' => true,'class' => 'CCDeveloper'),
  'theme'     => array('enabled' => true,'class' => 'CCTheme'),
  'guestbook' => array('enabled' => true,'class' => 'CCGuestbook'),
  'content'   => array('enabled' => true,'class' => 'CCContent'),
  'blog'      => array('enabled' => true,'class' => 'CCBlog'),
  'page'      => array('enabled' => true,'class' => 'CCPage'),
  'user'      => array('enabled' => true,'class' => 'CCUser'),
  'acp'       => array('enabled' => true,'class' => 'CCAdminControlPanel'),
  'module'    => array('enabled' => true,'class' => 'CCModules'),
  'my'        => array('enabled' => true,'class' => 'CCMycontroller'),
);

/**
 * Settings for the theme.
 */
$ha->config['routing'] = array(
  'home' => array('enabled' => true, 'url' => 'index/index'),
);


/**
 * Define menus.
 *
 * Create hardcoded menus and map them to a theme region through $ha->config['theme'].
 */
$ha->config['menus'] = array(
  'navbar' => array(
    'home'      => array('label'=>'Home', 'url'=>'home'),
    'modules'   => array('label'=>'Modules', 'url'=>'module'),
    'content'   => array('label'=>'Content', 'url'=>'content'),
    'guestbook' => array('label'=>'Guestbook', 'url'=>'guestbook'),
    'blog'      => array('label'=>'Blog', 'url'=>'blog'),
  ),
  'my-navbar' => array(
    'home'      => array('label'=>'About Me', 'url'=>'my'),
    'blog'      => array('label'=>'My Blog', 'url'=>'my/blog'),
    'guestbook' => array('label'=>'Guestbook', 'url'=>'my/guestbook'),
    'content'   => array('label'=>'Content', 'url'=>'content'),
  ),
);

$ha->config['theme'] = array(
  'path'            => 'site/themes/mytheme',
  'parent'          => 'themes/grid',
  'stylesheet'      => 'style.css',
  'template_file'   => 'index.tpl.php',
  'regions' => array('navbar', 'flash','featured-first','featured-middle','featured-last',
    'primary','sidebar','triptych-first','triptych-middle','triptych-last',
    'footer-column-one','footer-column-two','footer-column-three','footer-column-four',
    'footer',
  ),
  // Add static entries for use in the template file. 
  
  'menu_to_region' => array('my-navbar'=>'navbar'),
  'data' => array(
    'header' => 'Hakv',
    'slogan' => 'A PHP-based MVC-inspired CMF',
    'logo' => 'logo_80x80.png',
    'logo_width'  => 80,
    'logo_height' => 80,
    'footer' => '<p>Hakv &copy; by Hampus Kvarnhammar</p>',
  ),
);
