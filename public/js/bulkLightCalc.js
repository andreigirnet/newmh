function calculateBulkLight() {
    const qty = parseInt(document.getElementById('bulkSliderLight').value);
    const basePrice = 30;

    // 10% discount for orders of 10 or more
    let rate = (qty >= 10) ? 27.00 : 30.00;

    const totalOld = (qty * basePrice).toFixed(2);
    const totalNew = (qty * rate).toFixed(2);
    const totalSaved = (totalOld - totalNew).toFixed(2);

    document.getElementById('qtyValLight').innerText = qty;
    document.getElementById('newTotalLight').innerText = `€${totalNew}`;

    const alert = document.getElementById('savingsAlertLight');
    const oldPriceLabel = document.getElementById('oldTotalLight');

    if (qty < 10) {
        oldPriceLabel.style.visibility = "hidden";
        alert.innerText = `Add ${10 - qty} more for 10% off!`;
    } else {
        oldPriceLabel.style.visibility = "visible";
        oldPriceLabel.innerText = `€${totalOld}`;
        alert.innerText = `€${totalSaved} Saved!`;
    }
}

// Run on load
window.addEventListener('load', calculateBulkLight);