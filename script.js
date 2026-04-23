document.getElementById("formAsistencia").addEventListener("submit", function(e) {
    let dni = document.getElementById("dni").value.trim();

    if (dni.length !== 8 || isNaN(dni)) {
        alert("El DNI debe tener 8 números");
        e.preventDefault();
    }
});