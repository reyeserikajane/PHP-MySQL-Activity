const inputs = document.querySelectorAll(".input-field");
const main = document.querySelector("main");
const bullets = document.querySelectorAll(".bullets span");
const images = document.querySelectorAll(".image");
let currentIndex = 0;

inputs.forEach((inp) => {
  inp.addEventListener("focus", () => {
    inp.classList.add("active");
  });
  inp.addEventListener("blur", () => {
    if (inp.value != "") return;
    inp.classList.remove("active");
  });
});

function moveSlider(index) {
  currentIndex = index; // Update the currentIndex
  let currentImage = document.querySelector(`.img-${index}`);
  images.forEach((img) => img.classList.remove("show"));
  currentImage.classList.add("show");

  const textSlider = document.querySelector(".text-group");
  textSlider.style.transform = `translateY(${-(index - 1) * 2.2}rem)`;

  bullets.forEach((bull) => bull.classList.remove("active"));
  bullets[index - 1].classList.add("active");
}

function autoSlide() {
  currentIndex = (currentIndex % bullets.length) + 1; // Increment index cyclically
  moveSlider(currentIndex);
}

const slideInterval = setInterval(autoSlide, 5000);

bullets.forEach((bullet, index) => {
  bullet.addEventListener("click", () => moveSlider(index + 1));
});

autoSlide();

function showPopup() {
  document.getElementById("popup").style.display = "flex";
}

function closePopup() {
  document.getElementById("popup").style.display = "none";
}
