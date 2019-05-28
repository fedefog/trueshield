
<?php $page_name = "step3" ?>
<?php $prev_page = "step-3f" ?>
<?php $next_page = "step-3g" ?>
<?php include('header.php'); ?>

<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="description total-cost">
                    <p class=" left">Total cost<br> per month:</p>
                    <div class="quote right">
                        <span>$</span>
                        <div class="number">73<em>+tax</em></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">CGL Coverage</th>
                  <th scope="col">$53</th>
                  <th scope="col"></th>
                </tr>
              </thead>
              <tbody>
                 <tr>
                  <td><strong>Data & Privacy(Yes)</strong></td>
                  <td>$10</td>
                  <td><a href="#" class="edit"></a></td>
                </tr>
                <tr>
                  <td><strong>Business Contents ($25k - 100k)</strong></td>
                  <td>$5</td>
                  <td><a href="#" class="edit"></a></td>
                </tr>
                  <tr>
                  <td><strong>Installation for customers (No)</strong></td>
                  <td>$0</td>
                  <td><a href="#" class="edit"></a></td>
                </tr>
              </tbody>
            </table>
        </div>
    </div>
</section>

<div class="card slide large show">
    <div class="question-wrapper">
        <div class="question">
            Jim, almost there!
            <span>A few more details about your business to finalize your policy</span>
        </div>
    </div>

    <div class="answer-wrapper">
        <div class="small-form">
            <div class="form-group">
                <label for="address" class="col-form-label">Address</label>
                <input type="text" id="address" name="address" class="form-control" placeholder="Enter Address" >
            </div>
            <div class="form-group">
                <label for="city" class="col-form-label">City/Town</label>
                <input type="text" id="city" name="city" class="form-control" placeholder="Enter City">
            </div>
            <div class="half">
                <div class="form-group">
                    <label for="postal" class="col-form-label">Postal Code</label>
                    <input type="text" id="postal" name="postal" class="form-control" placeholder="Enter City">
                </div>
            </div>
            <div class="half">
                <div class="form-group">
                    <label for="province" class="col-form-label">Province</label>
                    <input type="text" id="province" name="province" class="form-control" placeholder="Enter province">
                </div>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
              <label class="form-check-label" for="defaultCheck1">
                This is also my mailing address
              </label>
            </div>
            <div class="half">
                <div class="form-group">
                    <label for="email" class="col-form-label">Email Address</label>
                    <input type="email" id="email" name="email" class="form-control" placeholder="Enter email address">
                </div>
            </div>
        </div>

    </div>

</div>

<?php include('footer.php'); ?>