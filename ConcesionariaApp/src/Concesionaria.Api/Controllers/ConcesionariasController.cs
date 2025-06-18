using Concesionaria.Application.UseCases;
using Concesionaria.Domain.Interfaces;
using Microsoft.AspNetCore.Mvc;

namespace Concesionaria.Api.Controllers;

[ApiController]
[Route("[controller]")]
public class ConcesionariasController : ControllerBase
{
    private readonly CreateConcesionaria _createConcesionaria;
    private readonly IConcesionariaRepository _repository;

    public ConcesionariasController(CreateConcesionaria createConcesionaria, IConcesionariaRepository repository)
    {
        _createConcesionaria = createConcesionaria;
        _repository = repository;
    }

    [HttpPost]
    public IActionResult Post([FromBody] string nombre)
    {
        _createConcesionaria.Execute(nombre);
        return Ok();
    }

    [HttpGet]
    public IActionResult Get()
    {
        return Ok(_repository.GetAll());
    }
}
