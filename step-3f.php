
<?php $page_name = "step3" ?>
<?php $prev_page = "step-3e" ?>
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

<div class="card slide small show">
    <div class="question-wrapper">
        <div class="question">
            Jim, almost there!
            <span>A few more details about your business to finalize your policy</span>
        </div>
    </div>

    <div class="answer-wrapper">
        <div class="title">
            Are you a sole proprietor?
        </div>
        
        <div class="radio">
        <label>
          <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
          Yes
        </label>
        <label>
          <input type="radio" name="optionsRadios" id="optionsRadios1" value="option2" checked>
          No
        </label>
      </div>
    </div>

</div>

<?php include('footer.php'); ?>