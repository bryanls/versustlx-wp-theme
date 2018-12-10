function startTime() {
    var today = new Date();
    var h = today.getHours();
    var m = today.getMinutes();
    var s = today.getSeconds();
    m = checkTime(m);
    s = checkTime(s);
    var fi = "";
    if (h < 12) {
        fi = "am";
    } else {
        fi = "pm";
    }
    document.getElementById("site-hour").innerHTML = h + ":" + m + " " + fi;
    var t = setTimeout(startTime, 500);

    var fecha = new Date();

    var dia_semana = ["Domingo", "Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado"];

    var mes = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"];

    var dame_fecha = dia_semana[fecha.getDay()] + ", " + fecha.getDate() + " de " + mes[fecha.getMonth()] + " del " + fecha.getFullYear();
    document.getElementById("site-date").innerHTML = dame_fecha + " " + "|";
}

function checkTime(i) {
    if (i < 10) {
        i = "0" + i;
    }
    return i;
}
window.onload = function() {
    startTime();
};