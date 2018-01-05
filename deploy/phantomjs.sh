#!/bin/bash -e
# see http://phantomjs.org/build.html
set -e

pushd /tmp

# install dependencies
apt-get update  -y
apt-get install build-essential chrpath git-core libssl-dev libfontconfig1-dev wget -y

# download phantomjs and decompress
wget https://bitbucket.org/ariya/phantomjs/downloads/phantomjs-2.1.1-linux-x86_64.tar.bz2
tar xjf phantomjs-2.1.1-linux-x86_64.tar.bz2

# install binary
install -t /usr/local/bin phantomjs-2.1.1-linux-x86_64/bin/phantomjs

# cleanup after ourselves
rm -rf phantomjs-2.1.1-linux-x86_64
rm phantomjs-2.1.1-linux-x86_64.tar.bz2

popd
