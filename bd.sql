create database lernejo;
use lernejo;


create table tareas (
  id int not null auto_increment primary key,
  titulo text not null,
  fecha_asignacion date not null,
  fecha_entrega date not null,
  asignatura text not null,
  entregada boolean not null
);

CREATE PROCEDURE gifTareas()
  BEGIN
    select id, titulo, fecha_asignacion, fecha_entrega, asignatura, entregada
    from tareas;
  END;

delete from tareas where true;
insert into tareas (titulo, fecha_asignacion, fecha_entrega, asignatura, entregada) values
  ('Una', '2018-07-07', '2018-09-15', 'Potato', true),
  ('Seis', '2017-07-07', '2017-09-15', 'Eggplant', false);

select *
from tareas;
 
