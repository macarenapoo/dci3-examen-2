var contenedor = document.getElementById("testimoniales");
var nav = document.getElementById("nav");
var slideActual = 0;

function init() {
  definirAnchoDeSlider();
  testimoniales.forEach(renderearTestimonial);
  testimoniales.forEach(agregarNavItem);
  ajustarSlider();
}

function definirAnchoDeSlider() {
  var cantidad = testimoniales.length + 1;
  var anchoVentana = window.innerWidth;
  contenedor.style.width = cantidad * anchoVentana + "px";
}

function renderearTestimonial(testimonial) {
  contenedor.insertAdjacentHTML('beforeend',
    `
    <div class="contenedor">
      <blockquote class="testimonial">
        `+ testimonial.testimonio + `
        <footer class="testimonial-footer">
            — <cite class="author">`+ testimonial.autor + `</cite>, <cite class="company">` + testimonial.puesto + `</cite>
        </footer>
      </blockquote>
    </div>
    `
  );
}

function slideSiguiente() {
  slideActual++;
  ajustarSlider();
}

function slidePrevio() {
  slideActual--;
  ajustarSlider();
}

function irASlide(slide) {
  slideActual = slide;
  ajustarSlider();
}

function ajustarSlider() {
  var anchoVentana = window.innerWidth;
  contenedor.style.marginLeft = anchoVentana * slideActual * -1 + 'px';
  ajustarFlechas();
  ajustarNav();
}

function ajustarFlechas() {
  var left = document.getElementById("flechaIzquierda");
  var right = document.getElementById("flechaDerecha");
  if (slideActual === 0) {
    left.style.visibility = "hidden";
  } else {
    left.style.visibility = "visible";
  }
  if (slideActual === testimoniales.length - 1) {
    right.style.visibility = "hidden";
  } else {
    right.style.visibility = "visible";
  }
}

function agregarNavItem(item, index) {
  nav.insertAdjacentHTML('beforeend', '<div class="nav-item" onClick="irASlide(' + index + ')" />');
}

function ajustarNav() {
  navItems = document.getElementsByClassName('nav-item');
  Array.from(navItems).forEach(function (item) {
    item.classList.remove('activo');
  });
  if (navItems[slideActual]) {
    navItems[slideActual].classList.add('activo');
  }
}

window.addEventListener('resize', function () {
  definirAnchoDeSlider();
  ajustarSlider();
});

init();
