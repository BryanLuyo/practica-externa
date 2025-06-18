# ConcesionariaApp (.NET 8)

Este ejemplo implementa una arquitectura hexagonal sencilla para una API de concesionarias y sucursales. La aplicación está separada en las siguientes capas:

- **Domain**: Contiene las entidades de negocio y las interfaces de los repositorios.
- **Application**: Implementa casos de uso que orquestan la lógica de la aplicación.
- **Infrastructure**: Provee implementaciones de las interfaces de repositorio (en este caso, una versión en memoria).
- **Api**: Presenta los controladores HTTP para exponer la funcionalidad.

Para compilar y ejecutar debería contarse con el SDK de .NET 8. Desde la carpeta `ConcesionariaApp/src/Concesionaria.Api` se puede ejecutar:

```bash
 dotnet run
```

Esto levantará una API REST donde se pueden crear concesionarias con `POST /Concesionarias` y obtener el listado con `GET /Concesionarias`.
