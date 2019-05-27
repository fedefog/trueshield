
<?php $page_name = "step2" ?>
<?php $prev_page = "step-2b" ?>
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

<div class="card slide  show">
    <div class="question-wrapper">
        <div class="question">
            Jim, Did you know?
            <span>People who share your profession also bought these coverages:</span>
        </div>
    </div>

    <div class="answer-wrapper">
        <div class="title">
            Business Contents
            <span>Starting at $3</span>
        </div>
        
        <p>Computers, photocopiers, furniture and other contents in your place of business are sitting ducks for theft and damage.</p>

        <div class="subtitle">What's the value of your stored business content?</div>
        <div class="range">
            <div id="pmd-slider-value-input" class="pmd-range-slider"></div>
                <div class="form-group pmd-textfield pmd-textfield-floating-label-completed">
                <input type="text" class="form-control" id="value-input"><span class="pmd-textfield-focused"></span>
            </div>
        </div>
    </div>

</div>

<?php include('footer.php'); ?>