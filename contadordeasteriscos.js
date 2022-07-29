// quantidade de * que a linha possui    2 formas
/*
exibirAsteriscos(10);

function exibirAsteriscos(linhas) {
    let padrao = '';
    for(let linha = 1; linha <= linhas; linha++) {
        padrao += '*';
        console.log(padrao);
    }
}
*/
//--------------------------------------------------------------------

exibirAsteriscos(10);

function exibirAsteriscos(linhas) {
    for(let linha = 1; linha <= linhas; linha++) {
        let padrao = '';
        for(let i = 0; i < linha; i++) {
            padrao += '*'; 
        }
        console.log(padrao);
    }
}