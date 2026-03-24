function calculateBulk() {
    const qty = parseInt(document.getElementById('bulkSlider').value);
    const basePrice = 25; // Original Price

    // 10% Discount logic: €25.00 becomes €22.50
    let rate = (qty >= 10) ? 22.50 : 25.00;

    const totalOld = (qty * basePrice).toFixed(2);
    const totalNew = (qty * rate).toFixed(2);
    const totalSaved = (totalOld - totalNew).toFixed(2);

    document.getElementById('qtyVal').innerText = qty;
    document.getElementById('newTotal').innerText = `€${totalNew}`;

    const alert = document.getElementById('savingsAlert');
    const oldPriceLabel = document.getElementById('oldTotal');

    if (qty < 10) {
        // Individual pricing: Hide the strike-through red price
        oldPriceLabel.style.opacity = "0";
        alert.innerHTML = `Add ${10 - qty} more for 10% off!`;
        alert.style.color = "#cbd5e1";
    } else {
        // Bulk pricing: Show the savings
        oldPriceLabel.style.opacity = "1";
        oldPriceLabel.innerText = `€${totalOld}`;
        alert.innerHTML = `€${totalSaved} Saved!`;
        alert.style.color = "#2ecc71";
    }
}
window.onload = calculateBulk;
