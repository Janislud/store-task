document.addEventListener('DOMContentLoaded', function () {
    const itemPlus = document.querySelector('.item-plus');
    const itemMinus = document.querySelector('.item-minus');
    const itemCount = document.querySelector('.item-count');
    const quantityInput = document.getElementById('quantity');

    itemMinus.addEventListener('click', function () {
        let count = parseInt(itemCount.textContent);
        if (count > 1) {
            count--;
            itemCount.textContent = count;
            quantityInput.value = count;
        }
        if (count === 1) {
            itemMinus.disabled = true;
        }
    });

    itemPlus.addEventListener('click', function () {
        let count = parseInt(itemCount.textContent);
        count++;
        itemCount.textContent = count;
        quantityInput.value = count;
        itemMinus.disabled = false;
    });
});

