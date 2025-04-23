# dockerphp
Esquema bàsic d'una aplicació PHP amb entorn de DEV amb docker

- L'aplicació s'aixecarà al port 8080 de la màquina local
- El mysql no serà visible des de fora dels contenidors
- Mostra dues formes de definir variables d'entorn amb docker i php
  - L'objectiu és que la cadena de connexió sigui dinàmica i no estigui escrita a sang (hardocded) a l'aplicació