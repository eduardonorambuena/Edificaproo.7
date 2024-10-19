function calcularEstimacion() {
    const empleados = parseInt(document.getElementById('empleados').value);
    const horas = parseInt(document.getElementById('horas').value);
    const tipoServicio = document.getElementById('tipo-servicio').value;
    const costoHora = parseFloat(document.getElementById('costo-hora').value);
    const materialesAdicionales = document.getElementById('materiales').checked;

    let costoMateriales = 0;

    // Definir un costo adicional dependiendo del tipo de servicio
    switch (tipoServicio) {
        case 'electricidad':
            costoMateriales = 100;  // Costo adicional por materiales para electricidad
            break;
        case 'gas':
            costoMateriales = 150;  // Costo adicional por materiales para gas
            break;
        case 'construccion':
            costoMateriales = 200;  // Costo adicional por materiales para construcción
            break;
        case 'ingenieria':
            costoMateriales = 250;  // Costo adicional por servicios de ingeniería
            break;
    }

    // Si se selecciona la opción de materiales adicionales, aumentar el costo
    const costoTotalMateriales = materialesAdicionales ? costoMateriales : 0;

    // Calcular el costo base
    const costoBase = empleados * horas * costoHora;

    // Costo total
    const costoTotal = costoBase + costoTotalMateriales;

    // Mostrar el resultado en la página
    document.getElementById('resultado').innerText = `El costo estimado del proyecto es: $${costoTotal.toFixed(2)}`;
}
