# Introduction

This project is based on the [SURFnet theme](https://github.com/SURFnet/simpleSAMLphp-SURFnet) for simpleSAMLphp. This version uses [Bootstrap](http://getbootstrap.com/) for extra responsiveness!

Here are some non-interactive previews of the theme. Try them at various resolutions:

* [Sign in](http://adventistuniversity.github.io/themeADU/login.html)
* [Error](http://adventistuniversity.github.io/themeADU/error.html)
* [Change password](http://adventistuniversity.github.io/themeADU/pw_change.html)
* [Reset password](http://adventistuniversity.github.io/themeADU/pw_reset.html)

The module can be installed in simpleSAMLphp by copying it into the `modules` 
directory.

# License
As this module takes code from simpleSAMLphp which is licensed under the LGPLv2
this module has the same license. See included `COPYING` file.

# Installation
We assume simpleSAMLphp is installed in `/var/www/simplesamlphp`, see the
[installation instructions](http://simplesamlphp.org/docs/stable/simplesamlphp-install). 

You can install this theme as follows:

    $ cd /var/www/simplesamlphp/modules
    $ git clone https://github.com/adventistuniversity/themeADU.git themeADU
    $ touch /var/www/simplesamlphp/modules/themeADU/enable

Now you can edit the main configuration file to enable the theme, change the
following line in `/var/www/simplesamlphp/config/config.php`:

    'theme.use'             => 'default',

Into:

    'theme.use'             => 'themeADU:ADU',

This should enable the theme. You can only see it in action when there is an
actual login screen with username and password dialog.

# Customization

Replace `logo.png` with your own logo. You can customize the page background color in `themeADU/www/signin.css`. To customize other elements, you can include a custom [Bootstrap theme](http://getbootstrap.com/examples/theme/).
