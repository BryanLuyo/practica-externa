using Concesionaria.Domain.Entities;
using Concesionaria.Domain.Interfaces;

namespace Concesionaria.Infrastructure.Repositories;

public class InMemoryConcesionariaRepository : IConcesionariaRepository
{
    private readonly List<Concesionaria> _db = new();

    public void Add(Concesionaria concesionaria)
    {
        _db.Add(concesionaria);
    }

    public IEnumerable<Concesionaria> GetAll() => _db;
}
