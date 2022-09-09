class Notificador {
    enviar() {
        console.log('-> awawawawa');
        
    }
}

interface INotificador {
    enviar();
}

class Post {
    constructor(public titulo: string, private notificador: Notificador) {
        console.log('Novo Post: ' + titulo);
    }
    publicar() {
        console.log('-> publicando.....');
        this.notificador.enviar();
    }
}

let novoPost = new Post('jhonsons', new Notificador);
novoPost.publicar();