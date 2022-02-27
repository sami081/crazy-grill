let h = document.querySelector("h3")
let n = document.querySelector(".nav")
let a = document.querySelector("h3")

let createNav = function(){
  n.innerHTML = ` <a href="menu.html#entree" title="Voir les entree" class="d"> entree</a>
  <a href="menu.html#plats" title="Voir le menu" class = "d"> plats</a>
  <a href="menu.html#dessert" title="Voir le menu" class="d"> dessert</a>`
  a.classList.remove("a")
  a.classList.add("b")

};

let delNav = function(){
  n.innerHTML= ""
  a.classList.remove("b")
  a.classList.add("a")
}
h.addEventListener("mouseenter", createNav)
h.addEventListener("mouseleave", delNav)

