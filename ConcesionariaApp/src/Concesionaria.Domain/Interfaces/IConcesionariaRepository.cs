using Concesionaria.Domain.Entities;

namespace Concesionaria.Domain.Interfaces;

public interface IConcesionariaRepository
{
    void Add(Concesionaria concesionaria);
    IEnumerable<Concesionaria> GetAll();
}
