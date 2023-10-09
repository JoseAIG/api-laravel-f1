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

- ### Drivers
  - GET /drivers
  - GET /drivers/`<id>`
  - POST /drivers
    - Body (JSON):
      ```json
      {
        "first_name": "string, required, min 2",
        "last_name": "string, required, min 2",
        "nationality": "string, required",
        "age": "int, required",
        "team_id": "int, required, team id"
      }
      ```