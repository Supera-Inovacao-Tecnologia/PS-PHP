
### Passo a passo
Clone Repositório
```sh
git clone https://github.com/diegoamorimsilva/PS-PHP.git
```
Crie o Arquivo .env
```sh
cp .env.example .env
```

Entre no diretorio laradock
```sh 
cd laradock/
```
Crie o Arquivo .env
```sh
cp .env.example .env
```
Atualize as variáveis de ambiente do arquivo .env
```dosini

PHP_VERSION=8.0

```

Suba os containers do projeto
```sh
docker-compose up -d nginx mysql phpmyadmin workspace
```


Acessar o container
```sh
docker exec -it 8a3cfad159bf03ec246bd5552f553b704f7a170e64eaab470174ef9d70a27661 bash
```


Instalar as dependências do projeto
```sh
composer install
```


Gerar a key do projeto Laravel
```sh
php artisan key:generate
```


Acessar o projeto
[http://localhost](http://localhost)

Acessar o banco de dados
[http://localhost:8081](http://localhost:8081)