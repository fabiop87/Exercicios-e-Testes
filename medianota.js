//obter a média a partir de um array

// 0-59: F
// 60-69: D
// 70-79: C
// 80-89: B
// 90-100: A

/*
const array = [70,60,80];

console.log(mediaAluno(array));


function mediaAluno(notas) {
    let soma = 0;
    for(let nota of notas) {
        soma += nota;
    }
    const media = soma / (notas.length);
    if(media < 59) return 'F';
    if(media < 69) return 'D';
    if(media < 79) return 'C';
    if(media < 89) return 'B';
    return 'A'
}
*/
//--------------------------------------------------------------------------
const array = [90,90,87];

console.log(mediaAluno(array));
 
function mediaAluno(notas) {
    const media = calcularMedia(notas);
    
    if(media < 59) return 'F';
    if(media < 69) return 'D';
    if(media < 79) return 'C';
    if(media < 89) return 'B';
    return 'A'
}

function calcularMedia(array) {
    let soma = 0;
    for(let valor of array) {
            soma += valor;
    }
    return soma/ (array.length);
}
