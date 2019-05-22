
<?php $page_name = "step1" ?>
<?php $next_page = "step-1c" ?>
<?php include('header.php'); ?>

<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="description">
                    <p>hi Jim, few more questions..</p>
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
        </div>
    </div>
</section>

<div class="card">
    <p>Explanation why we’re asking your name. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut vehicula commodo nulla, non elementum eros porttitor ut.</p>
    
    <div class="input-container form-group">
        <label for="profession" class="bmd-label-floating">What's your profession?</label>
        <input type="text" id="profession" name="profession" class="input-click form-control">
    </div>
</div>

<?php include('footer.php'); ?>