# dockerphp
Esquema bàsic d'una aplicació PHP amb entorn de DEV amb docker

- L'aplicació s'aixecarà al port 8080 de la màquina local
- El codi de l'aplicació està tot a la carpeta ./php i el serveix el contenidor _web_
  - La resta de fitxers i carpetes són auxiliars
- El contenidor _mysql_ 
  - No és visible des de fora dels contenidors
  - El primer cop s'inicialitza amb una BBDD, i una taula amb algunes dades
- El docker-compose.yml Mostra dues formes de definir variables d'entorn amb docker i php
  - L'objectiu és que la cadena de connexió del php sigui dinàmica i no estigui escrita a sang (hardocded) a l'aplicació, per fer-ho heu d'utilitzar les variables d'entorn.
- El contenidor _web_ és una imatge construïda a mida i derivada de php:apache per incloure els drivers de mysqli de php
- Hi ha un contenidor _adminer_ al port 8081 que permet gestionar la BBDD mysql

## Recursos addicionals
- [Xuleta d'instruccions bàsiques de Docker i Docker Compose](Docker.md)