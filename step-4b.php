
<?php $page_name = "step4" ?>
<?php $prev_page = "step-4a" ?>
<?php $next_page = "disclosure-and-consent" ?>
<?php include('header.php'); ?>

<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="description">
                    <p>Jim, please enter your credit card information below:</p>
                </div>
                <div class="ticket">
                    <div class="small-form">
                        <div class="form-group">
                            <label for="card" class="col-form-label">Card Type</label>
                            <input type="text" id="card" name="card" class="form-control" placeholder="Visa" >
                        </div>
                        <div class="form-group">
                            <label for="name" class="col-form-label">Name on Card</label>
                            <input type="text" id="name" name="name" class="form-control" placeholder="Jim Smith">
                        </div>
                        <div class="form-group">
                            <label for="number" class="col-form-label">Card Number</label>
                            <input type="password" id="number" name="number" class="form-control" placeholder="**** **** **** ****">
                        </div>
                        <div class="half select-group">
                            <div class="form-group">
                                <label for="province" class="col-form-label">Expiry Date</label>
                                <select  id="province" name="province"  class="form-control">
                                    <option selected disabled hidden>May</option>
                                    <option>...</option>
                                    <option>...</option>
                                    <option>...</option>
                                  </select>
                            </div>
                        </div>
                        <div class="half select-group">
                            <div class="form-group">
                                <select  id="province" name="province"  class="form-control">
                                    <option selected disabled hidden>2022</option>
                                    <option>...</option>
                                    <option>...</option>
                                    <option>...</option>
                                  </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ticket-border"></div>
            </div>
        </div>
    </div>
</section>

<?php include('footer.php'); ?>