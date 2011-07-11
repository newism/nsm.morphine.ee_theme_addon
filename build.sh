#!/bin/bash
path=releases/${2}
third_party_path=${path}/system/expressionengine/third_party/${1}
mkdir -p ${third_party_path}
cp config.php ${third_party_path}
cp acc.* ${third_party_path}
cp -R language ${third_party_path}
cp LICENSE.md ${path}
cp README.md ${path}
cp CHANGELOG.md ${path}
cp -R themes ${path}
rm -R ${path}/themes/third_party/nsm_morphine_theme/.sass-cache
rm -R ${path}/themes/third_party/nsm_morphine_theme/sass-src
rm ${path}/themes/third_party/nsm_morphine_theme/config.rb