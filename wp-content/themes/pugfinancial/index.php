<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Pug Financial
 */

get_header(); ?>

<section class="container">
    <div class="row pg-intro">
        <div class="col-sm-offset-1 col-xs-offset-3 col-xs-6 col-sm-4">
            <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/pug_med.jpg">
        </div>
        <div class="col-xs-12 col-sm-7">
            <blockquote class="pg-intro__text text-muted">
                <span id="intro-slogan"></span>
            </blockquote>
            <div class="row">
                <div id="carousel-example-generic" class="carousel slide pg-carousel" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="4"></li>
                    </ol>
                    <div class="carousel-inner mt-2" role="listbox">
                        <div class="item active">
                            <h2 class="h4 mb-2 text-muted text-center font-family-heading">Owner Occupied Loans</h2>
                            <div class="col-xs-12">
                                <div class="pg-intro-rate">
                                    <h3 class="pg-intro-rate__text">Variable Rate</h3>
                                    <div class="pg-intro-rate__number">3.68% <span class="small">p.a.</span></div>
                                </div>
                            </div>
                            <div class="col-xs-12">
                                <div class="pg-intro-rate">
                                    <h3 class="pg-intro-rate__text">Comparison Rate *</h3>
                                    <div class="pg-intro-rate__number">3.69% <span class="small">p.a.</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <h2 class="h4 mb-2 text-muted text-center font-family-heading">Investment Loans</h2>
                            <div class="col-xs-12">
                                <div class="pg-intro-rate">
                                    <h3 class="pg-intro-rate__text">Variable Rate</h3>
                                    <div class="pg-intro-rate__number">4.09% <span class="small">p.a.</span></div>
                                </div>
                            </div>
                            <div class="col-xs-12">
                                <div class="pg-intro-rate">
                                    <h3 class="pg-intro-rate__text">Comparison Rate *</h3>
                                    <div class="pg-intro-rate__number">4.25% <span class="small">p.a.</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <h2 class="h4 mb-2 text-muted text-center font-family-heading">Owner Occupied Fixed 2Yr</h2>
                            <div class="col-xs-12">
                                <div class="pg-intro-rate">
                                    <h3 class="pg-intro-rate__text">Variable Rate</h3>
                                    <div class="pg-intro-rate__number">3.64% <span class="small">p.a.</span></div>
                                </div>
                            </div>
                            <div class="col-xs-12">
                                <div class="pg-intro-rate">
                                    <h3 class="pg-intro-rate__text">Comparison Rate *</h3>
                                    <div class="pg-intro-rate__number">4.83% <span class="small">p.a.</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <h2 class="h4 mb-2 text-muted text-center font-family-heading">Investment Fixed 2Yr</h2>
                            <div class="col-xs-12">
                                <div class="pg-intro-rate">
                                    <h3 class="pg-intro-rate__text">Variable Rate</h3>
                                    <div class="pg-intro-rate__number">3.85% <span class="small">p.a.</span></div>
                                </div>
                            </div>
                            <div class="col-xs-12">
                                <div class="pg-intro-rate">
                                    <h3 class="pg-intro-rate__text">Comparison Rate *</h3>
                                    <div class="pg-intro-rate__number">4.97% <span class="small">p.a.</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <h2 class="h4 mb-2 text-muted text-center font-family-heading">Low Doc Loans</h2>
                            <div class="col-xs-12">
                                <div class="pg-intro-rate">
                                    <h3 class="pg-intro-rate__text">Variable Rate</h3>
                                    <div class="pg-intro-rate__number">4.04% <span class="small">p.a.</span></div>
                                </div>
                            </div>
                            <div class="col-xs-12">
                                <div class="pg-intro-rate">
                                    <h3 class="pg-intro-rate__text">Comparison Rate *</h3>
                                    <div class="pg-intro-rate__number">4.23% <span class="small">p.a.</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                        <span class="fa fa-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                        <span class="fa fa-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
                <div class="mt-8 pg-apply-now">
                    <a href="<?php echo get_site_url(); ?>/find-out-more"
                       class="btn btn-primary btn-lg btn-round pg-btn-wide-padding mr-2">Apply Now</a>
                    <div class="mr-2">Or</div>
                    <div>
                        <h1 class="mb-1 h5">
                            <span class="text-primary inline-block vertical-align-middle big mr-1"><i
                                        class="fa fa-phone"></i></span>
                            <span class="inline-block vertical-align-middle font-family-base">Call Us Now</span>
                        </h1>
                        <h2 class="text-primary font-family-base mt-0 h4">1300 THE PUG</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="container-fluid">
    <div class="row">
        <div class="col-xs-12">
            <div class="pg-bank-showcase">
                <img src="<?php echo get_template_directory_uri(); ?>/img/logos/westpac.gif" alt="westpac"
                <img src="<?php echo get_template_directory_uri(); ?>/img/logos/nab.gif" alt="nab"/>
                <img src="<?php echo get_template_directory_uri(); ?>/img/logos/commonwealth.gif" alt="commonwealth"/>
                <img src="<?php echo get_template_directory_uri(); ?>/img/logos/connective.gif" alt="connective"/>
                <img src="<?php echo get_template_directory_uri(); ?>/img/logos/anz.gif" alt="anz"/>
                <img src="<?php echo get_template_directory_uri(); ?>/img/logos/macquarie.gif" alt="macquarie"/>
                <img src="<?php echo get_template_directory_uri(); ?>/img/logos/bluestone.gif" alt="bluestone"/>
                <img src="<?php echo get_template_directory_uri(); ?>/img/logos/suncorp.gif" alt="suncorp"/>
                <img src="<?php echo get_template_directory_uri(); ?>/img/logos/bankwest.gif" alt="bankwest"/>
                <img src="<?php echo get_template_directory_uri(); ?>/img/logos/ing.gif" alt="ing"/>
                <img src="<?php echo get_template_directory_uri(); ?>/img/logos/amp.gif" alt="amp"/>
                <img src="<?php echo get_template_directory_uri(); ?>/img/logos/boq.gif" alt="boq"/>
            </div>
        </div>
    </div>
</section>
<article class="bg-lightest">
    <h2 class="sr-only">DISCLAIMER</h2>
    <div class="container text-muted pt-4 pb-4 small">
        *The comparison rates are based on a loan amount of $150,000 and a term of 25 years. Warning: These comparison
        rates apply only to the example or examples given. Different amounts and terms will result in different
        comparison rates. Costs such as redraw fees or early repayment fees, and costs savings such as fee waivers, are
        not included in the comparison rate but may influence the cost of the loan. All offers and products shown on
        this website are subject to lender approval, terms and conditions. Please contact The Pug for key details
        regarding these terms and conditions. Your full financial situation would need to be reviewed prior to
        acceptance of any offer or product. All rates, deals and offers are believed to be correct at the time of
        publication, but are subject to final confirmation by lender and may change without notice.
    </div>
</article>

<?php get_footer(); ?>
