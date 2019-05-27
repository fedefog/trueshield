
<?php $page_name = "step1" ?>
<?php $prev_page = "step-1b" ?>
<?php $next_page = "step-1d" ?>
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
        </div>
    </div>
</section>

<div class="card c">
    <p>Explanation why we’re asking your name. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut vehicula commodo nulla, non elementum eros porttitor ut.</p>
    
    <div class="input-container form-group">
        <label for="ps" class="bmd-label-floating">Wherte's your business located?</label>
        <!--<span>(Please type your postal code or click the icon)</span>-->
        <input type="number" id="ps" name="ps" class="input-click form-control">
    </div>
</div>

<?php include('footer.php'); ?>