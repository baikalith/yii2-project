<?php
$this->title = 'Контактная информация';
?>
<div class="site-contacts d-flex justify-content-center align-items-center" style="min-height:70vh">

    <div class="card shadow rounded p-4" style="max-width:480px; width:100%">
        <div class="text-center mb-4">
            <!-- Можно поставить свой логотип или изображение -->
            <img src="/images/company-logo.png" alt="Логотип компании" height="64" class="mb-2" style="border-radius:12px;">
            <h2 class="mb-2 text-primary"><?= $this->title ?></h2>
            <p class="text-secondary small">Проектная организация «СтройПроект»</p>
        </div>
        <div class="mb-2"><b>Адрес:</b> г. Москва, ул. Проектировщиков, д. 15</div>
        <div class="mb-2"><b>Телефон:</b> <a href="tel:+74951234567" class="text-dark text-decoration-none">+7 (495) 123-45-67</a></div>
        <div class="mb-2"><b>Email:</b> <a href="mailto:info@project-org.ru" class="text-dark text-decoration-none">info@project-org.ru</a></div>
        <div class="mb-2"><b>Режим работы:</b> пн–пт, 9:00–18:00</div>
        <hr>
        <div class="text-center mt-2">
            <a href="javascript:history.back()" class="btn btn-outline-primary">
                <i class="bi bi-arrow-left"></i> Назад
            </a>
        </div>
    </div>

</div>