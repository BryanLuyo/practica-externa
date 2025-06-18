using Concesionaria.Domain.Entities;
using Concesionaria.Domain.Interfaces;

namespace Concesionaria.Application.UseCases;

public class CreateConcesionaria
{
    private readonly IConcesionariaRepository _repository;

    public CreateConcesionaria(IConcesionariaRepository repository)
    {
        _repository = repository;
    }

    public void Execute(string nombre)
    {
        var concesionaria = new Concesionaria { Nombre = nombre };
        _repository.Add(concesionaria);
    }
}
