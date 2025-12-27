const text = "Accompagne les laboratoires et structures de santé grâce à une délégation médicale experte.";
let index = 0;

function typeWriterDrop() {
  if (index < text.length) {
    const span = document.createElement("span");

    // Si c’est un espace, on ajoute un espace insécable pour qu'il soit visible
    if (text.charAt(index) === " ") {
      span.innerHTML = "&nbsp;";  // espace insécable
    } else {
      span.textContent = text.charAt(index);
    }

    span.classList.add("drop");
    document.getElementById("text").appendChild(span);

    index++;
    setTimeout(typeWriterDrop, 20);
  }
}

window.onload = typeWriterDrop;