
<?php $page_name = "step2" ?>
<?php $next_page = "step-2b" ?>
<?php include('header.php'); ?>

<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="description total-cost">
                    <p class="left">Jim, based on the information you have provided us so far, this is the estimated monthly cost for your CGL coverage:</p>
                    <div class="quote right">
                        <span>$</span>
                        <div class="number">53<em>/month</em></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="card slide">
    <div class="question-wrapper">
        <div class="question">
            Jim, Did you know?
            <span>People who share your profession also bought these coverages:</span>
        </div>
    </div>

    <div class="answer-wrapper">
        <div class="title">
            Tools and equipment
            <span>Starting at $5</span>
        </div>
        
        <p>If you need specialized tools and equipment do your job, you should protect them wherever your work may take you. </p>

        <div class="subtitle">What’s the value of your tools and equipment?</div>
        <div class="form-group bmd-form-group">
            <div class="range">
                <div id="pmd-slider-value-input" class="pmd-range-slider"></div>
                    <div class="form-group pmd-textfield pmd-textfield-floating-label-completed">
                    <input type="text" class="form-control" id="value-input"><span class="pmd-textfield-focused"></span>
                </div>
            </div>
        </div>
    </div>

</div>

<?php include('footer.php'); ?>