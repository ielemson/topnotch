<section class="page-banner style-two" style="background-image:url(images/background/<?=$banner_img ?? ''?>);">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <h1><?= $banner_caption ?? ' ' ?></h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="<?= base_url('/')?>">Home</a></li>
                    <li><?= $banner_caption ?? ' ' ?></li>
                </ul>
            </div>
        </div>
    </section>