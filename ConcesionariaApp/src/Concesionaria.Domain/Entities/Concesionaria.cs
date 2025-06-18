namespace Concesionaria.Domain.Entities;

public class Concesionaria
{
    public Guid Id { get; set; } = Guid.NewGuid();
    public string Nombre { get; set; } = string.Empty;
    public List<Sucursal> Sucursales { get; set; } = new();
}
