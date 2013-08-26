bin=$(cd `dirname $0` && pwd)
cd $bin
name=${1-cli}
include="src|vendor|cli\.php|composer\.json"
exclude="\.git|\.txt$|\/Tests|\/tests|\.phar|\.xml|\.md$|LICENSE$|\.dist$|\.sh$|\.exe$|\.lock$"
phar pack -f $name.phar -c 0 -b "#!/usr/bin/env php -dphar.readonly=0" -i "$include" -x "$exclude" -s stub.php ..

chmod +x $name.phar
