#!/bin/bash

git config gitflow.branch.master 'main'
git flow init -d -t 'v'

chmod 755 ./git-hooks/bump-version.sh
cd .git/hooks
ln -nfs ../../git-hooks/bump-version.sh post-flow-release-start
ln -nfs ../../git-hooks/bump-version.sh post-flow-hotfix-start
