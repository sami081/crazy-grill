let h = document.querySelector("h3")
console.log(h);
let n = document.querySelector(".nav")
let a = document.querySelector(".a")
console.log(a);

let createNav = function(){
  n.innerHTML = ` <a href="menu.html#entree" title="Voir les entree"> entree</a>
  <a href="menu.html#plats" title="Voir le menu"> plats</a>
  <a href="menu.html#dessert" title="Voir le menu"> dessert</a>`
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