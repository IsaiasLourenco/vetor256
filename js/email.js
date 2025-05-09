document.addEventListener("DOMContentLoaded", function () {
    function sendEmail(event) {
        event.preventDefault(); // Evita abrir Outlook ou outro cliente de email

        let form = document.getElementById("emailForm");
        let formData = new FormData(form);

        fetch("send_email.php", {
            method: "POST",
            body: formData
        })
        .then(response => response.text())
        .then(result => {
            alert(result); // Exibe resposta do PHP
            form.reset(); // Limpa o formulário após envio
        })
        .catch(error => {
            alert("Erro ao enviar o email. Tente novamente.");
        });
    }

    // Configura evento de clique no botão
    let button = document.querySelector(".btn-dark");
    if (button) {
        button.addEventListener("click", sendEmail);
    }
});