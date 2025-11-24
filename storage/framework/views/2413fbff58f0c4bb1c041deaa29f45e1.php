<!-- WhatsApp Floating Button -->
<a href="https://wa.me/628112827821" 
   target="_blank" 
   rel="noopener noreferrer"
   class="whatsapp-float"
   aria-label="Chat via WhatsApp">
    <i class="fab fa-whatsapp"></i>
</a>

<style>
    .whatsapp-float {
        position: fixed;
        bottom: 110px;
        right: 33px;
        width: 60px;
        height: 60px;
        background-color: #25D366;
        color: white;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 32px;
        box-shadow: 0 4px 12px rgba(37, 211, 102, 0.4);
        z-index: 999;
        transition: all 0.3s ease;
        text-decoration: none;
    }

    .whatsapp-float:hover {
        background-color: #128C7E;
        transform: scale(1.1);
        box-shadow: 0 6px 20px rgba(37, 211, 102, 0.6);
    }

    .whatsapp-float i {
        line-height: 1;
    }

    @media (max-width: 768px) {
        .whatsapp-float {
            width: 50px;
            height: 50px;
            font-size: 28px;
            bottom: 70px;
            right: 15px;
        }
    }
</style>
<?php /**PATH C:\alamak\resources\views/components/whatsapp-button.blade.php ENDPATH**/ ?>