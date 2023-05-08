# Database-and-Exercises
## コンテナを立ち上げる
```
docker compose up
```

## PHPコンテナに入る
```
docker exec -it Database_And_Exercises_PHP /bin/bash
```

## 実行方法
http://localhost:8000/hello.php にアクセスすると phpinfo(); の内容が表示される

## データベースに接続する
```
docker exec -it Database_And_Exercises_DB bash
```