const cartSection = document.querySelector("section#cart");

const allTogglers = cartSection.querySelectorAll(".cart__item-quantityToggle");
console.log(allTogglers)

const moreThanOne = (num) => num > 1;

// Make cart amount toggler work
// * togglers value can't reach less than 1

allTogglers.forEach(toggler => {
    console.log(toggler)
    const inc = toggler.querySelector("button#cart__item-plus");
    const dec = toggler.querySelector("button#cart__item-minus");
    console.log(inc, dec)
    const value = toggler.querySelector("p#cart__item-quantityValue");
    

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
            console.log("worl")
        }
    })

})

console.log(cartSection)
