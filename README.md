
<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

<br><br><br>

<h1 align="center">API CBC</h1>
<h4 align="center">Uma API REST para gerenciamento de recursos financeiros de clubes</h4>

## Sobre o projeto
Este projeto tem como finalidade atestar meus conhecimentos nos seguintes pontos:
- Desenvolvimento de aplicações LARAVEL
- Desenvolvimento de API's REST utilizando LARAVEL
- POO

## Por que este projeto?
- Este projeto faz parte do meu portfólio pessoal, uma maneira de comprovar meus conhecimentos em LARAVEL.
- A construção de API's faz parte da rotina de um desenvolvedor back-end, então esse projeto serviu como uma simulação da rotina real de um desenvolvedor back-end atuando com LARAVEL.

## Sobre a modelagem do Banco de Dados
- O desafio consistia na construção de uma API REST utilizando LARAVEL que permitisse o gerenciamento de filmes.
- Para o desafio foram criadas as seguintes tabelas:
	- recursos
	- clubes

# Sobre as Rotas
## Clubes
```php
Method: GET
Url: http://127.0.0.1:9000/api/v1/clubes

- Para listar todos os clubes
```

```php
Method: GET
Url: http://127.0.0.1:9000/api/v1/clubes/{id}

- Para listar um clube em específico
```

```php
Method: POST
Url: http://127.0.0.1:9000/api/v1/clubes

- Para Adicionar um novo clube
- Parameters:
	-	clube (string)
```

```php
Method: PUT/PATCH
Url: http://127.0.0.1:9000/api/v1/clubes/{id}

- Para Atualizar um clubes
- Parameters:
	-	clube (string)
```

```php
Method: DELETE
Url: http://127.0.0.1:9000/api/v1/clubes/{id}
```

## Recursos
```php
Method: GET
Url: http://127.0.0.1:9000/api/v1/recursos

- Para listar todos os recursos
```

```php
Method: GET
Url: http://127.0.0.1:9000/api/v1/recursos/{id}

- Para listar um recurso em específico
```

```php
Method: POST
Url: http://127.0.0.1:9000/api/v1/recursos

- Para Adicionar um novo recursos
- Parameters:
	- recurso (string)
	- saldo_disponivel (float)
```

```php
Method: PUT/PATCH
Url: http://127.0.0.1:8000/api/v1/recursos/{id}

- Para Atualizar um recursos
- Parameters:
	- recurso (string)
	- saldo_disponivel (float)
```

```php
Method: DELETE
Url: http://127.0.0.1:8000/api/v1/recursos/{id}
```

## Considerações importantes
1. Como todas as requisições passam por um ponto comum, é perfeitamente possível implementar registro de logs de maneira geral, e aplicar especificações em certos casos

## Setup
1. Clone o repositório
2. Acesse a raíz do projeto. Lá há um script bash que automatiza algumas configurações iniciais, para executá-lo:
```bash
bash initial.sh
```
3. Com seu ambiente rodando, acesse o container e execute as seeders:
```php
php artisan db:seed
```
4. O projeto deve estar disponível no endereco: [localhost:9000/api/v1/](http://localhost:8000/api/v1/) 

## Observações importantes
- É aconselhável que você tenha em sua máquina o [postman](https://www.postman.com/) para que possa fazer os devidos testes sobre as rotas disponíveis nesta API.

- É aconselhável que você tenha em sua máquina o [docker](https://www.docker.com/products/docker-desktop/) para que possa subir a aplicação.

## Dependências e suas versões
- PHP 8.0+
- LARAVEL 8.83+

## Considerações finais
- API ainda passará por alterações, esta API não representa uma amostra real, devendo ser utilizada apenas para se ter uma noção sobre como funciona um API REST.
- Qualquer dúvida ou sugestão, entre em contato pelo e-mail: lucas.fullstack.dev@gmail.com
v
