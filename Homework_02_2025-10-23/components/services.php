<?php
$services = [
    'massage' => [
        'title' => 'Massage Therapy',
        'alt' => 'Massage Therapy',
        'description' => 'Relaxing and therapeutic massages for your body and mind',
        'image' => '/assets/images/massage.jpg',
    ],
    'facial' => [
        'title' => 'Facial Treatments',
        'alt' => 'Facial Treatments',
        'description' => 'Rejuvenating facials for radiant, glowing skin',
        'image' => '/assets/images/facial.jpg',
    ],
    'body_treatment' => [
        'title' => 'Body Treatments',
        'alt' => 'Body Treatments',
        'description' => 'Nourishing body wraps and scrubs',
        'image' => '/assets/images/body-treatment.jpg',
    ],
    'hammam' => [
        'title' => 'Hammam',
        'alt' => 'Hammam',
        'description' => 'Hammam has a beneficial effect on all body systems',
        'image' => '/assets/images/ham.png',
]

]; ?>

            <h2>Our Services</h2>
            <div class="service-grid">
                <?php foreach ($services as $service): ?>
                    <div class="service-card">
                        <img src="<?= $service['image']; ?>" alt="<?= $service['alt']; ?>">
                        <h3><?= $service['title']; ?></h3>
                        <p><?= $service['description']; ?></p>
                    </div>
                <?php endforeach; ?>
            </div>

