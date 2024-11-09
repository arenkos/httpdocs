// Bağış miktarını anında gösterme
const amountButtons = document.querySelectorAll('input[name="amount"]');
const customAmountInput = document.getElementById('customAmount');
const donationSummaryAmount = document.getElementById('donationSummaryAmount');
const fundSelect = document.getElementById('fundSelect');
const selectedFund = document.getElementById('selectedFund');

amountButtons.forEach(button => {
    button.addEventListener('change', () => {
        if (button.value === 'other') {
            customAmountInput.disabled = false;
            customAmountInput.addEventListener('input', updateAmount);
        } else {
            customAmountInput.disabled = true;
            customAmountInput.value = '';
            donationSummaryAmount.textContent = `₺${button.value}`;
        }
    });
});

function updateAmount() {
    const customAmount = customAmountInput.value;
    if (customAmount) {
        donationSummaryAmount.textContent = `₺${customAmount}`;
    } else {
        donationSummaryAmount.textContent = '₺0';
    }
}

// Vakıf seçimini anında gösterme
fundSelect.addEventListener('change', () => {
    selectedFund.textContent = fundSelect.value;
});
