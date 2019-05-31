
<?php $page_name = "step4" ?>
<?php $prev_page = "step-3g" ?>
<?php $next_page = "step-4b" ?>
<?php include('header.php'); ?>

<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="description">
                    <p>Jim, review your policy</p>
                </div>
                <div class="ticket">
                    <ul class="switches">
                        <li>
                            <p class="green">Monthly</p>
                            <div class="switch">
                                <label>
                                  <input type="checkbox" checked>
                                </label>
                            </div>
                            <p>Annual</p>
                        </li>
                    </ul>
                    <div class="description total-cost">
                        <p class=" left">Total cost<br> per month:</p>
                        <div class="quote right">
                            <span>$</span>
                            <div class="number">88<em>.79</em></div>
                        </div>
                        <a class="arrow collapsed" data-toggle="collapse" href="#collapse" role="button" aria-expanded="false" aria-controls="collapse"></a>
                    </div>
                    <div class="line"></div>
                    <div class="collapse" id="collapse">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">CGL Coverage</th>
                                    <th scope="col" class="price">$53</th>
                                    <th scope="col"><a href="#" class="edit hide"></a></th>
                                </tr>
                            </thead>
                        </table>
                        <div class="line"></div>
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td><strong>Tools & Equipments </strong>($50k - $100k)</td>
                                    <td class="price">$10</td>
                                    <td><a href="#" class="edit"></a></td>
                                </tr>
                                <tr>
                                    <td><strong>Business Contents </strong>($0k - 25k)</td>
                                    <td class="price">$5</td>
                                    <td><a href="#" class="edit"></a></td>
                                </tr>
                                <tr>
                                    <td><strong>Data & Privacy </strong>(Yes)</td>
                                    <td class="price">$10</td>
                                    <td><a href="#" class="edit"></a></td>
                                </tr>
                                <tr>
                                    <td><strong>Installation for customers </strong> (No)</td>
                                    <td class="price">$0</td>
                                    <td><a href="#" class="edit"></a></td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="line"></div>
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td><strong>U.S Revenue </strong>(No)</td>
                                    <td class="price"></td>
                                    <td><a href="#" class="edit"></a></td>
                                </tr>
                                <tr>
                                    <td><strong>Insurance History </strong>(1)</td>
                                    <td class="price"></td>
                                    <td><a href="#" class="edit"></a></td>
                                </tr>
                                <tr>
                                    <td><strong>Property Ownership</strong>(Yes)</td>
                                    <td class="price"></td>
                                    <td><a href="#" class="edit"></a></td>
                                </tr>
                                <tr>
                                    <td><strong>Cancellation History </strong>(No)</td>
                                    <td class="price"></td>
                                    <td><a href="#" class="edit"></a></td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="line"></div>
                    </div>
                    <div>
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td>Subtotal</td>
                                    <td>$ 78.00 </td>
                                </tr>
                                <tr>
                                    <td>Taxes</td>
                                    <td>$ 10.79</td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="line gray"></div>
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td class="green"><strong>Total monthly cost</strong></td>
                                    <td class="green"><strong>$88.14</strong></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="ticket-border"></div>
                <a href="#" class="btn-border">Email me my quote</a>
                <a href="#" class="btn-border">SMS me my quote</a>
            </div>
        </div>
    </div>
</section>

<?php include('footer.php'); ?>