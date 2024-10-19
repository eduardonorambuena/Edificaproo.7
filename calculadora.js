function calcularPresupuesto() {
    const metros = document.getElementById('metros').value;
    const tipoServicio = document.getElementById('tipo-servicio').value;

    let precioPorMetro;
    
    if (tipoServicio === 'construccion') {
        precioPorMetro = 500;
    } else if (tipoServicio === 'remodelacion') {
        precioPorMetro = 300;
    } else if (tipoServicio === 'asesoria') {
        precioPorMetro = 150;
    }

    const presupuesto = metros * precioPorMetro;
    document.getElementById('resultado-calculadora').innerText = `El presupuesto estimado es $${presupuesto}`;
}
