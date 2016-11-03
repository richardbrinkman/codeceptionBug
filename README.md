#Test for issue #3680 of codeception

Run this code:
```bash
composer install
vendor/bin/codecept run
echo "select * from users;" | sqlite3 tests/_data/sqlite.db
```

The expected output should be empty. Instead you will see:
```
John|
```
