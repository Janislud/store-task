
const validatePattern = {
    email: /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/
}

if (window.location.pathname.split("/").includes("checkout")) {
    const allStageInputWrappers = document.querySelectorAll(".stages .stages__input-wrapper");
    const allStageInputs = document.querySelectorAll(".stages .stages__input-wrapper input");

    const submitBtn = document.querySelector(".stages button.stages__forward");

    submitBtn.disabled = ![...allStageInputs].every(el => el.value);

    const validate = (input) => {
        let validated = true;

        if (input.value.length === 0) {
            validated = false;
        }
        if (input.hasAttribute("emailinput")) {
            validated = validatePattern["email"].test(input.value);
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


        input.addEventListener("change", () => {
            input.dataset.untouched = "false";
        });

        input.addEventListener("focusout", () => {
            validate(input);
        })

    })


}