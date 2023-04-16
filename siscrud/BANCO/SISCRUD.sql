CREATE TABLE compra(
cod_prod INT ,
matricula INT,
cod_recibo INT,
vl_compra DECIMAL,
cod_cliente int,
quantidade INT,
subtotal DECIMAL,
nome_produto VARCHAR(10),
FOREIGN KEY (cod_prod) REFERENCES produto(cod_prod),
FOREIGN KEY (matricula) REFERENCES funcionario(matricula),
FOREIGN KEY (cod_recibo) REFERENCES recibo(cod_recibo),
FOREIGN KEY (cod_cliente) REFERENCES cliente(cod_cliente))
ENGINE = INNODB;