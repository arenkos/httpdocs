window.onload = function() {
    const images = ['slide1', 'slide2', 'slide3']; // Slayt gösterisinde yer alacak resimlerin ID'leri
    let currentIndex = 0;
    const progressBar = document.getElementById('progress-bar');
    
    function showSlide(index) {
        // Tüm resimlerin sınıfını temizle
        images.forEach((imageID, i) => {
            const img = document.getElementById(imageID);
            img.classList.remove('active', 'prev');
            if (i === index) {
                img.classList.add('active');
            } else if (i === (index - 1 + images.length) % images.length) {
                img.classList.add('prev');
            }
        });
    }
    
    function nextSlide() {
        currentIndex = (currentIndex + 1) % images.length;
        showSlide(currentIndex);
        resetProgressBar();
    }
    
    function prevSlide() {
        currentIndex = (currentIndex - 1 + images.length) % images.length;
        showSlide(currentIndex);
        resetProgressBar();
    }
    
    function resetProgressBar() {
        progressBar.style.transition = 'none'; // Animasyonu sıfırla
        progressBar.style.width = '0%'; // Baştan başla
        setTimeout(() => {
            progressBar.style.transition = 'width 10s linear'; // Geçiş süresini ayarla
            progressBar.style.width = '100%'; // 10 saniyede tam dolu
        }, 50); // Küçük bir gecikme ile animasyonu tetikle
    }
    
    // İlk progress bar'ı başlat
    resetProgressBar();
    
    // Sağ ok (ileri) için event listener
    document.getElementById('next').addEventListener('click', nextSlide);
    
    // Sol ok (geri) için event listener
    document.getElementById('prev').addEventListener('click', prevSlide);
    
    // Otomatik geçiş için setInterval kullanımı (her 10 saniyede bir geçiş)
    setInterval(nextSlide, 10000); // 10000 milisaniye = 10 saniye
    
};
function scrollToSection(sectionId) {
    const section = document.getElementById(sectionId);
    const offset = 180; // 150px daha fazla kaydırma
    const sectionPosition = section.getBoundingClientRect().top + window.pageYOffset;
    
    // Hedef konuma ek olarak 150px daha yukarı kaydırır
    window.scrollTo({
        top: sectionPosition - offset,
        behavior: 'smooth'
    });
}

// Bağış Sayfası
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


function changeLanguage() {
        const dropdown = document.getElementById('language-dropdown');
        const selectedLanguage = dropdown.value;
        
        // Burada dil değişim işlemini gerçekleştirin
        if (selectedLanguage === 'tr') {
            // Türkçe içeriği göster
            alert('Türkçe seçildi!');
        } else if (selectedLanguage === 'en') {
            // İngilizce içeriği göster
            alert('English selected!');
        } else if (selectedLanguage === 'hy') {
            // Ermenice içeriği göster
            alert('Հայերեն ընտրված է!');
        }
        
        // İçeriği değiştirmek için sayfayı yeniden yükleyebilir veya dinamik olarak içeriği güncelleyebilirsiniz.
    }



// Düzeltilecek
function updateTutar() {
    const balanceInput = document.getElementById('balance');
    const tutarElement = document.getElementById('tutar');
    const paraBirimElement = document.getElementById('para_birimi');

    // Tutarı güncelle
    tutarElement.textContent = balanceInput.value.replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1.'); // Formatlama

    // Seçilen para birimini göster
    const paraBirimGoster = paraBirimElement.options[paraBirimElement.selectedIndex].text.toUpperCase();
    document.getElementById('para_birimi_goster').textContent = paraBirimGoster;
}

