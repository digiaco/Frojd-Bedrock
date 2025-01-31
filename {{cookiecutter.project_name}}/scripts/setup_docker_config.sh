#!/bin/bash

if [ -f ./docker/config/web.env ]; then
    echo "web env already setup"
    exit 0;
fi

if ! [ -d .git ]; then
    echo "Please initialize a git repo in this project before running this command"
    exit -1;
fi


cd $(git rev-parse --show-toplevel)

# Ask the user for their name
# echo Enter ACF_PRO_KEY
# read ACF_PRO_KEY

rm -rf docker/config/web.env
cat docker/config/web.example.env  > docker/config/web.env

cd -
