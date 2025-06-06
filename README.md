# 🛒 E-Commerce-AppInventor
### http://54.211.83.87:8080/welcome.php

Este é um backend simples em PHP criado para integração com aplicativos desenvolvidos no [MIT App Inventor](https://appinventor.mit.edu/). Ele fornece funcionalidades básicas de autenticação e registro de usuários, conectando-se a um banco de dados MySQL hospedado em uma instância EC2 da AWS.

## 📁 Estrutura Banco de dados

### Diagrama Entidade Relacionamento

![Alt text](image.png)

### Estrutura de banco de dados

| Tabela         | Descrição                               |
|----------------------------------------------------------|
| `tb_loja`      | Tabela que gerencia as lojas            |
| `tb_cliente`   | Tabela gerencia clientes                |
| `tb_compra`    | Tabela gerencia as compras              |
| `tb_produto`   | Tabela gerencia os produtos             |
| `tb_itens`     | Tabela gerencia os itens                |



## ⚙️ Tecnologias Utilizadas

- **PHP**
- **MySQL**
- **Docker**
- **GitHub Actions**
- **MIT App Inventor** (como frontend mobile)

## 🔌 Endpoints

### POST `/registrar.php`
Registra um novo usuário no banco de dados.

curl --request POST \
  --url http://54.211.83.87:8080/registrar.php \
  --header 'Content-Type: application/x-www-form-urlencoded' \
  --header 'accept: /' \
  --data 'nome=Cristiano Ronaldo' \
  --data senha=senha \
  --data email=cristianoronaldo@hotmail.com

Parâmetros esperados via POST:
- `nome`
- `email`
- `senha`


---

### POST `/logar.php`
Verifica as credenciais de login do usuário.


curl --request POST \
  --url http://54.211.83.87:8080/logar.php \
  --header 'Content-Type: application/x-www-form-urlencoded' \
  --header 'accept: /' \
  --data senha=senha \
  --data email=cristianoronaldo@hotmail.com


Parâmetros esperados via POST:
- `email`
- `senha`

---

### GET `/welcome.php`
Página de boas-vindas para usuários logados.

Acesse este enderedo: http://54.211.83.87:8080/welcome.php

---


## 🧩 Banco de Dados

A conexão é feita com o seguinte banco:

```php
$host = "54.211.83.87";
$usuario = "root";
$senha = "root";
$banco = "appinventor";
