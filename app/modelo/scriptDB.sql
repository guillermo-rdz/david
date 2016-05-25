SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

CREATE SCHEMA IF NOT EXISTS `frases` DEFAULT CHARACTER SET utf8 ;
USE `frases` ;

CREATE TABLE IF NOT EXISTS `frases`.`users` (
  `idusers` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `user` VARCHAR(45) NOT NULL,
  `type` TINYINT(2) NULL,
  PRIMARY KEY (`idusers`))
ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS `frases`.`frase` (
  `idfrase` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `frase_esp` VARCHAR(45) NULL,
  `frase_tso` VARCHAR(45) NULL,
  `type` TINYINT(2) NULL,
  PRIMARY KEY (`idfrase`))
ENGINE = InnoDB


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;


insert into users values(DEFAULT, 'pediatria', 2);
insert into users values(DEFAULT, 'trauma', 2);
insert into users values(DEFAULT, 'admin', 1);

insert into frase values (DEFAULT, 'Fractura en el brazo', 'guss a com', 1);
insert into frase values (DEFAULT, 'Fractura en el pie', 'lajem a foct', 1);
insert into frase values (DEFAULT, 'Fractura en la muñeca', 'lajem a bacom', 1);
insert into frase values (DEFAULT, 'Fractura en el tobillo', 'lajem a com', 1);
insert into frase values (DEFAULT, 'Posible infeccion', 'chabal a chamell', 1);
insert into frase values (DEFAULT, 'Cáncer de hueso', 'cáncer ta a baquel', 1);
insert into frase values (DEFAULT, 'No trote o corra si tiene dolor de espalda', 'cuss a pa');
insert into frase values (DEFAULT, 'No trote o corra si tiene dolor de rodilla', 'muxa aline me cux hoc', 1);
insert into frase values (DEFAULT, 'Desgarro muscular', 'cua a baquel', 1);
insert into frase values (DEFAULT, 'Necesita reposo', 'chaquam a reposo', 1);
insert into frase values (DEFAULT, 'Usted tiene un esguince en', 'oy a esquine', 1);
insert into frase values (DEFAULT, 'No debe mover la parte fracturada', 'muya baques lajemot', 1);
insert into frase values (DEFAULT, 'luxaciones en los  ligamentos', 'a puxíl', 1);
insert into frase values (DEFAULT, 'roturas fibrilare', 'milo coc',1);
insert into frase values (DEFAULT, 'requiere una cirujia', 'paso operación', 1);
insert into frase values (DEFAULT, 'Hay que vendarlo', 'chantic', 1);
insert into frase values (DEFAULT, 'Le pondremos yeso' 'cachetic yeso',1);
insert into frase values (DEFAULT, 'le haremos unas radiografías', 'pastic junuc radiografia',1);
insert into frase values (DEFAULT, 'necesita intervencion quirúrgica','muxa me paso operacion', 1);
insert into frase values (DEFAULT, 'necesita reposo por un dia', 'ca can reposo sun cacal',1);
insert into frase values (DEFAULT, 'necesita reposo por una semana','ca can reposo jun semana', 1);
insert into frase values (DEFAULT, 'A tenido reposo', "bijubtasel xchi'uk", 1);
insert into frase values (DEFAULT, 'Si le toco le duela mas', 'chapbel smelola', 1);
insert into frase values (DEFAULT, "le duele la espalda","mi ip'xabai la pate'", 1);
insert into frase values (DEFAULT, 'Izquierda', "ta tse't", 1);
insert into frase values (DEFAULT, 'derecha', "batsi'bakan", 1);
insert into frase values (DEFAULT, 'ambas', 'xchibal', 1);
insert into frase values (DEFAULT, 'Torcedura', "sts'ebuj", 1);





