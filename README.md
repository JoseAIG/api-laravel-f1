# API Laravel F1

API demostrativa de la Formula 1 desarrollada en Laravel.

URBE FSWD

# Entidades

- Teams (Equipos/Escuderias)
- Drivers (Pilotos)
- Cars (Monoplazas)
- Tracks (Circuitos)
- Championships (World Champions/Campeones mundiales)

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
      - Query parameters:
        - team_id
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

- ### Cars
  - GET /cars
    - Query parameters:
      - team_id
  - GET /cars/`<id>`
  - POST /cars
    - Body (JSON):
      ```json
      {
        "model": "string, required",
        "manufacturer": "string, required",
        "year": "int, required",
        "power": "int, required",
        "engine": "string, required",
        "team_id": "int, required"
      }
      ```

- ### Tracks
  - GET /tracks
  - GET /tracks/`<id>`
  - POST /tracks
    - Body (JSON):
      ```json
      {
        "name": "string, required",
        "location": "string, required",
        "length": "numeric, required",
        "fastest_lap": "string, required"
      }
      ```