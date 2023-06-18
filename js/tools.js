(() => {
    if (document.getElementById("sendInscription")) {
        document.getElementById("sendInscription").addEventListener("click", (event) => {
            event.preventDefault();

            let form = {
                name: document.getElementById("name").value,
                firstname: document.getElementById("firstname").value,
                mail: document.getElementById("mail").value,
                ville: document.getElementById("ville").value,
            }

            if (!form.name || !form.firstname || !form.mail || !form.ville) {
                alert("Vous remplir tout les champs pour continuer");

                return;
            }

            fetch("http://www.belrack.be/school/sendInscription.php", {
                cache: "reload",
                method: "POST",
                body: JSON.stringify(form)
            })
                .then(response => response.text())
                .then(saveData => {
                    console.log(saveData);
                    document.getElementById("containerContact").innerHTML = `
                <br/><br/>
                <h1>Nous avons bien reçu votre demande</h1>
                <br/>
                <h1>Nous vous contacterons dans les prochains jours</h1>
                <br/>
                <h1>Merci</h1>
                `;
                })
                .catch(err => console.log(err))
        })
    }

    if (document.getElementById("sendContact")) {
        document.getElementById("sendContact").addEventListener("click", (event) => {
            event.preventDefault();

            if (!document.getElementById("rgpd").checked) {
                alert("Vous devez cocher la case d'acceptation pour continuer");

                return;
            }

            let form = {
                name: document.getElementById("name").value,
                firstname: document.getElementById("firstName").value,
                mail: document.getElementById("email").value,
                phoneNumber: document.getElementById("phoneNumber").value,
                message: document.getElementById("message").value,
            }

            if (!form.name || !form.firstname || !form.mail || !form.phoneNumber) {
                alert("Vous remplir tout les champs pour continuer");

                return;
            }

            fetch("http://www.belrack.be/school/sendContact.php", {
                cache: "reload",
                method: "POST",
                body: JSON.stringify(form)
            })
                .then(response => response.text())
                .then(saveData => {
                    console.log(saveData);
                    document.getElementById("containerContact").innerHTML = `
                <br/><br/>
                <h1>Nous avons bien reçu votre demande</h1>
                <br/>
                <h1>Nous vous contacterons dans les prochains jours</h1>
                <br/>
                <h1>Merci</h1>
                `;
                })
                .catch(err => console.log(err))
        })
    }


    if (document.getElementById("newsletter")) {
        document.getElementById("newsletter").addEventListener("click", (event) => {
            event.preventDefault();

            if (!document.getElementById("checkNewsletter").checked) {
                alert("Vous devez cocher la case d'acceptation pour continuer");

                return;
            }

            let form = {
                mail: document.getElementById("mailNewsletter").value,
            }

            if (!form.mail) {
                alert("email incorrecte");

                return;
            }

            fetch("http://www.belrack.be/school/sendNewsletterInscription.php", {
                cache: "reload",
                method: "POST",
                body: JSON.stringify(form)
            })
                .then(response => response.text())
                .then(saveData => {
                    console.log(saveData);
                    document.getElementById("containerNewsletter").innerHTML = `
                <br/><br/>
                <h1>Merci</h1>
                `;
                })
                .catch(err => console.log(err))
        })
    }

})();