function calculateBulk() {
    const qty = parseInt(document.getElementById('bulkSlider').value);
    const basePrice = 30.00; // Current individual price
    const bulkPrice = 27.00; // 10% discount from €30

    let rate = (qty >= 10) ? bulkPrice : basePrice;

    const totalOld = (qty * basePrice).toFixed(2);
    const totalNew = (qty * rate).toFixed(2);
    const totalSaved = (totalOld - totalNew).toFixed(2);

    document.getElementById('qtyVal').innerText = qty;
    document.getElementById('newTotal').innerText = `€${totalNew}`;

    const alert = document.getElementById('savingsAlert');
    const oldPriceLabel = document.getElementById('oldTotal');

    if (qty < 10) {
        oldPriceLabel.style.opacity = "0";
        alert.innerHTML = `Add ${10 - qty} more for 10% off!`;
        alert.style.color = "#cbd5e1";
    } else {
        oldPriceLabel.style.opacity = "1";
        oldPriceLabel.innerText = `€${totalOld}`;
        alert.innerHTML = `€${totalSaved} Saved!`;
        alert.style.color = "#2ecc71";
    }
}

window.onload = calculateBulk;
