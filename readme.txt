=== Tribe Object Cache ===
Contributors: ModernTribe, peterchester, markjaquith, ryan, sivel, ruslany, pierreschmitz
Tags: APC, object cache, backend, cache, performance, speed, batcache, memcached, WinCache, xcache
Requires at least: 3.0
Tested up to: 3.4
Stable tag: 1.0.4

== Description ==

Quickly and easily add object cache support that works across environments. All you have to do is activate the plugin and your install will immediately be set up to support any of the following if they are available on the server:

* APC
* Memcached
* Xcache
* WinCache

== Installation ==

= Install =

1. Install and activate the plugin. This DOES NOT work on a MU Network admin. If you want to install on MU, then install it on only one of the blogs and it will work for the whole network.

If you find any bugs or have any ideas, please mail us.

Please visit the forum for questions or comments: http://WordPress.org/tags/tribe-object-cache/

= Requirements =

* PHP 5.1 or above
* WordPress 3.0 or above

== Documentation ==

= Important Notes =

This DOES NOT work on a MU Network admin. If you want to install on MU, then install it on only one of the blogs and it will work for the whole network.

It is possible that wp-content is not itself writable by the server. If that is the case, then this plugin will not be able to copy the object-cache.php file into the wp-content folder. In that case all you need to do is copy wp-content/plugins/tribe-object-cache/lib/object-cache.php to wp-content/object-cache.php.

Do not change the plugin folder name. This plugin has to be in plugins/tribe-object-cache for it to work!

= More Info =

For more information on any of the supported cache types, please read up on the respective plugins:

* http://wordpress.org/extend/plugins/apc/
* http://wordpress.org/extend/plugins/xcache/
* http://wordpress.org/extend/plugins/memcached/
* http://wordpress.org/extend/plugins/wincache-object-cache-backend/

== Changelog ==

= 1.0.4 =

* Integrate updates to Xcache Object cache 1.0.3

= 1.0.3 =

* Add handler for xcache versions below 1.3 where xcache_unset_by_prefix() is not defined (Such as when I run this on Dreamhost).

= 1.0.2 =

* Dang! Apparently SVN externals don't work on the plugin repo. Reverted externals.

= 1.0.1 =

* Fix retarded typo
* Make all caches externals in svn repo

= 1.0 =

* Initial plugin release

== Frequently Asked Questions ==

= Where do I go to file a bug or ask a question? =

Please visit the forum for questions or comments: http://WordPress.org/tags/tribe-object-cache/