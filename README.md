# Pet Appointment API

**Construido com**
- Docker
- PHP 7.4
- Laravel
- Eloquent ORM
- Swagger-PHP
- Mysql 5.7

## Primeiros passos

Clone este projeto

Cria um arquivo de variáveis de ambiente chamado .env na raiz do projeto. Veja um exemplo em .env.example

Inicie o ambiente de desenvolvimento com docker-compose

```bash
$ cd docker/dev
$ docker-compose up -d
```
Este comando irá criar dois containers: app(php, port 80) e db (mysql 5.7, port 3306).

Agora acesse o container

```bash
$ docker exec -it app sh
```

e execute os seguintes comandos para instalar o composer, rodar as migrations e  seeds

```bash
$ composer install
$ php artisan migrate
$ php artisan db:seed --class=PetSeeder
$ php artisan db:seed --class=AtendimentoSeeder
```

## Uso da applicação

- É possível acessar a aplicação através do Swagger (http://localhost/swagger/)
- Também é possível fazendo uso da colletion do postman através do arquivo pet-appointment.postman_collection.json na raiz do projeto