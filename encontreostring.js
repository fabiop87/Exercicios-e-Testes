// ler propriedades de um objeto e exibir somente as propriedades do tipo string

const filme = {
    titulo : 'batata',
    dia : 2,
    queijo : 'hahahaha',
    gatinho : 'breno'
}
exibirPropriedades(filme);
function exibirPropriedades(obj){
    for (prop in obj)
        if(typeof obj[prop] === 'string')
            console.log(prop,obj[prop])
}