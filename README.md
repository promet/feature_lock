Drupal Feature lock
=====================

Overview
--------

This module provide possibility to lock features after their first revert when
using the [drop_ship][O-1] module to manage releases.

[O-1]: https://github.com/promet/drop_ship

Strategy
-------

The overall strategy of this module is that it cuts out the need for a developer
(particularly site-builders) to figure out the odds and ends of creating a new
piece of content (or something else) in an install hook.

Primary this would be used for staging content or components that needs to stay
through the development life cycle and into a release cycle but should have the
ability to change any way the client would like them to. Some components, such
as menu items and panes, need to be created, but we don't care *how* they
change. We just care that they are installed. Features provides a very flushed
out ability to save and load components without the rigmarole of figuring out
which items are necessary when creating code.

Usage
-----

The usage is simple. Simply add via composer.

    "require": {
      "drupal/feature_lock": "~1.0"
    }

Install like any other module you would install in Drupal.

For examples on how to set up a hook checkout [feature_lock.api.php][U-1].
Ideally, you can then add this hook to each feature that you wish to be locked,
though the scope of the hooks isn't necessarily limited to that.

[U-1]: https://github.com/promet/feature_lock/blob/master/feature_lock.api.php
