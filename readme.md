Project "Test" for Costa Rica.

Goto `/docker` and run `build.sh` to build a project under Docker.

## URLs:

- [http://localhost:8080](http://localhost:8080) - List of users
- [http://localhost:8080/get_balance.php](http://localhost:8080/get_balance.php) - `{"error":"UID error!"}`
- [http://localhost:8080/get_balance.php?uid=1](http://localhost:8080/get_balance.php?uid=1) - `{"ok":-16}`
- [http://localhost:8080/get_balance.php?uid=2](http://localhost:8080/get_balance.php?uid=2) - `{"ok":27}`
- [http://localhost:8080/get_balance.php?uid=10](http://localhost:8080/get_balance.php?uid=10) - `{"ok":0}`
- [http://localhost:8080/get_balance.php?uid=11](http://localhost:8080/get_balance.php?uid=11) - `{"ok":-10}`
- [http://localhost:8080/get_balance.php?uid=12](http://localhost:8080/get_balance.php?uid=12) - `{"ok":-1}`
- [http://localhost:8080/get_balance.php?uid=x](http://localhost:8080/get_balance.php?uid=x) - `{"error":"UID error!"}`
- [http://localhost:8080/get_balance.php?uid=10000](http://localhost:8080/get_balance.php?uid=10000) - `{"error":"No transactions for this UID!"}`
- [http://localhost:8080/classes/*](http://localhost:8080/classes/) - `403 Forbidden`
- [http://localhost:8080/data/*](http://localhost:8080/data/) - `403 Forbidden`
- [http://localhost:8080/docker/*](http://localhost:8080/docker/) - `403 Forbidden`
- [http://localhost:8080/init.php](http://localhost:8080/init.php) - `403 Forbidden`