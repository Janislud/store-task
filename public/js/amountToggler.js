document.addEventListener('DOMContentLoaded', () => {
    const allTogglers = document.querySelectorAll(".amountToggler");
    const moreThanOne = (num) => num > 1;

    // Make cart amount toggler work
    // * togglers value can't reach less than 1

    allTogglers.forEach(toggler => {
        const inc = toggler.querySelector("button#amountToggler-plus");
        const dec = toggler.querySelector("button#amountToggler-minus");
        const value = toggler.querySelector("p#amountToggler-quantityValue");

        // Initialize decrement button state
        value.textContent === '1' ? dec.setAttribute("disabled", "true") : "";

        // Remove any existing event listeners
        inc.replaceWith(inc.cloneNode(true));
        dec.replaceWith(dec.cloneNode(true));

        const newInc = toggler.querySelector("button#amountToggler-plus");
        const newDec = toggler.querySelector("button#amountToggler-minus");

        newInc.addEventListener("click", () => {
            newDec.removeAttribute("disabled");

            const num = +value.textContent;
            value.textContent = num + 1;
        });

        newDec.addEventListener("click", () => {
            const num = +value.textContent;
            if (moreThanOne(num)) {
                value.textContent = num - 1;
                newDec.removeAttribute("disabled");
            }
            if (+value.textContent === 1) {
                newDec.setAttribute("disabled", "true");
            }
        });
    });
});
