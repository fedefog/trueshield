
<?php $page_name = "step1" ?>
<?php $next_page = "step-1e" ?>
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
        </div>
    </div>
</section>

<div class="card d">
    <p>Explanation why we’re asking your name. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut vehicula commodo nulla, non elementum eros porttitor ut.</p>
    
    <div class="input-container form-group">
        <label for="company" class="bmd-label-floating">Company name?</label>
        <input type="text" id="company" name="company" class="input-click form-control">
    </div>
</div>

<?php include('footer.php'); ?>