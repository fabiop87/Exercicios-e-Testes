arremessando exemplos pq isso é chato e confuso de ficar fazendo manualmente


exemplo foda:

<form method="post" action="sendmail.php" id="myForm">
    <input type="text" class="text" value="Nome" id="nome" name="nome" required onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}">
    <input type="text" class="text" value="E-mail" id="email" name="email" required onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}">
    <input type="text" class="text" value="Telefone" id="telefone" name="telefone" required onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}">
    <textarea name="mensagem" id="mensagem" required onfocus="if(this.value == '') this.value='';" onblur="if(this.value == '') this.value='';" >Sua mensagem</textarea>
    <input type="submit" value="[ Enviar Mensagem ]" onclick="return checkForm()" />
</form>  
JS

<script>
    function checkForm() {
        // Fetching values from all input fields and storing them in variables.
        var nome = document.getElementById("nome").value;
        var email = document.getElementById("email").value;
        var fone = document.getElementById("telefone").value;
        var mensagem = document.getElementById("mensagem").value;

        //Check input Fields Should not be blanks.
        if (nome == '' || email == '' || fone == '' || mensagem == '') {
            alert("Por favor preencha todos os campos.");
            return false;
        } else {
            //Notifying error fields
            var name = document.getElementById("nome");
            var mail = document.getElementById("email");
            var telefone = document.getElementById("telefone");
            var mensagemp = document.getElementById("mensagem");
            //Check All Values/Informations Filled by User are Valid Or Not.If All Fields Are invalid Then Generate alert.
            if (name.innerHTML == 'Nome' || mail.innerHTML == 'E-mail' || telefone.innerHTML == 'Telefone' || mensagemp.innerHTML == 'Sua Mensagem') {
                alert("Por favor, preencha o formul&aacute;rio com informa&ccedil;&otilde;es v&aacute;lidas");
                return false;
            } else {
                //Submit Form When All values are valid.
                document.getElementById("myForm").submit();
                return true;
            }

        }
    }
</script>
