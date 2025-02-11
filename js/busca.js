document.addEventListener("DOMContentLoaded", function () {
    setTimeout(() => {
        const searchButton = document.getElementById("searchButton");
        const searchInput = document.getElementById("searchInput");
        const searchModal = document.getElementById("searchModal");

        if (!searchButton || !searchInput || !searchModal) {
            console.error("Elementos de busca não encontrados! Verifique os IDs no HTML.");
            return;
        }

        // Focar no input quando a modal abrir
        searchModal.addEventListener("shown.bs.modal", function () {
            searchInput.focus();
        });

        // Fechar modal corretamente e restaurar rolagem
        function closeModal() {
            const bootstrapModal = bootstrap.Modal.getInstance(searchModal) || new bootstrap.Modal(searchModal);
            bootstrapModal.hide();

            setTimeout(() => {
                document.body.style.overflow = ""; // Libera o scroll
                document.documentElement.style.overflow = "";
                document.querySelectorAll(".modal-backdrop").forEach(el => el.remove()); // Remove fundo escuro
            }, 300);
        }

        // Permitir buscar ao pressionar Enter
        searchInput.addEventListener("keydown", function (event) {
            if (event.key === "Enter") {
                event.preventDefault();
                searchButton.click();
            }
        });

        // Clique no botão de busca
        searchButton.addEventListener("click", function () {
            let searchText = searchInput.value.trim().toLowerCase();
            if (searchText === "") {
                alert("Digite uma palavra para buscar.");
                return;
            }

            // Remover destaques anteriores
            document.querySelectorAll(".highlight").forEach(el => {
                el.outerHTML = el.innerText;
            });

            function highlightText(element) {
                if (element.hasChildNodes()) {
                    element.childNodes.forEach(highlightText);
                } else if (element.nodeType === Text.TEXT_NODE) {
                    let text = element.nodeValue.toLowerCase();
                    let index = text.indexOf(searchText);

                    if (index !== -1) {
                        let span = document.createElement("span");
                        span.classList.add("highlight");
                        let originalText = element.nodeValue;

                        let beforeMatch = originalText.substring(0, index);
                        let matchText = originalText.substring(index, index + searchText.length);
                        let afterMatch = originalText.substring(index + searchText.length);

                        span.innerHTML = `${beforeMatch}<span class="highlight-found">${matchText}</span>${afterMatch}`;
                        element.replaceWith(span);
                    }
                }
            }

            highlightText(document.body);

            // Fechar modal após a busca
            closeModal();
        });

        // Ao fechar a modal, liberar o scroll
        searchModal.addEventListener("hidden.bs.modal", function () {
            searchInput.value = ""; // Limpa o campo de busca
            document.body.style.overflow = "";
            document.documentElement.style.overflow = "";
            document.querySelectorAll(".modal-backdrop").forEach(el => el.remove());
        });

    }, 100); // Pequeno atraso para garantir que o DOM carregou
});

// Atalho de teclado para abrir a modal com Ctrl + P
document.addEventListener("keydown", function (event) {
    if (event.ctrlKey && event.key.toLowerCase() === "p") {
        event.preventDefault();
        let searchModal = new bootstrap.Modal(document.getElementById("searchModal"));
        searchModal.show();
    }
});