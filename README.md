# API Laravel F1

API demostrativa de la Formula 1 desarrollada en Laravel.

URBE FSWD

# Entidades

- Teams (Equipos/Escuderias)
- Drivers (Pilotos)
- Circuits (Circuitos)
- Cars (Monoplazas)
- WC (World Champions/Campeones mundiales)

# Endpoints

- ### Teams
  - GET /teams
  - GET /teams/`<id>`
  - POST /teams
    - Body (JSON):
      ```json
      {
        "name": "string, required, min 2",
        "icon": "string, required",
        "engine": "string, required",
      }
      ```