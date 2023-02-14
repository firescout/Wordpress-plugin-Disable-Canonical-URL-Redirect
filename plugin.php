<?php 
/*
Plugin Name: Disable Canonical URL Redirect
Description: Disables the "Canonical URL Redirect" features of WordPress 2.3 and above.
Version: 1.0
Author: Orel Krispel
*/ 
remove_filter('template_redirect', 'redirect_canonical');
