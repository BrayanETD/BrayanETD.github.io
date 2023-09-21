//Duncion de mardar al inicio
function hideButton() {
    document.querySelector('.BtnIn').classList.add('hidden');
    document.querySelector('.content').style.display = 'block';
}
function redirectToInterface() {
    document.querySelector('.BtnIn').classList.add('hidden');
    setTimeout(() => {
        window.location.href = "Inicio.html";
    }, 100); 
}
// Desplazamoento rapido
function scrollToSection(sectionId) {
    const section = document.getElementById(sectionId);
    section.scrollIntoView({ behavior: 'smooth' });
}
function scrollToTop() {
    window.scrollTo({
        top: 0,
        behavior: 'smooth'
    });
}
// Desplazamoento rapido
function scrollToSection(sectionId) {
    const section = document.getElementById(sectionId);
    section.scrollIntoView({ behavior: 'smooth' });
}
// Función para desplazarse hacia arriba al hacer clic en el botón
function scrollToTop() {
    window.scrollTo({
    top: 0,
    behavior: 'smooth'
    });
}
// Función para cambiar la imagen automáticamente
function startCarrusel() {
    let index = 0;
    const images = document.querySelectorAll(".carrusel-img");
    const totalImages = images.length;
    setInterval(() => {
        images[index].classList.remove("visible");
        index = (index + 1) % totalImages;
        images[index].classList.add("visible");
    }, 3000); // Cambiar la imagen en milisegundos
}
// Inicia el carrusel una vez que la página esté completamente cargada
window.addEventListener("load", () => {
    startCarrusel();
});
// Botones superires
function scrollToSection(GId) {
    const element = document.getElementById(GId);
    if (element) {
        element.scrollIntoView({ behavior: 'smooth'});
    }
}
// Efecto coloring
const textElement = document.getElementById("textEffect");
const colors = ["#FFFF00", "#FFFF00", "#FFFF00", "#FFFF00", "#FFFF00", "#FFFF00"];
let letterIndex = 0;
function changeLetterColor() {
    const letters = textElement.textContent.split("");
        if (letterIndex < letters.length) {
        const letterColor = colors[letterIndex % colors.length];
        letters[letterIndex] = `<span style="color: ${letterColor}">${letters[letterIndex]}</span>`;
        textElement.innerHTML = letters.join("");
        letterIndex++;
        setTimeout(changeLetterColor, 200);

    } else {
        textElement.innerHTML = letters.map((letter, index) => {
            const letterColor = colors[index % colors.length];
            return `<span style="color: ${letterColor}">${letter}</span>`;
        }).join("");
        setTimeout(resetColors, 1000);
    }
}
function resetColors() {
    letterIndex = 0;
    changeLetterColor();
}
changeLetterColor();




