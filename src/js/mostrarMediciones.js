//Creo un evento
document.addEventListener("DOMContentLoaded", () => {

  //Selecciono donde quiero mostrar los datos
  const cuerpo = document.querySelector("#tabla-mediciones tbody");

  //Con el fercht recojo los datos y los trato dandole forma de tabla
  //a su vez me aseguro que se muetra algun dato.
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