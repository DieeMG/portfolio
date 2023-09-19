<?php require_once 'config.php'; ?>

<!DOCTYPE html>
    <html lang="<?= $user_language; ?>">
    <head>
        <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-E832WFFML3"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-E832WFFML3');
        </script>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="title" content="Diego Gelvez - Portfolio">
        <meta name="description" content="<?= $lang['meta_description']; ?>">
        <meta name="keywords" content="frontend, developer, wordpress, elementor, html, css, javascript, android, devacid, bootstrap,strapword">
        <meta name="robots" content="index, follow">
        <meta name="language" content="<?= $lang['meta_language']; ?>">
        <meta name="author" content="Diego Gelvez">
        <meta property="og:url" content="https://diegogelvez.ar" />
        <meta property="og:locale" content="es_AR" />
        <meta property="og:type" content="website" />
        <meta property="og:title" content="Diego Gelvez - Portfolio" />
        <meta property="og:description" content="<?= $lang['meta_description']; ?>" />
        <meta property="og:image" content="https://diegogelvez.ar/assets/img/favicon/android-chrome-512x512.png" />
        <meta name="twitter:card" content="<?= $lang['meta_description']; ?>" />
        <meta name="twitter:site" content="@DieeMG" />
        <meta name="twitter:creator" content="@DieeMG" />
        <title>Diego Gelvez - Portfolio</title>
                
		<link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicon/apple-touch-icon.png">
		<link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicon/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicon/favicon-16x16.png">
		<link rel="manifest" href="assets/img/favicon/site.webmanifest">

        <link rel="stylesheet" href="assets/css/styles.css">
        <link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css">

        <script src="https://www.google.com/recaptcha/api.js?render=6LcWExchAAAAALqiriId33tLAoTOheoeYgNt0g9C"></script>


    </head>
    <body>
        <header class="header" id="header">
            <nav class="nav container">
                <a href="#" class="nav__logo">Diego Gelvez</a>
                <div class="nav__menu">
                    <ul class="nav__list">
                        <li class="nav__item">
                            <a href="#home" class="nav__link active-link">
                                <i class='bx bx-home' ></i>
                            </a>
                        </li>
                        <li class="nav__item">
                            <a href="#about" class="nav__link">
                                <i class='bx bx-user' ></i>
                            </a>
                        </li>
                        <li class="nav__item">
                            <a href="#skills" class="nav__link">
                                <i class='bx bx-book' ></i>
                            </a>
                        </li>
                        <li class="nav__item">
                            <a href="#work" class="nav__link">
                                <i class='bx bx-briefcase' ></i>
                            </a>
                        </li>
                        <li class="nav__item">
                            <a href="#contact" class="nav__link">
                                <i class='bx bx-message-square-detail' ></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <i class='bx bx-moon change-theme' id="theme-button" ></i>
            </nav>
        </header>

        <main class="main">
            <section class="home section" id="home">
                <div class="home__container container grid">
                    <div class="home__data">
                        <span class="honme__greeting"><?= $lang['gretting']; ?></span>
                        <h1 class="home__name">Diego Gelvez</h1>
                        <h3 class="home__education">Frontend Developer</h3>

                        <div class="home__buttons">
                            <a download="" href="<?= $lang['btn_download_url']; ?>" id="DownloadCV" class="button button--ghost"><?= $lang['btn_download']; ?></a>
                            <a href="#about" class="button"><?= $lang['btn_about']; ?></a>
                        </div>
                    </div>
                    <div class="home__handle">
                        <video autoplay muted loop class="home__video">
                            <source src="/assets/videos/hola.webm" type="video/webm">
                        </video>
                    </div>
                    <div class="home__social">
                        <a href="https://www.linkedin.com/in/dieemg/" id="linkedin" target="_blank" rel="noopener noreferrer" class="home__social-link">
                            <i class='bx bxl-linkedin'></i>
                        </a>
                        <a href="https://github.com/dieemg" id="github" target="_blank" rel="noopener noreferrer" class="home__social-link">
                            <i class='bx bxl-github' ></i>
                        </a>
                        <a href="https://instagram.com/dieemg" id="instagram" target="_blank" rel="noopener noreferrer" class="home__social-link">
                            <i class='bx bxl-instagram' ></i>
                        </a>
                    </div>
                    <a href="#about" class="home__scroll">
                        <i class='bx bx-mouse home__scroll-iocn' ></i>
                        <span class="home__scroll-name">Scroll Down</span>
                    </a>
                </div>
            </section>
            
            <section class="about section" id="about">
                <span class="section__subtitle">Intro</span>
                <h2 class="section__title"><?= $lang['title_about']; ?></h2>
                <div class="about__container container grid">
                    <img src="/assets/img/about.webp" alt="" class="about__img">
                    <div class="about__data">
                        <div class="about__info">
                            <div class="about__box">
                                <i class='bx bx-award about__icon'></i>
                                <h3 class="about__title"><?= $lang['box_experience_title']; ?></h3>
                                <span class="about__subtitle"><?= $lang['box_experience_subtitle']; ?></span>
                            </div>
                            <div class="about__box">
                                <i class='bx bx-briefcase about__icon' ></i>
                                <h3 class="about__title"><?= $lang['box_projects_title']; ?></h3>
                                <span class="about__subtitle"><?= $lang['box_projects_subtitle']; ?></span>
                            </div>
                            <div class="about__box">
                                <i class='bx bx-support about__icon' ></i>
                                <h3 class="about__title"><?= $lang['box_availability_title']; ?></h3>
                                <span class="about__subtitle"><?= $lang['box_availability_subtitle']; ?></span>
                            </div>
                        </div>
                        <p class="about__description ">
                            <?= $lang['about_1p']; ?>
                        </p>
                        <p class="about__description ">
                            <?= $lang['about_2p']; ?>
                        </p>
                        <div style="text-align: end">
                            <a href="#contact" class="button"><?= $lang['btn_contact']; ?></a>
                        </div>    
                    </div>
                </div>
            </section>

            <section class="skills section" id="skills">
                <span class="section__subtitle"><?= $lang['knowledge_subtitle']; ?></span>
                <h2 class="section__title"><?= $lang['knowledge_title']; ?></h2>
                
                <div class="skills__container container grid">
                    <div class="skills__content">
                        <h3 class="skills__title">Frontend Developer</h3>

                        <div class="skills__box">
                            <div class="skills__group">
                                <div class="skills__data">
                                    <i class="bx bxs-badge-check"></i>
                                    <div>
                                        <h3 class="skills__name">HTML</h3>
                                        <span class="skills__level"><?= $lang['level_advanced']; ?></span> 
                                    </div>
                                </div>
                                <div class="skills__data">
                                    <i class="bx bxs-badge-check"></i>
                                    <div>
                                        <h3 class="skills__name">CSS</h3>
                                        <span class="skills__level"><?= $lang['level_advanced']; ?></span> 
                                    </div>
                                </div>
                                <div class="skills__data">
                                    <i class="bx bxs-badge-check"></i>
                                    <div>
                                        <h3 class="skills__name">JavaScript</h3>
                                        <span class="skills__level"><?= $lang['level_intermediate']; ?></span> 
                                    </div>
                                </div>
                            </div>
                            <div class="skills__group">
                                <div class="skills__data">
                                    <i class="bx bxs-badge-check"></i>
                                    <div>
                                        <h3 class="skills__name">Bootstrap</h3>
                                        <span class="skills__level"><?= $lang['level_advanced']; ?></span> 
                                    </div>
                                </div>
                                <div class="skills__data">
                                    <i class="bx bxs-badge-check"></i>
                                    <div>
                                        <h3 class="skills__name">Elementor</h3>
                                        <span class="skills__level"><?= $lang['level_advanced']; ?></span> 
                                    </div>
                                </div>
                                <div class="skills__data">
                                    <i class="bx bxs-badge-check"></i>
                                    <div>
                                        <h3 class="skills__name">WordPress</h3>
                                        <span class="skills__level"><?= $lang['level_advanced']; ?></span> 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="skills__content">
                        <h3 class="skills__title"><?= $lang['other_title']; ?></h3>

                        <div class="skills__box" >
                            <div class="skills__group">
                                <div class="skills__data">
                                    <i class="bx bxs-badge-check"></i>
                                    <div>
                                        <h3 class="skills__name">PHP</h3>
                                        <span class="skills__level"><?= $lang['level_intermediate']; ?></span> 
                                    </div>    
                                </div>
                                <div class="skills__data">
                                    <i class="bx bxs-badge-check"></i>
                                    <div>
                                        <h3 class="skills__name">React</h3>
                                        <span class="skills__level"><?= $lang['level_basic']; ?></span> 
                                    </div>
                                </div>
                                <div class="skills__data">
                                    <i class="bx bxs-badge-check"></i>
                                    <div>
                                        <h3 class="skills__name">GitHub</h3>
                                        <span class="skills__level"><?= $lang['level_intermediate']; ?></span> 
                                    </div>    
                                </div>
                            </div>
                            <div class="skills__group">
                                <div class="skills__data">
                                    <i class="bx bxs-badge-check"></i>
                                    <div>
                                        <h3 class="skills__name">MySQL</h3>
                                        <span class="skills__level"><?= $lang['level_intermediate']; ?></span> 
                                    </div>    
                                </div>
                                <div class="skills__data">
                                    <i class="bx bxs-badge-check"></i>
                                    <div>
                                        <h3 class="skills__name">Photoshop</h3>
                                        <span class="skills__level"><?= $lang['level_intermediate']; ?></span> 
                                    </div>
                                </div>
                                <div class="skills__data">
                                    <i class="bx bxs-badge-check"></i>
                                    <div>
                                        <h3 class="skills__name">Servidores</h3>
                                        <span class="skills__level"><?= $lang['level_intermediate']; ?></span> 
                                    </div>    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="services section">
                <span class="section__subtitle"><?= $lang['service_subtitle']; ?></span>
                <h2 class="section__title"><?= $lang['service_title']; ?></h2>

                <div class="services__container container grid">
                    <div class="services__card">
                        <h3 class="services__title"><?= $lang['service_title_1']; ?></h3>

                        <span class="services__button">
                            <?= $lang['service_btn']; ?> <i class='bx bx-right-arrow-alt services__icon'></i>
                        </span>

                        <div class="services__modal">
                            <div class="services__modal-content">
                                <i class='bx bx-x services__modal-close'></i>

                                <h3 class="services__modal-title"><?= $lang['service_title_1']; ?></h3>

                                <p class="services__modal-description"><?= $lang['service_desc_1']; ?></p>

                                <ul class="services__modal-list">
                                    <li class="services__modal-item">
                                        <i class="bx bx-check services__modal-icon"></i>
                                        <p class="services__modal-info">
                                            <?= $lang['service_list_1a']; ?>
                                        </p>
                                    </li>
                                    <li class="services__modal-item">
                                        <i class="bx bx-check services__modal-icon"></i>
                                        <p class="services__modal-info">
                                            <?= $lang['service_list_1b']; ?>
                                        </p>
                                    </li>
                                    <li class="services__modal-item">
                                        <i class="bx bx-check services__modal-icon"></i>
                                        <p class="services__modal-info">
                                            <?= $lang['service_list_1c']; ?>
                                        </p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="services__card">
                        <h3 class="services__title"><?= $lang['service_title_2']; ?></h3>

                        <span class="services__button">
                            <?= $lang['service_btn']; ?> <i class='bx bx-right-arrow-alt services__icon'></i>
                        </span>

                        <div class="services__modal">
                            <div class="services__modal-content">
                                <i class='bx bx-x services__modal-close'></i>

                                <h3 class="services__modal-title"><?= $lang['service_title_2']; ?></h3>

                                <p class="services__modal-description"><?= $lang['service_desc_2']; ?></p>

                                <ul class="services__modal-list">
                                    <li class="services__modal-item">
                                        <i class="bx bx-check services__modal-icon"></i>
                                        <p class="services__modal-info">
                                            <?= $lang['service_list_2a']; ?>
                                        </p>
                                    </li>
                                    <li class="services__modal-item">
                                        <i class="bx bx-check services__modal-icon"></i>
                                        <p class="services__modal-info">
                                            <?= $lang['service_list_2b']; ?>
                                        </p>
                                    </li>
                                    <li class="services__modal-item">
                                        <i class="bx bx-check services__modal-icon"></i>
                                        <p class="services__modal-info">
                                            <?= $lang['service_list_2c']; ?>
                                        </p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="services__card">
                        <h3 class="services__title"><?= $lang['service_title_3']; ?></h3>

                        <span class="services__button">
                            <?= $lang['service_btn']; ?> <i class='bx bx-right-arrow-alt services__icon'></i>
                        </span>

                        <div class="services__modal">
                            <div class="services__modal-content">
                                <i class='bx bx-x services__modal-close'></i>

                                <h3 class="services__modal-title"><?= $lang['service_title_3']; ?></h3>

                                <p class="services__modal-description"><?= $lang['service_desc_3']; ?></p>

                                <ul class="services__modal-list">
                                    <li class="services__modal-item">
                                        <i class="bx bx-check services__modal-icon"></i>
                                        <p class="services__modal-info">
                                            <?= $lang['service_list_3a']; ?>
                                        </p>
                                    </li>
                                    <li class="services__modal-item">
                                        <i class="bx bx-check services__modal-icon"></i>
                                        <p class="services__modal-info">
                                            <?= $lang['service_list_3b']; ?>
                                        </p>
                                    </li>
                                    <li class="services__modal-item">
                                        <i class="bx bx-check services__modal-icon"></i>
                                        <p class="services__modal-info">
                                            <?= $lang['service_list_3c']; ?>
                                        </p>
                                    </li>
                                    <li class="services__modal-item">
                                        <i class="bx bx-check services__modal-icon"></i>
                                        <p class="services__modal-info">
                                            <?= $lang['service_list_3d']; ?>
                                        </p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="services__card">
                        <h3 class="services__title"><?= $lang['service_title_4']; ?></h3>

                        <span class="services__button">
                            <?= $lang['service_btn']; ?> <i class='bx bx-right-arrow-alt services__icon'></i>
                        </span>

                        <div class="services__modal">
                            <div class="services__modal-content">
                                <i class='bx bx-x services__modal-close'></i>

                                <h3 class="services__modal-title"><?= $lang['service_title_4']; ?></h3>

                                <p class="services__modal-description"><?= $lang['service_desc_4']; ?></p>

                                <ul class="services__modal-list">
                                    <li class="services__modal-item">
                                        <i class="bx bx-check services__modal-icon"></i>
                                        <p class="services__modal-info">
                                            <?= $lang['service_list_4a']; ?>
                                        </p>
                                    </li>
                                    <li class="services__modal-item">
                                        <i class="bx bx-check services__modal-icon"></i>
                                        <p class="services__modal-info">
                                            <?= $lang['service_list_4b']; ?>
                                        </p>
                                    </li>
                                    <li class="services__modal-item">
                                        <i class="bx bx-check services__modal-icon"></i>
                                        <p class="services__modal-info">
                                            <?= $lang['service_list_4c']; ?>
                                        </p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="work section" id="work">
                <span class="section__subtitle"><?= $lang['portfolio_subtitle']; ?></span>

                <h2 class="section__title"><?= $lang['portfolio_title']; ?></h2>

                <div class="work__filters">
                    <span class="work__item active-work" data-filter='all' ><?= $lang['portfolio_btn_all']; ?></span>
                    <span class="work__item" data-filter='.android' ><?= $lang['portfolio_btn_android']; ?></span>
                    <span class="work__item" data-filter='.elementor' ><?= $lang['portfolio_btn_elementor']; ?></span>
                    <span class="work__item" data-filter='.web' ><?= $lang['portfolio_btn_wordpress']; ?></span>
                    <span class="work__item" data-filter='.otros' ><?= $lang['portfolio_btn_otros']; ?></span>
                </div>

                <div class="work__container container grid">
                    <div class="work__card mix web">
                        <img src="/assets/img/paseo-libertad.webp" loading="lazy" alt="Paseo Libertad" class="work__img">

                        <h3 class="work__title">Paseo Libertad</h3>
                        <div style="display:flex; gap: 1em;">
                            <span class="services__button">
                                <?= $lang['portfolio_btn_about_work']; ?> <i class='bx bx-right-arrow-alt services__icon'></i>
                            </span>
                            <a href="https://paseolibertad.com.ar/" target="_blank" rel="noopener noreferrer" class="work__button">
                                <?= $lang['portfolio_btn_link']; ?> <i class="bx bx-right-arrow-alt work__icon"></i>
                            </a>
                        </div><i class="bi bi-info-circle"></i>
                        <div class="services__modal">
                            <div class="services__modal-content">
                                <i class='bx bx-x services__modal-close'></i>

                                <h3 class="services__modal-title">Paseo Libertad</h3>

                                <p class="services__modal-description"><?= $lang['portfolio_paseo_desc']; ?></p>

                                <ul class="services__modal-list">
                                    <li class="services__modal-item">
                                        <i class="bx bxs-info-circle services__modal-icon"></i>
                                        <p class="services__modal-info">
                                            Theme: b5st, modificado para Paseo Libertad.
                                        </p>
                                    </li>
                                    <li class="services__modal-item">
                                        <i class="bx bxs-info-circle services__modal-icon"></i>
                                        <p class="services__modal-info">
                                            Información variable segun sección del sitio.
                                        </p>
                                    </li>
                                    <li class="services__modal-item">
                                        <i class="bx bxs-info-circle services__modal-icon"></i>
                                        <p class="services__modal-info">
                                            Incluye distintos custom post types, como Cine o Promociones.
                                        </p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="work__card mix web">
                        <img src="/assets/img/betos.webp" loading="lazy" alt="Betos 2022" class="work__img">

                        <h3 class="work__title">Betos</h3>
                        <div style="display:flex; gap: 1em;">
                            <span class="services__button">
                                <?= $lang['portfolio_btn_about_work']; ?> <i class='bx bx-right-arrow-alt services__icon'></i>
                            </span>
                            <a href="https://betos.com.ar/" target="_blank" rel="noopener noreferrer" class="work__button">
                                <?= $lang['portfolio_btn_link']; ?> <i class="bx bx-right-arrow-alt work__icon"></i>
                            </a>
                        </div>
                        <div class="services__modal">
                            <div class="services__modal-content">
                                <i class='bx bx-x services__modal-close'></i>

                                <h3 class="services__modal-title">Betos</h3>

                                <p class="services__modal-description"><?= $lang['portfolio_betos_desc']; ?></p>

                                <ul class="services__modal-list">
                                    <li class="services__modal-item">
                                        <i class="bx bxs-info-circle services__modal-icon"></i>
                                        <p class="services__modal-info">
                                            Theme: strapWord, modificado para Betos.
                                        </p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="work__card mix web">
                        <img src="/assets/img/punto-ceramico.webp" loading="lazy" alt="Punto Ceramico" class="work__img">

                        <h3 class="work__title">Punto Ceramico</h3>
                        <div style="display:flex; gap: 1em;">
                            <span class="services__button">
                                <?= $lang['portfolio_btn_about_work']; ?> <i class='bx bx-right-arrow-alt services__icon'></i>
                            </span>
                            <a href="https://puntoceramico.com.ar/" target="_blank" rel="noopener noreferrer" class="work__button">
                                <?= $lang['portfolio_btn_link']; ?> <i class="bx bx-right-arrow-alt work__icon"></i>
                            </a>
                        </div>
                        <div class="services__modal">
                            <div class="services__modal-content">
                                <i class='bx bx-x services__modal-close'></i>

                                <h3 class="services__modal-title">Punto Ceramico</h3>

                                <p class="services__modal-description"><?= $lang['portfolio_pc_desc']; ?></p>

                                <ul class="services__modal-list">
                                    <li class="services__modal-item">
                                        <i class="bx bxs-info-circle services__modal-icon"></i>
                                        <p class="services__modal-info">
                                            Theme: b5st, modificado para Punto Ceramico.
                                        </p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="work__card mix elementor">
                        <img src="/assets/img/idk-store.webp" loading="lazy" alt="IDK Store" class="work__img">

                        <h3 class="work__title">IDK Store</h3>
                        <div style="display:flex; gap: 1em;">
                            <span class="services__button">
                                <?= $lang['portfolio_btn_about_work']; ?> <i class='bx bx-right-arrow-alt services__icon'></i>
                            </span>
                            <a href="https://idkstore.com.ar/" target="_blank" rel="noopener noreferrer" class="work__button">
                                <?= $lang['portfolio_btn_link']; ?> <i class="bx bx-right-arrow-alt work__icon"></i>
                            </a>
                        </div>
                        <div class="services__modal">
                            <div class="services__modal-content">
                                <i class='bx bx-x services__modal-close'></i>

                                <h3 class="services__modal-title">IDK Store</h3>

                                <p class="services__modal-description"><?= $lang['portfolio_idk_desc']; ?></p>

                                <ul class="services__modal-list">
                                    <li class="services__modal-item">
                                        <i class="bx bxs-info-circle services__modal-icon"></i>
                                        <p class="services__modal-info">
                                            Theme: Hello Elementor.
                                        </p>
                                    </li>
                                    <li class="services__modal-item">
                                        <i class="bx bxs-info-circle services__modal-icon"></i>
                                        <p class="services__modal-info">
                                            Elementor Pro.
                                        </p>
                                    </li>
                                    <li class="services__modal-item">
                                        <i class="bx bxs-info-circle services__modal-icon"></i>
                                        <p class="services__modal-info">
                                            Pasarela de pago: Coinbase Commerce, Mercado Pago y Uala Bis
                                        </p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="work__card mix web">
                        <img src="/assets/img/saint-michel.webp" loading="lazy" alt="Saint Michel SRL" class="work__img">

                        <h3 class="work__title">Saint Michel SRL</h3>
                        <div style="display:flex; gap: 1em;">
                            <span class="services__button">
                                <?= $lang['portfolio_btn_about_work']; ?> <i class='bx bx-right-arrow-alt services__icon'></i>
                            </span>
                            <a href="https://saintmichelsrl.com.ar/" target="_blank" rel="noopener noreferrer" class="work__button">
                                <?= $lang['portfolio_btn_link']; ?> <i class="bx bx-right-arrow-alt work__icon"></i>
                            </a>
                        </div>
                        <div class="services__modal">
                            <div class="services__modal-content">
                                <i class='bx bx-x services__modal-close'></i>

                                <h3 class="services__modal-title">Saint Michel SRL</h3>

                                <p class="services__modal-description"><?= $lang['portfolio_sm_desc']; ?></p>

                                <ul class="services__modal-list">
                                    <li class="services__modal-item">
                                        <i class="bx bxs-info-circle services__modal-icon"></i>
                                        <p class="services__modal-info">
                                            Theme: b5st, modificado para Saint Michel.
                                        </p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="work__card mix elementor">
                        <img src="/assets/img/mii-uc.webp" loading="lazy" alt="MII UC" class="work__img">

                        <h3 class="work__title">MII UC</h3>
                        <div style="display:flex; gap: 1em;">
                            <span class="services__button">
                                <?= $lang['portfolio_btn_about_work']; ?> <i class='bx bx-right-arrow-alt services__icon'></i>
                            </span>
                            <a href="https://miiuc.cl/" target="_blank" rel="noopener noreferrer" class="work__button">
                                <?= $lang['portfolio_btn_link']; ?> <i class="bx bx-right-arrow-alt work__icon"></i>
                            </a>
                        </div>
                        <div class="services__modal">
                            <div class="services__modal-content">
                                <i class='bx bx-x services__modal-close'></i>

                                <h3 class="services__modal-title">MII UC</h3>

                                <p class="services__modal-description"><?= $lang['portfolio_miiuc_desc']; ?></p>

                                <ul class="services__modal-list">
                                    <li class="services__modal-item">
                                        <i class="bx bxs-info-circle services__modal-icon"></i>
                                        <p class="services__modal-info">
                                            Theme: Hello Elementor y Child theme.
                                        </p>
                                    </li>
                                    <li class="services__modal-item">
                                        <i class="bx bxs-info-circle services__modal-icon"></i>
                                        <p class="services__modal-info">
                                            Elementor Pro.
                                        </p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="work__card mix elementor">
                        <img src="/assets/img/gestore.webp" loading="lazy" alt="Gestore" class="work__img">

                        <h3 class="work__title">Gestore</h3>
                        <div style="display:flex; gap: 1em;">
                            <span class="services__button">
                                <?= $lang['portfolio_btn_about_work']; ?> <i class='bx bx-right-arrow-alt services__icon'></i>
                            </span>
                            <a href="https://gestore.com.ar/" target="_blank" rel="noopener noreferrer" class="work__button">
                                <?= $lang['portfolio_btn_link']; ?> <i class="bx bx-right-arrow-alt work__icon"></i>
                            </a>
                        </div>
                        <div class="services__modal">
                            <div class="services__modal-content">
                                <i class='bx bx-x services__modal-close'></i>

                                <h3 class="services__modal-title">Gestore</h3>

                                <p class="services__modal-description"><?= $lang['portfolio_gestore_desc']; ?></p>

                                <ul class="services__modal-list">
                                    <li class="services__modal-item">
                                        <i class="bx bxs-info-circle services__modal-icon"></i>
                                        <p class="services__modal-info">
                                            Theme: Porto.
                                        </p>
                                    </li>
                                    <li class="services__modal-item">
                                        <i class="bx bxs-info-circle services__modal-icon"></i>
                                        <p class="services__modal-info">
                                            Elementor Free.
                                        </p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="work__card mix elementor">
                        <img src="/assets/img/galaxy-vacations.webp" loading="lazy" alt="Tarifario Galaxy Vacations" class="work__img">

                        <h3 class="work__title">Tarifario Galaxy Vacations 2022</h3>
                        <div style="display:flex; gap: 1em;">
                            <span class="services__button">
                                <?= $lang['portfolio_btn_about_work']; ?> <i class='bx bx-right-arrow-alt services__icon'></i>
                            </span>
                        </div>
                        <div class="services__modal">
                            <div class="services__modal-content">
                                <i class='bx bx-x services__modal-close'></i>

                                <h3 class="services__modal-title">Tarifario Galaxy Vacations 2022</h3>

                                <p class="services__modal-description"><?= $lang['portfolio_galaxy_desc']; ?></p>

                                <ul class="services__modal-list">
                                    <li class="services__modal-item">
                                        <i class="bx bxs-info-circle services__modal-icon"></i>
                                        <p class="services__modal-info">
                                            Elementor Free.
                                        </p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="work__card mix elementor">
                        <img src="/assets/img/fun-wise.webp" loading="lazy" alt="Fun Wise" class="work__img">

                        <h3 class="work__title">Fun Wise</h3>
                        <div style="display:flex; gap: 1em;">
                            <span class="services__button">
                                <?= $lang['portfolio_btn_about_work']; ?> <i class='bx bx-right-arrow-alt services__icon'></i>
                            </span>
                            <a href="https://funwiseonline.com/" target="_blank" rel="noopener noreferrer" class="work__button">
                                <?= $lang['portfolio_btn_link']; ?> <i class="bx bx-right-arrow-alt work__icon"></i>
                            </a>
                        </div>
                        <div class="services__modal">
                            <div class="services__modal-content">
                                <i class='bx bx-x services__modal-close'></i>

                                <h3 class="services__modal-title">Fun Wise</h3>

                                <p class="services__modal-description"><?= $lang['portfolio_funwise_desc']; ?></p>

                                <ul class="services__modal-list">
                                    <li class="services__modal-item">
                                        <i class="bx bxs-info-circle services__modal-icon"></i>
                                        <p class="services__modal-info">
                                            Theme: Hello Elementor.
                                        </p>
                                    </li>
                                    <li class="services__modal-item">
                                        <i class="bx bxs-info-circle services__modal-icon"></i>
                                        <p class="services__modal-info">
                                            Elementor Free.
                                        </p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="work__card mix otros android">
                        <img src="/assets/img/eco-indice.webp" loading="lazy" alt="ECOíndice" class="work__img">

                        <h3 class="work__title">ECOíndice</h3>
                        <div style="display:flex; gap: 1em;">
                            <span class="services__button">
                                <?= $lang['portfolio_btn_about_work']; ?> <i class='bx bx-right-arrow-alt services__icon'></i>
                            </span>
                            <a href="https://ecoindice.ml/" target="_blank" rel="noopener noreferrer" class="work__button">
                                <?= $lang['portfolio_btn_link']; ?> <i class="bx bx-right-arrow-alt work__icon"></i>
                            </a>
                        </div>
                        <div class="services__modal">
                            <div class="services__modal-content">
                                <i class='bx bx-x services__modal-close'></i>

                                <h3 class="services__modal-title">ECOíndice</h3>

                                <p class="services__modal-description"><?= $lang['portfolio_ecoindice_desc']; ?></p>

                                <ul class="services__modal-list">
                                    <li class="services__modal-item">
                                        <i class="bx bxs-info-circle services__modal-icon"></i>
                                        <p class="services__modal-info">
                                            HTML + CSS + JavaScript
                                        </p>
                                    </li>
                                    <li class="services__modal-item">
                                        <i class="bx bxs-info-circle services__modal-icon"></i>
                                        <p class="services__modal-info">
                                            Framework: <a href="https://materializecss.com/" target="_blank" rel="noopener noreferrer">Materialize CSS</a>
                                        </p>
                                    </li>
                                    <li class="services__modal-item">
                                        <i class="bx bx-link-external services__modal-icon"></i>
                                        <p class="services__modal-info">
                                            <a href="https://ecoindice.ml/old" target="_blank" rel="noopener noreferrer"><?= $lang['portfolio_ecoindice_old']; ?></a>
                                        </p>
                                    </li>
                                    <li class="services__modal-item">
                                        <i class="bx bxl-play-store services__modal-icon"></i>
                                        <p class="services__modal-info">
                                            <a href="https://play.google.com/store/apps/details?id=com.devacid.ecoindice" target="_blank" rel="noopener noreferrer"><?= $lang['portfolio_ecoindice_google_play']; ?></a>
                                        </p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="work__card mix elementor">
                        <img src="/assets/img/instituto-ferrini.webp" loading="lazy" alt="Instituto Ferrini" class="work__img">

                        <h3 class="work__title">Instituto Ferrini</h3>
                        <div style="display:flex; gap: 1em;">
                            <span class="services__button">
                                <?= $lang['portfolio_btn_about_work']; ?> <i class='bx bx-right-arrow-alt services__icon'></i>
                            </span>
                            <a href="https://iferrinipanama.edu.pa" target="_blank" rel="noopener noreferrer" class="work__button">
                                <?= $lang['portfolio_btn_link']; ?> <i class="bx bx-right-arrow-alt work__icon"></i>
                            </a>
                        </div>
                        <div class="services__modal">
                            <div class="services__modal-content">
                                <i class='bx bx-x services__modal-close'></i>

                                <h3 class="services__modal-title">Instituto Ferrini</h3>

                                <p class="services__modal-description"><?= $lang['portfolio_ferrini_desc']; ?></p>

                                <ul class="services__modal-list">
                                    <li class="services__modal-item">
                                        <i class="bx bxs-info-circle services__modal-icon"></i>
                                        <p class="services__modal-info">
                                            Theme: Hello Elementor y Child theme.
                                        </p>
                                    </li>
                                    <li class="services__modal-item">
                                        <i class="bx bxs-info-circle services__modal-icon"></i>
                                        <p class="services__modal-info">
                                            Elementor Pro.
                                        </p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="work__card mix web">
                        <img src="/assets/img/integralis.webp" loading="lazy" alt="Integralis" class="work__img">

                        <h3 class="work__title">Integralis</h3>
                        <div style="display:flex; gap: 1em;">
                            <span class="services__button">
                                <?= $lang['portfolio_btn_about_work']; ?> <i class='bx bx-right-arrow-alt services__icon'></i>
                            </span>
                            <a href="https://centrointegralis.com.ar/" target="_blank" rel="noopener noreferrer" class="work__button">
                                <?= $lang['portfolio_btn_link']; ?> <i class="bx bx-right-arrow-alt work__icon"></i>
                            </a>
                        </div>
                        <div class="services__modal">
                            <div class="services__modal-content">
                                <i class='bx bx-x services__modal-close'></i>

                                <h3 class="services__modal-title">Centro Integralis</h3>

                                <p class="services__modal-description"><?= $lang['portfolio_integralis_desc']; ?></p>

                                <ul class="services__modal-list">
                                    <li class="services__modal-item">
                                        <i class="bx bxs-info-circle services__modal-icon"></i>
                                        <p class="services__modal-info">
                                            Theme: strapWord, modificado para Integralis.
                                        </p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </section>

            <section class="contact section" id="contact">
                <span class="section__subtitle"><?= $lang['contact_subtitle']; ?></span>
                <h2 class="section__title"><?= $lang['contact_title']; ?></h2>

                <div class="contact__container container grid">
                    <div class="contact__content" style="margin: auto;">
                        <!-- <h3 class="contact__title "><?= $lang['contact_sidebar_title']; ?></h3> -->

                        <div class="contact__info">
                            <div class="contact__card icon-foward">
                                <i class="bx bx-mail-send contact__card-icon"></i>
                                <h3 class="contact__card-title">Email</h3>
                                <span class="contact__card-data">hola@diegogelvez.ar</span>
                                
                                <a href="mailto:hola@diegogelvez.ar" target="_blank" rel="noopener noreferrer" id="emailLink" class="contact__button ">
                                    <?= $lang['contact_write_btn']; ?> <i class="bx bx-right-arrow-alt contact__button-icon"></i>
                                </a>
                            </div>
                            <div class="contact__card icon-foward">
                                <i class="bx bxl-whatsapp contact__card-icon"></i>
                                <h3 class="contact__card-title">Whatsapp</h3>
                                <span class="contact__card-data">+54 9 351 2 146 724</span>
                                
                                <a href="http://wa.me/+5493512146724" target="_blank" rel="noopener noreferrer" id="Whatsapp" class="contact__button">
                                    <?= $lang['contact_write_btn']; ?> <i class="bx bx-right-arrow-alt contact__button-icon"></i>
                                </a>
                            </div>
                            <div class="contact__card icon-foward">
                                <i class="bx bxl-messenger contact__card-icon"></i>
                                <h3 class="contact__card-title">Messenger</h3>
                                <span class="contact__card-data">DieeMG</span>
                                
                                <a href="http://m.me/dieemg" target="_blank" rel="noopener noreferrer" id="fbMessenger" class="contact__button">
                                    <?= $lang['contact_write_btn']; ?> <i class="bx bx-right-arrow-alt contact__button-icon"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="contact__content">
                        <h3 class="contact__title "><?= $lang['contact_form_title']; ?></h3>
                        
                        <form action="#" id="mainForm" name="mainForm" class="contact__form">
                            <div class="contact__form-div">
                                <label for="name" class="contact__form-tag"><?= $lang['contact_form_name']; ?></label>
                                <input type="text" name="name" id="name" placeholder="<?= $lang['contact_form_name_placeholder']; ?>" class="contact__form-input">
                            </div>
                            <div class="contact__form-div">
                                <label for="email" class="contact__form-tag"><?= $lang['contact_form_email']; ?></label>
                                <input type="email" name="email" id="email" placeholder="<?= $lang['contact_form_email_placeholder']; ?>" class="contact__form-input">
                            </div>
                            <div class="contact__form-div contact__form-area">
                                <label for="project" class="contact__form-tag"><?= $lang['contact_form_project']; ?></label>
                                <textarea name="project" id="project" cols="30" rows="10" placeholder="<?= $lang['contact_form_project_placeholder']; ?>" class="contact__form-input"></textarea>
                            </div>

                           <div style="text-align: end">
                                <input type="hidden" name="token" id="token">
                                <button type="submit" id="submit" class="button" disabled ><?= $lang['contact_form_btn']; ?></button>
                           </div>
                           <div class="statusTxt"><?= $lang['contact_form_sending']; ?></div>
                        </form>
                    </div>
                </div>
            </section>
        </main>

        <footer class="footer">
            <div class="footer__container container">
                <h1 class="footer__title">Diego Gelvez</h1>

                <ul class="footer__social">
                    <li>
                        <a href="https://fb.me/dieemg" id="facebook" target="_blank" rel="noopener noreferrer" class="footer__social-link">
                            <i class="bx bxl-facebook"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://instagram.com/dieemg" id="instagram" target="_blank" rel="noopener noreferrer" class="footer__social-link">
                            <i class="bx bxl-instagram"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://twitter.com/dieemg" id="twitter" target="_blank" rel="noopener noreferrer" class="footer__social-link">
                            <i class="bx bxl-twitter"></i>
                        </a>
                    </li>
                </ul>

                <span class="footer__copy">
                    &copy; <?= date("Y"); ?> - <?= $lang['developed_by']; ?> <a href="http://devacid.xyz" id="devAcid" target="_blank" rel="noopener noreferrer"><strong><span style="color: #0b111e;">devAcid</span></strong></a>
                </span>
            </div>
        </footer>
        <script src="https://unpkg.com/mixitup@3.3.1/dist/mixitup.js"></script>
        <script src="https://unpkg.com/scrollreveal@4.0.9/dist/scrollreveal.js"></script>
        <script src="/assets/js/main.js"></script>
    </body>
</html>
