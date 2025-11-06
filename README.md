# Projeto 1 – Sistema de Cadastro (Clientes + Fale Conosco)

## Objetivo
Este projeto é uma extensão do CRUD de **clientes** desenvolvido em sala, adicionando um **segundo módulo CRUD completo** com o tema **Fale Conosco**, utilizando **PHP**, **MySQLi** e **HTML/CSS**.

O sistema permite:
- Gerenciar o cadastro de clientes.  
- Receber, listar, editar e excluir mensagens enviadas através do formulário “Fale Conosco”.

---

## Tecnologias Utilizadas
- **PHP**
- **MySQL (MySQLi)**
- **HTML / CSS**
- **XAMPP(ambiente local)**

---

## Estrutura do Projeto

```
/projeto_1/
│
├── config.inc.php
├── index.php
│
├── clientes/
│   ├── clientes-admin.php
│   ├── clientes-cadastro.php
│   ├── clientes-altera.php
│   ├── clientes-form-altera.php
│   ├── clientes-excluir.php
│
├── faleconosco/
│   ├── contato-admin.php
│   ├── contato-cadastro.php
│   ├── contato-altera.php
│   ├── contato-form-altera.php
│   ├── contato-excluir.php
│
└── projeto_1.sql
```

> A pasta `clientes` contém o CRUD de clientes desenvolvido em aula, e `faleconosco` contém o novo CRUD de mensagens.

---

## Funcionalidades do Sistema

### CRUD de Clientes
| Ação | Descrição | Pontos principais |
|------|------------|------------------|
| **Create** | Cadastra um novo cliente. | `INSERT INTO clientes (...) VALUES (...)` |
| **Read** | Lista todos os clientes cadastrados. | `SELECT * FROM clientes` |
| **Update** | Edita informações de um cliente existente. | `UPDATE clientes SET ... WHERE id = ?` |
| **Delete** | Exclui um cliente. | `DELETE FROM clientes WHERE id = ?` |

### CRUD de Fale Conosco
| Ação | Descrição | Pontos principais |
|------|------------|------------------|
| **Create** | Envia uma nova mensagem pelo formulário. | `INSERT INTO faleconosco (...) VALUES (...)` |
| **Read** | Exibe todas as mensagens enviadas. | `SELECT * FROM faleconosco` |
| **Update** | Edita uma mensagem existente. | `UPDATE faleconosco SET ... WHERE id = ?` |
| **Delete** | Exclui uma mensagem. | `DELETE FROM faleconosco WHERE id = ?` |

---

## Estrutura do Banco de Dados

**Banco:** `projeto_1`

```sql
CREATE TABLE clientes (
  id int AUTO_INCREMENT PRIMARY KEY,
  cliente VARCHAR(150) NOT NULL,
  cidade VARCHAR(150),
  estado VARCHAR(50)
);

CREATE TABLE faleconosco (
  id int AUTO_INCREMENT PRIMARY KEY,
  assunto VARCHAR(30),
  nome VARCHAR(150) NOT NULL,
  email VARCHAR(150),
  mensagem VARCHAR(50)
);
```

---

## Como Executar o Projeto

1. Copie a pasta do projeto para o diretório:
   - `htdocs` (XAMPP)
2. Cria uma pasta ou adicione o projeto a uma pasta existente
3. Importe o arquivo **projeto_1.sql** no **phpMyAdmin**.
4. Edite o arquivo **config.inc.php** se necessário:
   ```php
   $conexao = mysqli_connect("localhost:", "root", "");
   ```
5. Acesse o projeto pelo navegador:
   ```
   http://localhost/pastaquecriou/projeto_1/
   ```

---

## Entrega
- Código-fonte completo (CRUD de Clientes + CRUD de Fale Conosco).  
- Arquivo **projeto_1.sql** com as duas tabelas.  
- Arquivo **README.md** com as instruções de execução.  

---

## Observações
- O projeto segue a estrutura do CRUD de Clientes feito em aula.  
- O módulo Fale Conosco foi adicionado mantendo o mesmo padrão de código e organização.  
- Ambas as funcionalidades foram testadas e estão funcionando corretamente em ambiente local.
