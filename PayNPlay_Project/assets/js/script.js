
document.addEventListener('DOMContentLoaded', function() {
    // Nominal selection logic
    const nominalBoxes = document.querySelectorAll('.nominal-box');
    nominalBoxes.forEach(box => {
        box.addEventListener('click', function() {
            nominalBoxes.forEach(b => b.classList.remove('active'));
            this.classList.add('active');
            updateTotal();
        });
    });

    // Payment method selection logic
    const paymentMethods = document.querySelectorAll('.payment-method');
    paymentMethods.forEach(method => {
        method.addEventListener('click', function() {
            paymentMethods.forEach(m => m.classList.remove('active'));
            this.classList.add('active');
            updateTotal();
        });
    });

    function updateTotal() {
        const activeNominal = document.querySelector('.nominal-box.active');
        const activePayment = document.querySelector('.payment-method.active');
        
        let total = 0;
        let admin = 0;
        let subtotal = 0;

        if(activeNominal) {
            subtotal = parseInt(activeNominal.getAttribute('data-price'));
        }
        if(activePayment) {
            admin = parseInt(activePayment.getAttribute('data-admin'));
        }
        
        if(activeNominal) {
            let ppn = subtotal * 0.11;
            total = subtotal + admin + ppn;
            
            document.getElementById('summary-subtotal').innerText = 'Rp ' + subtotal.toLocaleString('id-ID');
            document.getElementById('summary-admin').innerText = 'Rp ' + admin.toLocaleString('id-ID');
            document.getElementById('summary-ppn').innerText = 'Rp ' + ppn.toLocaleString('id-ID');
            document.getElementById('summary-total').innerText = 'Rp ' + total.toLocaleString('id-ID');
            document.getElementById('sticky-total').innerText = 'Rp ' + total.toLocaleString('id-ID');
        }
    }
});
