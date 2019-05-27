
<?php $page_name = "step1" ?>
<?php $prev_page = "step-1d" ?>
<?php $next_page = "step-1f" ?>
<?php include('header.php'); ?>

<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="description">
                    <p>Hi Jim, few more<br> questions..</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="field-completed">
                <div class="col-md-12">
                        <span>Full name?</span>
                        <p>Jim Smith</p>
                        <a href="#">edit</a>
                </div>
            </div>
            <div class="field-completed">
                <div class="col-md-12">
                        <span>What's your profession?</span>
                        <p>Drywaller</p>
                        <a href="#">edit</a>
                </div>
            </div>
            <div class="field-completed">
                <div class="col-md-12">
                        <span>Wherte's your business located?</span>
                        <p>M5H 1P9</p>
                        <a href="#">edit</a>
                </div>
            </div>
            <div class="field-completed">
                <div class="col-md-12">
                        <span>Company name?</span>
                        <p>The Finisher</p>
                        <a href="#">edit</a>
                </div>
            </div>
            <div class="mini-card">
                <div class="col-md-12">
                    <div class="form-group bmd-form-group">
                        <p>What’s your projected revenue over the coming 12 months?</p>
                        <div class="range">
                            <div id="pmd-slider-value-input" class="pmd-range-slider"></div>
                            <div class="form-group pmd-textfield pmd-textfield-floating-label-completed">
                            <input type="text" class="form-control" id="value-input"><span class="pmd-textfield-focused"></span>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include('footer.php'); ?>