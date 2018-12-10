# skeleton21

## How to use

### Clone the app:
```
git clone https://github.com/TheBlinkMan/skeleton21
```

### How to run the app with Docker Compose:

#### Requirements:
* Internet Access
* Docker
* Docker Compose

#### Run this commands:
```
cd skeleton21
docker-compose up --build
docker ps
docker exec -it [containerid] /bin/bash
./vendor/bin/doctrine-module dbal:import cartorios.sql
```

### Access the url localhost:8080 using a browser or a CLI tool

## Reminders
1. Faça testes unitários, suite de testes bem organizados (Plus).
2. Use git e tente fazer commits pequenos e bem descritos.
3. Faça pelo menos um README explicando como fazer o setup, uma explicação da solução proposta, o mínimo de documentação para outro desenvolvedor entender seu código (Plus).
4. Siga o que considera boas práticas de programação, coisas que um bom desenvolvedor olhe no seu código e não ache "feio" ou "ruim".
