CREATE DATABASE BANCO;
USE BANCO;

CREATE TABLE USUARIOS (
    usu_codigo INT NOT NULL AUTO_INCREMENT, 
    usu_nome VARCHAR(45) NOT NULL,
    usu_email VARCHAR(45) NOT NULL,
    PRIMARY KEY (usu_codigo)
);

CREATE TABLE TAREFAS (
    tar_codigo INT NOT NULL AUTO_INCREMENT, 
    tar_setor VARCHAR(45),
    tar_prioridade VARCHAR(45),
    tar_descricao VARCHAR(255), 
    tar_status VARCHAR(45),
    usu_codigo INT, 
    PRIMARY KEY (tar_codigo),
    FOREIGN KEY (usu_codigo) REFERENCES USUARIOS(usu_codigo) 
);


INSERT INTO USUARIOS (usu_nome, usu_email)
VALUES 
    ('geovanna gabryelly', 'geovannagabryelly@email.com'),
    ('ana laura', 'analaura2006@email.com'),    
    ('bruna fernanda' , 'brunafernanda@gmail.com');

INSERT INTO TAREFAS (tar_setor, tar_prioridade, tar_descricao, tar_status, usu_codigo)
VALUES 
    ('META AI', 'Alta', 'Concluir a implementação do sistema de login', 'Em andamento', 1),
    ('Financeiro', 'Média', 'Verificar relatórios financeiros do mês', 'Pendente', 2);


