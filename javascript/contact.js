// let start;

// const starts = document.querySelector("#start");
// const form = document.querySelector("form")

// starts.addEventListener("input", (e) => {
//   start = e.target.value;
// });
// console.log(start);

// form.addEventListener("submit",(e)=>{
//   e.preventDefault();

// })

//afficher date


    var cejour = new Date();
    var options = {
      weekday: "long",
      year: "numeric",
      month: "long",
      day: "2-digit",
     };
    var date = cejour.toLocaleDateString("fr-FR", options);
    // var heure =
    //   ("0" + cejour.getHours()).slice(-2) +
    //   ":" +
    //   ("0" + cejour.getMinutes()).slice(-2) +
    //   ":" +
    //   ("0" + cejour.getSeconds()).slice(-2);
    var dateheure = date 
    // var dateheure = dateheure.replace(/(^\w{1})|(\s+\w{1})/g, lettre => lettre.toUpperCase());
    document.getElementById("date").innerHTML = dateheure;
    // if (
    //   cejour.getHours() == 23 &&
    //   cejour.getMinutes() == 53 &&
    //   cejour.getSeconds() == 00
    // ) {
    //   var audio = new Audio("son.mp3");
    //   audio.play();
    // }
//   }
// }
// afficherDate();

