
<?php $page_name = "step2" ?>
<?php $prev_page = "step-2c" ?>
<?php $next_page = "step-2d" ?>
<?php include('header.php'); ?>

<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="description total-cost">
                    <p class=" left">Total cost<br> per month:</p>
                    <div class="quote right">
                        <span>$</span>
                        <div class="number">53<em>+tax</em></div>
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
                  <td><strong>Business Contents($25k - 100k)</strong></td>
                  <td>$5</td>
                  <td><a href="#" class="edit"></a></td>
                </tr>
                <tr>
                  <td><strong>Data & Privacy(Yes)</strong></td>
                  <td>$10</td>
                  <td><a href="#" class="edit"></a></td>
                </tr>
                <tr>
                  <td><strong>Tools and equipment($50k - $100k)</strong></td>
                  <td>$10</td>
                  <td><a href="#" class="edit"></a></td>
                </tr>
              </tbody>
            </table>
        </div>
    </div>
</section>

<div class="card slide show">
    <div class="question-wrapper">
        <div class="question">
            Jim, Did you know?
            <span>People who share your profession also bought these coverages:</span>
        </div>
    </div>

    <div class="answer-wrapper">
        <div class="title">
            Instalattion for customers
            <span>Starting at $3</span>
        </div>
        
        <p>If you install products or fixtures for your customers, you should have the right coverage in case something gets damaged before or during the installation.<br>
        Would you like to include data & Privacy coverage in your quote?</p>

        <div class="subtitle">Would you like to include coverage for products you're installing for customers?</div>
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