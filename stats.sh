#!/bin/bash

core=`find ./ | grep 'core\.php$' | xargs wc -l | awk '{print $1}'`

content=`find ./ | grep 'www\/pages\/.*\.php$\|\.js$' | xargs wc -l | grep -oE '[0-9]+\stotal' | awk '{print $1}'`

layout=`find ./ | grep '\.css$' | xargs wc -l | grep -oE '[0-9]+\stotal' | awk '{print $1}'`

deploy=`find ./www\/_deploy\/ | grep '\.html$\|\.css$\|\.js$\|\.htaccess$' | xargs wc -l | grep -oE '[0-9]+\stotal' | awk '{print $1}'`

echo -e "\nStats"
echo -e "lines of code: $core (core) + $content (content & semantics) + $layout (layout)"
echo -e "->deployed: $deploy lines of static markup"