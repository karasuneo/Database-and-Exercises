# 実行方法
## バックエンド
1. ディレクトリ移動
```
cd backend
```

2. MySQLサーバーとGoサーバーを立ち上げる
```
docker compose up -d
```

## フロントエンド
1. ディレクトリ移動
```
cd frontend/web
```

2. パッケージインストール
```
npm i
```

3. サーバー立ち上げ
```
npm run dev
```

4. サーバーにアクセス
`http://localhost:3000/`にアクセス


# DBの初期化スクリプト
`backend/Docker/mysql/init` 内にある