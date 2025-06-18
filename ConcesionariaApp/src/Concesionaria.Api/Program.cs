using Concesionaria.Application.UseCases;
using Concesionaria.Infrastructure.Repositories;
using Concesionaria.Domain.Interfaces;

var builder = WebApplication.CreateBuilder(args);

builder.Services.AddSingleton<IConcesionariaRepository, InMemoryConcesionariaRepository>();
builder.Services.AddTransient<CreateConcesionaria>();

builder.Services.AddControllers();

var app = builder.Build();

app.MapControllers();

app.Run();
