CREATE TABLE funcionarios (
  id_funcionario BIGINT(11) NOT NULL AUTO_INCREMENT,
  nome VARCHAR(100) NULL,
  email VARCHAR(100) NULL,
  senha VARCHAR(100) NULL,
  cpf CHAR(11) NULL,
  contato CHAR(11) NULL,
  PRIMARY KEY(id_funcionario)
);

CREATE TABLE tipos (
  id_tipo BIGINT(11) NOT NULL AUTO_INCREMENT,
  tipo VARCHAR(10) NULL,
  PRIMARY KEY(id_tipo)
);

CREATE TABLE clientes (
  id_cliente BIGINT(11) NOT NULL AUTO_INCREMENT,
  cpf CHAR(11) NOT NULL,
  email VARCHAR(100) NOT NULL,
  nome VARCHAR(100) NOT NULL,
  senha VARCHAR(100) NOT NULL,
  logradouro VARCHAR(100) NULL,
  numero VARCHAR(5) NULL,
  bairro VARCHAR(50) NULL,
  cidade VARCHAR(100) NULL,
  estado CHAR(2) NULL,
  cep CHAR(8) NULL,
  PRIMARY KEY(id_cliente)
);

CREATE TABLE fornecedores (
  id_fornecedor BIGINT(11) NOT NULL AUTO_INCREMENT,
  nome VARCHAR(100) NULL,
  contato CHAR(11) NULL,
  cnpj CHAR(14) NULL,
  PRIMARY KEY(id_fornecedor)
);

CREATE TABLE produtos (
  id_produto BIGINT(11) NOT NULL AUTO_INCREMENT,
  fornecedor_id BIGINT(11) NOT NULL,
  tipo_id BIGINT(11) NOT NULL,
  nome VARCHAR(50) NULL,
  descricao VARCHAR(255) NULL,
  preco DECIMAL(8,3) NULL,
  imagem VARCHAR(255) NULL,
  PRIMARY KEY(id_produto),
  FOREIGN KEY(fornecedor_id)
    REFERENCES fornecedores(id_fornecedor)
      ON DELETE CASCADE
      ON UPDATE NO ACTION,
  FOREIGN KEY(tipo_id)
    REFERENCES tipos(id_tipo)
      ON DELETE CASCADE
      ON UPDATE NO ACTION
);

CREATE TABLE pedidos (
  id_pedido BIGINT(11) NOT NULL AUTO_INCREMENT,
  cliente_id BIGINT(11) NOT NULL,
  produto_id BIGINT(11) NOT NULL,
  data_pedido DATETIME NULL,
  PRIMARY KEY(id_pedido, cliente_id, produto_id),
  FOREIGN KEY(cliente_id)
    REFERENCES clientes(id_cliente)
      ON DELETE CASCADE
      ON UPDATE NO ACTION,
  FOREIGN KEY(produto_id)
    REFERENCES produtos(id_produto)
      ON DELETE CASCADE
      ON UPDATE NO ACTION
);
