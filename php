#!/usr/bin/env sh

old_ifs="$IFS"

IFS=":"
for php in $PHPENV; do
    php="$(which "$php")"
    
    if [ -x "$php" ]; then
        exec "$php" "$@"
    fi
done

IFS="$old_ifs"

echo "No php binary found!"
