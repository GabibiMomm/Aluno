Alunos = Array();
class Aluno{
    constructor(nome, sobrenome, email, nota1, nota2, nota3, ){
        this.nome = nome;
        this.sobrenome = sobrenome;
        this.email = email;
        this.nota1 = parseInt(nota1);
        this.nota2 = parseInt(nota2);
        this.nota3 = parseInt(nota3);
    }
    get _nome() {
        return this.nome;
    }

    get _sobrenome() {
        return this.sobrenome;
    }

    get _email() {
        return this.email;
    }

    get _nota1() {
        return this.nota1;
    }

    get _nota2() {
        return this.nota2;
    }

    get _nota3() {
        return this.nota3;
    }

    get _media() {
        return this.media;
    }

    media() {
        return (this.nota1 + this.nota2 + this.nota3)/3
    }
}

$("#bNota").click(function(){
    let nome = $("#iNome").val();
    let sobrenome = $("#iSobrenome").val();
    let email = $("#Email").val();
    let nota1 = $("#iNota1").val();
    let nota2 = $("#iNota2").val();
    let nota3 = $("#iNota3").val();

    let valuno = new Aluno(nome, sobrenome, email, nota1, nota2, nota3);
    Alunos.push(valuno);
})

$("#lista").click(function(){
    var tamanho = Alunos.length;
    var texto = "";
    for(i = 0; i < tamanho; i++){
        texto += Alunos[i].nome + " " + Alunos[i].sobrenome + " | Nota 1 = " + Alunos[i].nota1 + " | Nota 2 = " + Alunos[i].nota2 + " | Nota 3 = " + Alunos[i].nota3 + " || Média = " + Alunos[i].media() + "<br>";
    }
    document.getElementById("resultado").innerHTML = texto;
})

$("#reset").click(function(){
    $("#iNome").val("");
    $("#iSobrenome").val("");
    $("#iEmail").val("");
    $("#iNota1").val("");
    $("#iNota2").val("");
    $("#iNota3").val("");
    document.getElementById("resultado").innerHTML = "";
    Alunos.splice(0,Alunos.length);
})