insert into frase values (DEFAULT, 'Se enferma con frecuencia', 'cha ipa', 2);
insert into frase values (DEFAULT, 'Le arde los ojos', 'cas a sat', 2);
insert into frase values (DEFAULT, 'Tiene diarrea seguido','hambitlot chambel', 2);
insert into frase values (DEFAULT, 'Siempre le da la alergia', 'hoy alergia', 2);
insert into frase values (DEFAULT, 'tiene infección en los ojos', 'chiuy a chiquin', 2);
insert into frase values (DEFAULT, 'tiene infección en los oidos', 'macal a ni', 2);
insert into frase values (DEFAULT, 'problemas al respirar', 'chata chamel', 2);
insert into frase values (DEFAULT, 'padece neumonía', 'chata a neumonia', 2);
insert into frase values (DEFAULT, 'padece de asma', 'chata de asma', 2);
insert into frase values (DEFAULT, 'ruidos respiratorios', 'bac ani', 2);
insert into frase values (DEFAULT, 'tiene infeccción', 'hoy a infeccion', 2);
insert into frase values (DEFAULT, 'debe tomar reposo por un dia', 'tunesco arelos sunc cacal', 2);
insert into frase values (DEFAULT, 'debe tomar reporso por una semana', 'tunesco arelos sunc semana', 2);
insert into frase values (DEFAULT, 'padece de enfermedad intestinal', 'cha at melt intestinal', 2);
insert into frase values (DEFAULT, 'tiene inflamatoria intestinal', 'tiene inflamatoria intestinal', 2);
insert into frase values (DEFAULT, 'tiene diarrea con moco', 'atulk chamnec tall', 2);
insert into frase values (DEFAULT, 'tiene diarrea sin moco', 'chanel chuc chinchel', 2);
insert into frase values (DEFAULT, 'tiene diarrea con sangre', 'hay chayem a bom', 2);
insert into frase values (DEFAULT, 'tiene estreñimiento', 'hay chayem estreñimiento', 2);
insert into frase values (DEFAULT, 'tiene problemas de peso', 'jupemot' ,2);
insert into frase values (DEFAULT, 'falta de apetito', 'chabal cha ve', 2);
insert into frase values (DEFAULT, 'le arden los ojos?', "mi kux a sa't",2);
insert into frase values (DEFAULT, 'Nariz', "snil'", 2);
insert into frase values (DEFAULT, 'Garganta', "snuk'", 2);
insert into frase values (DEFAULT, 'bebé', 'olol', 2);
insert into frase values (DEFAULT, 'adios', 'teme sha kom', 2);
insert into frase values (DEFAULT, 'Qué estabas haciendo', "k'ush cha pas", 2);
insert into frase values (DEFAULT, 'después de un dia entero', "ti k'al junam k'a'k al", 2);
insert into frase values (DEFAULT, 'no puede comer', "ma'k te xve", 2);
insert into frase values (DEFAULT, 'no puede tomar', "ma'k te xuch", 2);
insert into frase values (DEFAULT, 'cintura', "xen ts' án", 2);
insert into frase values (DEFAULT, 'corazón', "ts'ou ts'an", 2);
insert into frase values (DEFAULT, 'comio algo que le callo pesado?','jaym a vavilal', 2);
insert into frase values (DEFAULT, 'Analisis clínicos', 'chapel meltsanel', 2);
insert into frase values (DEFAULT, 'Ultrasonido', 'semealth', 2);
insert into frase values (DEFAULT, 'No hay de que', 'muýuk vovol', 2);
insert into frase values (DEFAULT, "Como estas?","k'u xa-elan?", 2);
insert into frase values (DEFAULT, "De donde viene?", 'bu likemot tal?', 2);
insert into frase values (DEFAULT, 'Jocote', "po'on", 2);
insert into frase values (DEFAULT, "Calabacita", "to 'ls", 2);
insert into frase values (DEFAULT, "Carne", "tibol", 2);
insert into frase values (DEFAULT, "No puede comer carne", "muyúk  bats tibol", 2);
insert into frase values (DEFAULT, "Niña", "tseb", 2);
insert into frase values (DEFAULT, "Niño", "keren", 2);
insert into frase values (DEFAULT, "Por favor", "avokaluk", 2);
insert into frase values (DEFAULT, "Gracias", "kolaval", 2);