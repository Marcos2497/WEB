document.getElementById('formulario').addEventListener('submit', function(e) {
  const nombre = document.getElementById('nombre').value;
  const asunto = document.getElementById('asunto').value;
  const mensaje = `Gracias ${nombre} por contactarte por "${asunto}". Te responderemos pronto.`;

  console.log(mensaje);
  document.getElementById('respuesta').textContent = mensaje;
});

// Calcular descuento
function calcularDescuento() {
  const descuento = parseFloat(document.getElementById('descuento').value);
  const precioBase = 4200;

  if (isNaN(descuento) || descuento < 0 || descuento > 100) {
    alert("Ingresá un descuento válido entre 0 y 100%");
    return;
  }

  const precioFinal = precioBase - (precioBase * (descuento / 100));
  document.getElementById('precioFinal').textContent =
    `Precio final con descuento: $${precioFinal.toFixed(2)}`;
}
