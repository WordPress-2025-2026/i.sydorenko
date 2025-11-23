<?php
$links = [
    ['text' => 'Home',     'href' => '#home'],
    ['text' => 'Services', 'href' => '#services'],
    ['text' => 'About',    'href' => '#about'],
    ['text' => 'Contact',  'href' => '#contact'],
    ['text' => 'Blog',     'href' => 'blog.php'],      

] ; ?>

        <nav>
        <div class="logo">Serenity Spa</div>
            <ul>
                <?php foreach ($links as $link): ?>
                <li><a href="<?= $link['href']; ?>"> <?= $link['text']; ?></a></li>
                <?php endforeach; ?>    
            </ul>
        </nav>