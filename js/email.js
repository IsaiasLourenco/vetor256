document.addEventListener("DOMContentLoaded", function () {
    function setupEmailForm(formId, buttonClass) {
        let form = document.getElementById(formId);
        let button = form.querySelector(`.${buttonClass}`);

        button.addEventListener("click", function (event) {
            let nome = form.querySelector('[name="nome_msg"]').value.trim();
            let email = form.querySelector('[name="email_msg"]').value.trim();
            let plano = form.querySelector('[name="plano_msg"]').value.trim();
            let mensagem = form.querySelector('[name="mensagem_msg"]').value.trim();

            // Validação para garantir que todos os campos estejam preenchidos
            if (nome === "" || email === "" || plano === "" || mensagem === "") {
                alert("Por favor, preencha todos os campos antes de enviar.");
                return;
            }

            console.log("Nome:", nome);
            console.log("Email:", email);
            console.log("Plano:", plano);
            console.log("Mensagem:", mensagem);

            // Criando a estrutura correta do mailto
            let mailtoLink = `mailto:adm.vetor256@gmail.com
                ?subject=Novo Orçamento
                &body=Nome: ${encodeURIComponent(nome)}%0A
                Email: ${encodeURIComponent(email)}%0A
                Plano: ${encodeURIComponent(plano)}%0A
                Mensagem: ${encodeURIComponent(mensagem)}`;

            // Aguarda antes de abrir o cliente de e-mail
            setTimeout(() => {
                window.location.href = mailtoLink;
            }, 500);

            // Pequeno atraso para permitir reset antes do redirecionamento
            setTimeout(() => {
                form.reset(); // Reseta os campos do formulário
            }, 700);
        });
    }

    // Configurando os dois formulários
    setupEmailForm("emailForm", "btn-dark");  // Formulário principal
    setupEmailForm("footerEmailForm", "btn-dark"); // Formulário do rodapé
});
