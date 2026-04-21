<div align="center">

# Primer CRUD Laravel

Aplicación de práctica desarrollada con **Laravel 10** para gestionar personas mediante operaciones CRUD (crear, listar, editar y eliminar), con interfaz web basada en Bootstrap.

</div>

## Objetivo del proyecto

Este repositorio está orientado a aprendizaje y práctica de:

- Arquitectura MVC en Laravel.
- Rutas y controladores para flujos CRUD.
- Vistas Blade reutilizables con layout compartido.
- Integración de componentes frontend (Bootstrap, DataTables y SweetAlert2).

## Tecnologías utilizadas

| Componente        | Versión / Uso                              |
| ----------------- | ------------------------------------------ |
| PHP               | ^8.1                                       |
| Laravel           | ^10.10                                     |
| Base de datos     | MySQL/MariaDB (vía migraciones de Laravel) |
| Frontend          | Blade + Bootstrap 5                        |
| Tabla interactiva | DataTables                                 |
| Alertas           | SweetAlert2                                |
| Bundler de assets | Vite                                       |

## Estructura funcional actual

- **Home principal:** `/` (`home.index`)
- **Módulo People (CRUD):** prefijo `/people`
    - `GET /people` → listado
    - `GET /people/create` → formulario de creación
    - `POST /people/store` → guardar
    - `GET /people/edit/{id}` → formulario de edición
    - `PUT /people/update/{id}` → actualizar
    - `GET /people/destroy/{id}` → eliminar

## Modelo y datos

La entidad principal es `personas`, con los campos:

- `nombre`
- `paterno`
- `materno`
- `fecha_nacimiento`

Definidos en la migración `create_personas_table`.

## Instalación y ejecución local

1. Clonar el repositorio:
    ```bash
    git clone <URL_DEL_REPOSITORIO>
    cd Primer_CRUD_Laravel
    ```
2. Instalar dependencias:
    ```bash
    composer install
    npm install
    ```
3. Configurar entorno:
    ```bash
    cp .env.example .env
    php artisan key:generate
    ```
4. Configurar conexión a base de datos en `.env`.
5. Ejecutar migraciones:
    ```bash
    php artisan migrate
    ```
6. Poblar datos de ejemplo (opcional):
   ```bash
   php artisan db:seed
   ```
7. Levantar la aplicación:
   ```bash
   php artisan serve
   npm run dev
   ```

## Pruebas

Ejecutar pruebas disponibles:

```bash
php artisan test
```

## Notas de interfaz

- Header y footer adaptados para visualización responsiva.
- Favicon configurado desde assets públicos.
- Navegación principal desacoplada del módulo CRUD (Home + People).

<div align="center">

## Licencia

Este proyecto se distribuye bajo la licencia **MIT**.

</div>
