const $button = document.querySelector("#buttonForm")
const $img = document.querySelector("#logo-header")
let toggle = false
const imgLink = "../../src/logo2.png" 
const imgLink2 = "../../src/estacio.jfif"

$img.addEventListener('click', function() {
console.log(toggle)  
  if (toggle) {
        $img.setAttribute('src', imgLink)
        toggle = false
        return
    } else if (toggle === false){
      $img.setAttribute('src', imgLink2)
      toggle = true
    }
})

