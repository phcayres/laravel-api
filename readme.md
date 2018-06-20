# laravel-api
RESTful CRUD api under Laravel.

## Getting Started
This package contain a CRUD RESTful api for the customer table using URLs, HTTP verbs, and status code. REST is a simple way to perform and enable interactions between systems that have strength in recent years inspired by HTTP. 

Use the JSON structure bellow to send customer informations to POST and PUT HTTP verbs.
```sh
{
  "email": "teste2@teste.com.br",
  "name": "Paulo Henrique Cayres",
  "address": "rua teste, 001",
  "creation": "2018-06-16 14:45:00",
  "password": "123456"
}
```
## Example request URIs
# HTTP GET
```sh
* HTTP GET /api/v1/Customer : return all customers as a JSON
* HTTP GET /api/v1/Customer/{customerId} : return a customer by id as a JSON
```
# HTTP POST
```sh
* HTTP POST /api/v1/Customer with a customer JSON record: return a message as a JSON
* HTTP POST /api/v1/Customer/auth
  parameters:
    email=phcayres@gmail.com
    password=123456
```
# HTTP PUT
```sh
* HTTP PUT /api/v1/Customer/{customerId} and a customer JSON record: return a message as a JSON
```
# HTTP DELETE
```sh
* HTTP DELETE /api/v1/Customer/{customerId} : return a message as a JSON
```
## Issues
Open an [Issue](https://github.com/phcayres/laravel-api/issues), or search for older on.

## Licence
MIT
