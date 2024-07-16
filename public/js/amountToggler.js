const allTogglers = document.querySelectorAll(".amountToggler");
const moreThanOne = (num) => num > 1;

// Make cart amount toggler work
// * togglers value can't reach less than 1

allTogglers.forEach(toggler => {
    const inc = toggler.querySelector("button#amountToggler-plus");
    const dec = toggler.querySelector("button#amountToggler-minus");
    const value = toggler.querySelector("p#amountToggler-quantityValue");

    value === 1 ? dec.setAttribute("disabled", "true") : "";
    

    inc.addEventListener("click", () => {
        dec.removeAttribute("disabled")

        const num = +value.textContent;
        value.textContent = num + 1;
    })
    dec.addEventListener("click", () => {
        const num = +value.textContent;
        if (moreThanOne(num)) {
            value.textContent = num - 1;
            dec.removeAttribute("disabled")
        }
        if (+value.textContent === 1) {
            dec.setAttribute("disabled", "true")
        }
    })

})
