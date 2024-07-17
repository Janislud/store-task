
const validatePattern = {
    email: /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/,
    cardExpDate: /^(0[1-9]|1[0-2])\/\d{2}$/
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

        if (input.value.length === 0) {
            validated = false;
        }
        if (input.hasAttribute("emailinput")) {
            validated = validatePattern["email"].test(input.value);
        }

        if (input.hasAttribute("cardExpDateInput")) {
            validated = validatePattern["cardExpDate"].test(input.value);
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