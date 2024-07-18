
const validatePattern = {
    email: /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/,
    cardNumber: /^(?:\d\s*){16}$/,
    cardExpDate: /^\d{2}\/\d{2}$/,
    cvv: /^\d{3}$/
}

if (window.location.pathname.split("/").includes("checkout")) {
    const allStageInputWrappers = document.querySelectorAll(".stages .stages__input-wrapper");
    const allStageInputs = document.querySelectorAll(".stages .stages__input-wrapper input");

    const submitBtn = document.querySelector(".stages button.stages__forward");

    submitBtn.disabled = ![...allStageInputs].every(el => el.value || !el.hasAttribute("required"));

    const validate = (input) => {
        let validated = true;

        if (!input.hasAttribute("required")) {
            validated = true;
            input.dataset.validated = validated;
            return validated
        }
        
        if (input.hasAttribute("emailinput")) {
            validated = validatePattern["email"].test(input.value);
            input.parentElement.dataset.message = "invalid email";
        }

        if (input.hasAttribute("cardExpDateInput")) {
            validated = validatePattern["cardExpDate"].test(input.value);
            input.parentElement.dataset.message = "not MM/YY format";
        }

        if (input.hasAttribute("cardNumberInput")) {
            validated = validatePattern["cardNumber"].test(input.value);
            input.parentElement.dataset.message = "16 digits only";
        }

        if (input.hasAttribute("cardCvv")) {
            validated = validatePattern["cvv"].test(input.value);
            input.parentElement.dataset.message = "3 digits only";
        }

        if (input.value.length === 0) {
            validated = false;
            input.parentElement.dataset.message = "empty field";
        }

        input.dataset.validated = validated;

        submitBtn.disabled = ![...allStageInputs].every(el => el.dataset.validated === "true" && el.dataset.untouched === "false");
    }

    allStageInputs.forEach(input => {

        if (input.value.length > 0) {
            input.dataset.untouched = "false";
            input.dataset.validated = "true"
        } else {
            input.dataset.untouched = "true";
        }

        if (!input.hasAttribute("required")) {
            input.dataset.untouched = "false";
        }

        input.addEventListener("input", () => {
            input.dataset.untouched = "false";
        });

        input.addEventListener("focusout", () => {
            validate(input);
        })

    })


}