CREATE TABLE professores (
  idProfessor INT NOT NULL AUTO_INCREMENT,
  nomeProfessor VARCHAR(50) NOT NULL,
  emailProfessor VARCHAR(50) NOT NULL,
  PRIMARY KEY(idProfessor)
);

create table modulo (
	idModulo integer unsigned not null auto_increment,
    nomeModulo varchar(12) not null,
    primary key(idModulo)
    
);

create table turno (
	idTurno integer unsigned not null auto_increment,
    nomeTurno varchar(12) not null,
    primary key(idTurno)
);
 
CREATE TABLE disciplinas (
  idDisciplina INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  nomeDisciplina VARCHAR(50) NOT NULL,
  carga_horaria SMALLINT UNSIGNED NULL,
  PRIMARY KEY(idDisciplina)
);
 
CREATE TABLE alunos (
  idAluno INT NOT NULL AUTO_INCREMENT,
  cpfAluno CHAR(20) NOT NULL,
  nomeAluno VARCHAR(50) NOT NULL,
  emailAlino VARCHAR(50) NOT NULL,
  foneAluno CHAR(14) NOT NULL,
  dtnascAluno DATE NULL,
  PRIMARY KEY(idAluno)
);
 
CREATE TABLE turmas (
  idTurma INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  professores_id INT NOT NULL,
  disciplinas_id INTEGER UNSIGNED NOT NULL,
  PRIMARY KEY(idTurma),
  INDEX turmas_FKIndex1(disciplinas_id),
  INDEX turmas_FKIndex2(professores_id),
  FOREIGN KEY(disciplinas_id)
    REFERENCES disciplinas(idDisciplina)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION,
  FOREIGN KEY(professores_id)
    REFERENCES professores(idProfessor)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION
);