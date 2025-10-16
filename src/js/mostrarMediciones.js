document.addEventListener("DOMContentLoaded", () => {
  const cuerpo = document.querySelector("#tabla-mediciones tbody");

  fetch("./Api/getMediciones.php")
    .then(res => res.json())
    .then(datos => {
      cuerpo.innerHTML = ""; // Limpia la tabla
      if (datos.length === 0) {
        cuerpo.innerHTML = "<tr><td colspan='4'>No hay mediciones registradas.</td></tr>";
        return;
      }

      datos.forEach(m => {
        const fila = document.createElement("tr");
        fila.innerHTML = `
          <td>${m.id_medicion}</td>
          <td>${m.CO2}</td>
          <td>${m.Temperatura}</td>
        `;
        cuerpo.appendChild(fila);
      });
    })
    .catch(err => {
      console.error("Error al obtener datos:", err);
      cuerpo.innerHTML = "<tr><td colspan='4'>Error al cargar datos.</td></tr>";
    });
});