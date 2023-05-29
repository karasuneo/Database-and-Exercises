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

```
mysql -u root -p
```

## texの使い方
### Dockerイメージのpull
```
docker pull ghcr.io/being24/latex-docker:latest
```

### docker imageの起動
```
docker run --rm --name latex-template-ja -it -v ${PWD}:/workdir ghcr.io/being24/latex-docker
```

### pdfファイルの作成
```
uplatex main.tex
```
```
dvipdfmx main
```