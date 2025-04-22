<?php
include_once "lib/load.php";

?>
<main style="padding: 44px;">
<div class="pricing-header p-3 pb-md-4 mx-auto text-center">
      <h1 class="display-4 fw-normal text-body-emphasis">Pricing</h1>
      <p class="fs-5 text-body-secondary">Quickly build an effective pricing table for your potential customers with this Bootstrap example. It’s built with default Bootstrap components and utilities with little customization.</p>
    </div>


    <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal">Free</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">FREE<small class="text-body-secondary fw-light"></small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>10 users included</li>
              <li>2 GB of storage</li>
              <li>Email support</li>
              <li>Help center access</li>
            </ul>
            <button type="button" class="w-100 btn btn-lg btn-outline-primary">for free plan</button>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal">Pro</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">1<small class="text-body-secondary fw-light"> COIN</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>20 users included</li>
              <li>10 GB of storage</li>
              <li>Priority email support</li>
              <li>Help center access</li>
            </ul>
            <button type="button" class="w-100 btn btn-lg btn-primary">Convert</button>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm border-primary">
          <div class="card-header py-3 text-bg-primary border-primary">
            <h4 class="my-0 fw-normal">Premium</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">9<small class="text-body-secondary fw-light"> COINS</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>30 users included</li>
              <li>15 GB of storage</li>
              <li>Phone and email support</li>
              <li>Help center access</li>
            </ul>
            <button type="button" class="w-100 btn btn-lg btn-primary">Convert</button>
          </div>
        </div>
      </div>
    </div>

    <h2 class="display-6 text-center mb-4">REFERRAL</h2>

    <div class="table-responsive">
      <!-- <table class="table text-center">
        <thead>
          <tr>
            <th style="width: 34%;"></th>
            <th style="width: 22%;">Free</th>
            <th style="width: 22%;">Pro</th>
            <th style="width: 22%;">Enterprise</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row" class="text-start">Public</th>
            <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
            <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
            <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
          </tr>
          <tr>
            <th scope="row" class="text-start">Private</th>
            <td></td>
            <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
            <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
          </tr>
        </tbody>

        <tbody>
          <tr>
            <th scope="row" class="text-start">Permissions</th>
            <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
            <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
            <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
          </tr>
          <tr>
            <th scope="row" class="text-start">Sharing</th>
            <td></td>
            <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
            <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
          </tr>
          <tr>
            <th scope="row" class="text-start">Unlimited members</th>
            <td></td>
            <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
            <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
          </tr>
          <tr>
            <th scope="row" class="text-start">Extra security</th>
            <td></td>
            <td></td>
            <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
          </tr>
        </tbody>
      </table> -->
      <h3 style="margin-left: 1051px;">My Coins:&ensp;<button type="button" class="btn btn-primary" style="width: 70px !important;height: 70px !important;    border-radius: 35px;padding: 4px;font-size: larger;"><?=session::get_value('coin');?></button></h3>
      <div style="display: flex;align-items: center;justify-content: center;flex-direction: column;">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur minus tempore perferendis sunt vitae labore ratione cupiditate a non fugiat eius, animi porro expedita accusamus atque! Quaerat culpa totam repudiandae, magnam pariatur voluptatem cumque iure consequatur provident adipisci magni iusto nam, explicabo temporibus quo cupiditate esse obcaecati praesentium id. Eos odit quisquam quibusdam iure numquam perferendis, quia, illo, itaque officiis natus saepe dolore! Veritatis distinctio, itaque amet molestias doloribus officia officiis qui hic, illo commodi consequuntur quo, ex provident voluptates numquam magnam vel ea? Dolorem harum eos ipsam natus necessitatibus ducimus laboriosam. Vitae quas provident, accusamus voluptates ab totam laboriosam!
        <hr>
        <h3 style="margin-top: 20px;font-size: 37px;">1&ensp;Refer:&ensp;=&ensp;1&ensp;Coin</h3>
      </div>
      <div style="display: flex;align-items: center;justify-content: center;">
        <h3>Referral Code:&ensp;<h1 style="background-color: aqua;padding: 9px;background-color: rgb(56 56 56 / 3%);border: 2px solid rgb(247, 120, 1);border-radius: 10px;color: rgb(247, 120, 1);"><?=session::get_value('referral');?></h1></h3>
      </div><br>
      <div style="display: flex;align-items: center;justify-content: center;">
        <h3>URL:&ensp;<h5 style=" background-color: aqua;padding: 9px;background-color: rgb(56 56 56 / 3%);border: 2px solid rgb(247, 120, 1);border-radius: 10px;">http://172.30.4.98/navfit1/htdocs/signup.php?to=<?=session::get_value('referral');?></h5></h3>
      </div>
    </div>
  </main>