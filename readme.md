# laravel-api
RESTful CRUD api under Laravel.

## Getting Started
This package contain a CRUD RESTful api for the customer table. 

Use de JSON structure below to send customer informations to POST and PUT HTTP methods.
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
* HTTP GET /api/vi/Customer : return all customers as a JSON
* HTTP GET /api/vi/Customer/{customerId} : return a customer by id as a JSON
```
# HTTP POST
```sh
* HTTP POST /api/vi/Customer with a customer JSON record: return a message as a JSON
```
# HTTP PUT
```sh
* HTTP PUT /api/vi/Customer/{customerId} and a customer JSON record: return a message as a JSON
```
# HTTP DELETE
```sh
* HTTP DELETE /api/vi/Customer/{customerId} : return a message as a JSON
```
## Issues
Open an [Issue](https://github.com/phcayres/ljasper/issues), or search for older on.

## Licence
MIT
