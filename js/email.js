document.addEventListener("DOMContentLoaded", function () {
    function setupEmailForm(formId, buttonClass) {
        let checkExist = setInterval(() => {
            let form = document.getElementById(formId);
            if (form) {
                clearInterval(checkExist); // Para de verificar quando o elemento existir
                let button = form.querySelector(`.${buttonClass}`);
                if (button) {
                    button.addEventListener("click", function (event) {
                        let nome = form.querySelector('[name="nome_msg"]').value.trim();
                        let email = form.querySelector('[name="email_msg"]').value.trim();
                        let plano = form.querySelector('[name="plano_msg"]').value.trim();
                        let mensagem = form.querySelector('[name="mensagem_msg"]').value.trim();

                        if (nome === "" || email === "" || plano === "" || mensagem === "") {
                            alert("Por favor, preencha todos os campos antes de enviar.");
                            return;
                        }

                        let mailtoLink = `mailto:adm.vetor256@gmail.com
                            ?subject=Novo Orçamento
                            &body=Nome: ${encodeURIComponent(nome)}%0A
                            Email: ${encodeURIComponent(email)}%0A
                            Plano: ${encodeURIComponent(plano)}%0A
                            Mensagem: ${encodeURIComponent(mensagem)}`;

                        setTimeout(() => {
                            window.location.href = mailtoLink;
                        }, 500);

                        setTimeout(() => {
                            form.reset();
                        }, 700);
                    });
                }
            }
        }, 100); // Verifica a cada 100ms até que o rodapé esteja carregado
    }

    setupEmailForm("emailForm", "btn-dark");
    setupEmailForm("footerEmailForm", "btn-dark");
});
