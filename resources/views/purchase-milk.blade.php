@extends('layouts.utemplate')

<section class="section bg-gradient-pink">
    <div class="container">
        <div aria-label="breadcrumb">
            <ol class="breadcrumb bg-transparent">
                <li class="breadcrumb-item"><a href="#" class="text-dark">Home</a></li>
                <li class="breadcrumb-item"><a href="#" class="text-dark">Purchase Breastmilk</a></li>
                <li class="breadcrumb-item active" aria-current="page">Data</li>
            </ol>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-5">
                        <img class="card-img-top" src="../img/brand/item.jpg" alt="Product">
                    </div>
                    <div class="col-7">
                        <div class="row">
                            <h4>Breastmilk</h4>
                        </div>
                        <div class="row">
                            <h6 class="text-danger font-weight-bold">₱</h6>
                        </div>
                        <hr>
                        <div class="row">
                            <p class="font-weight-bold">Description</p>
                        </div>
                        <div class="row">
                            <div class="row col-12">
                                <p class="col-6 ">Date and Time of Extraction:</p>
                                <p class="col-6">Email</p>
                            </div>
                            <div class="row col-12">
                                <p class="col-6">Type of Milk:</p>
                                <p class="col-6">Email</p>
                            </div>
                            <div class="row col-12">
                                <p class="col-6">Volume of Breastmilk:</p>
                                <p class="col-6">Email</p>
                            </div>
                            <div class="row col-12">
                                    <p class="col-6">Quantity</p>
                                    <select class="custom-select col-6" id="inputGroupSelect01">
                                      <option value="1">1</option>
                                      <option value="2">2</option>
                                      <option value="3">3</option>
                                    </select>
                            </div>
                        </div>
                        <div class="row">
                            <button type="button" class="btn btn-warning">
                                <i class="fa fa-shopping-cart">&nbsp; Add to Cart</i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
