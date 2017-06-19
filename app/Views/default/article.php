<?php
use Model\Shortcut;
$this->layout('layout', ['title' => 'TechNews | ', 'current' => '']);
?>

<!-- Pour inclure du CSS -->
<?php $this->start('css') ?>
	<!-- Tout ce qui sera inclut ici, viendra se placer dans la section "css" du layout. -->
<?php $this->stop('css') ?>

<!-- Pour inclure le Contenu -->
<?php $this->start('contenu') ?>
    <div class="row">
        <!--colleft-->
        <div class="col-md-8 col-sm-12">
            <!--post-detail-->
            <article class="post-detail">
                <h1><?= $article->TITREARTICLE; ?></h1>
                <div class="meta-post">
                    <a href="#">
                        <?= $article->PRENOMAUTEUR; ?>	<?= $article->NOMAUTEUR; ?>
                    </a>
                    <em></em>
                    <span>
                        <?= $article->DATECREATIONARTICLE; ?>
                    </span>
                </div>
    
                <?= $article->CONTENUARTICLE; ?>
    
                <h5 class="text-right font-heading">
                	<strong>
                		<?= $article->PRENOMAUTEUR; ?>	<?= $article->NOMAUTEUR; ?>
                	</strong>
                </h5>
    
            </article>
            <!--social-detail-->
            <div class="social-detail">
                <span>   Partager notre article</span>
    
                <ul class="list-social-icon">
                    <li>
                        <a href="#" class="facebook">
                            <i class="fa fa-facebook"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="twitter">
                            <i class="fa fa-twitter"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="google">
                            <i class="fa fa-google"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="youtube">
                            <i class="fa fa-youtube-play"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="pinterest">
                            <i class="fa fa-pinterest-p"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="rss">
                            <i class="fa fa-rss"></i>
                        </a>
                    </li>
    
                </ul>
            </div>
    
            <!--related post-->
            <div class="detail-caption">
                <span>  DANS LA MEME CATEGORIE</span>
            </div>
            <section class="spotlight-thumbs spotlight-thumbs-related">
                <div class="row">
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="spotlight-item-thumb">
                            <div class="spotlight-item-thumb-img">
                                <a href="#">
                                    <img alt="" src="images/product/3.jpg">
                                </a>
                                <a href="#" class="cate-tag">business</a>
                            </div>
                            <h3><a href="#">Donald Trump suggests the DNC was hacked by 'someone sitting on their bed that weighs 400 lbs'</a></h3>
                            <div class="meta-post">
                                <a href="#">
                                    Sue	Benson
                                </a>
                                <em></em>
                                <span>
                                    22 Sep 2016
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="spotlight-item-thumb">
                            <div class="spotlight-item-thumb-img">
                                <a href="#">
                                    <img alt="" src="images/product/4.jpg">
                                </a>
                                <a href="#" class="cate-tag">Computing</a>
                            </div>
                            <h3><a href="#">Six big ways MacOS Sierra is going to change your Apple experience</a></h3>
                            <div class="meta-post">
                                <a href="#">
                                    Marion	Craig
                                </a>
                                <em></em>
                                <span>
                                    21 Sep 2016
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="spotlight-item-thumb">
                            <div class="spotlight-item-thumb-img">
                                <a href="#">
                                    <img alt="" src="images/product/5.jpg">
                                </a>
                                <a href="#" class="cate-tag">Tech</a>
                            </div>
                            <h3><a href="#">Messenger Bots Are Overhyped, Underpowered�and Growing like Crazy</a></h3>
                            <div class="meta-post">
                                <a href="#">
                                    Super User
                                </a>
                                <em></em>
                                <span>
                                    26 Sep 2016
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
<?php $this->stop('contenu') ?>

<!-- Pour inclure des scripts -->
<?php $this->start('script') ?>
	<!-- Tout ce qui sera inclut ici, viendra se placer dans la section "script" du layout. -->
<?php $this->stop('script') ?>













