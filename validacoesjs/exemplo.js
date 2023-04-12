//colocar id no form

const form = document.querySelector("#form");
// resto dos campos
//
//

form.addEventListener("submit", (event) => { 
  event.preventDefault();
  
  if(nome.value == '') {
    alert();
    return;
  }
  
  
  
  form.submit();
});
