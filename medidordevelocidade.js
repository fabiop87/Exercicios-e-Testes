// velocidade maxima de até 70
// a cada 5km acima do limite voce ganha 1 ponto na carteira
// Math.Floor()
// caso pontos maior que 12 -> "carteira suspendida"



verificarVelocidade(90)

function verificarVelocidade(velocidade) {
    const velocidadeMaxima = 70;
    const kmPorPonto = 5;
    if (velocidade <= 70)
        console.log('ok');
    else {
        const pontos = Math.floor((velocidade - velocidadeMaxima)/kmPorPonto);
        if (pontos >= 12)
            console.log('carteira suspensa');
        else
            console.log('pontos ',pontos)
    }
}