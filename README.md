# PHPとMySQLをとりあえず使い人向け

## 必要なもの
- Git
- Docker Toolbox

## サンプルコードを持ってくる
`git clone https://github.com/a4t/docker-php-mysql.git`

## Docker Toolboxのダウンロード
https://www.docker.com/docker-toolbox

## Docker MachineをLocalで立ち上げる

```
$ docker-machine create --virtualbox-cpu-count "2" --virtualbox-memory "2048" --driver virtualbox default
$ eval "$(docker-machine env default)"
$ docker-machine ip default # これがブラウザで接続するIP
```

## Docker Composeを使う

```
$ docker-compose build # 3分ぐらいかなー
$ docker-compose up -d
```

## ブラウザで確認
- 先ほどのIPを使ってブラウザでアクセスする

- もしくは `curl $(docker-machine ip default):8080/index.php`
  - `Hello World` が表示されればOK

- MySQLとの疎通確認は `curl $(docker-machine ip default):8000/mysql.php`
  - `Connect MySQL` と表示されればOK

## 開発方法
`app/` 以下を適当にいじればいい

## Docker Machineの止め方
Docker Machine は起動していると仮想CPU2個とメモリ2G専有するので使わなくなったら落とすと良い
```
$ docker-machine stop default
```

起動方法(たまにDocker Machine落ちるのでその際もこのコマンド)
```
$ docker-machine start default
eval ~~~ ってところからまた始めること
```
