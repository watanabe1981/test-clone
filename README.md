# test-clone
clone repository of test branch

\cp -rfp eviweb ./vendor/
php composer.phar install 

./vendor/bin/static-review.php hook:install hooks/test.pre-commit.php .git/hooks/pre-commit

