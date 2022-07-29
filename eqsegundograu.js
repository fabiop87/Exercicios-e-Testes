

function eq2g(a, b, c){
    let resposta = null;
    if (a == 0) {
       resposta = "Coeficiente 'a' não pode ser zero.";
    }
    else {
       delta = b ** 2 - 4 * a * c;
       if (delta < 0) {
          resposta = "Não há raizes reais.";
       }
       else {
          resposta = "V = {" + (Math.sqrt(delta) - b) / (2 * a);
          if (delta == 0) {
             resposta = resposta + "}";
          }
          else {
             resposta = resposta + ", " + -(Math.sqrt(delta) + b) / (2 * a) + "}";
          }
       }
    }
    return resposta + " delta = " + delta;
}
console.log(eq2g(2,7,5));