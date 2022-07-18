#!/bin/sh

cd /var/sites/www/web/modules/contrib/feeds_ical
wget https://www.drupal.org/files/issues/2022-03-14/feeds-ical-3261836-7.patch
git apply -v feeds-ical-3261836-7.patch
