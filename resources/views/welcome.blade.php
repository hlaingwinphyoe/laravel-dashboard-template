@extends('layouts.app')
@section('head')
    <style>
        .table > :not(caption) > * > * {
            border-bottom-width: 0 !important;
        }
    </style>
@stop

@section('content')
    <!-- Sale & Revenue Start -->
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-sm-6 col-xl-3">
                <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-3">
                    <i class="fa fa-chart-line fa-3x text-primary"></i>
                    <div class="text-light">
                        <p class="mb-1">Today Sale</p>
                        <h5 class="mb-0 fw-bold">$2800</h5>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3">
                <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-3">
                    <i class="fa fa-chart-bar fa-3x text-primary"></i>
                    <div class="text-light">
                        <p class="mb-1">Total Sales</p>
                        <h5 class="mb-0 fw-bold">$87000</h5>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3">
                <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-3">
                    <i class="fa fa-users-viewfinder fa-3x text-primary"></i>
                    <div class="text-light">
                        <p class="mb-1">Today Viewers</p>
                        <h5 class="mb-0 fw-bold">1655</h5>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3">
                <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-3">
                    <i class="fa fa-earth-asia fa-3x text-primary"></i>
                    <div class="text-light">
                        <p class="mb-1">Support Location</p>
                        <h5 class="mb-0 fw-bold">14</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Sale & Revenue End -->


    <!-- Sales Chart Start -->
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-sm-12 col-xl-6">
                <div class="bg-secondary text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0 text-primary">Worldwide Sales</h6>
                        <a href="" class="btn btn-primary btn-sm">Show All</a>
                    </div>
                    <canvas id="worldwide-sales"></canvas>
                </div>
            </div>
            <div class="col-sm-12 col-xl-6">
                <div class="bg-secondary text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0 text-primary">Viewers</h6>
                        <a href="" class="btn btn-primary btn-sm">Show All</a>
                    </div>
                    <canvas id="viewers"></canvas>
                </div>
            </div>
        </div>
    </div>
    <!-- Sales Chart End -->


    <!-- Recent Sales Start -->
    <div class="container-fluid pt-4 px-4">
        <div class="bg-secondary text-center rounded p-4">
            <div class="d-flex align-items-center justify-content-between mb-4">
                <h6 class="mb-0 text-primary">Recent Sales</h6>
                <a href="" class="btn btn-primary btn-sm">Show All</a>
            </div>
            <div class="table-responsive">
                <table class="table text-start align-middle mb-0">
                    <thead>
                    <tr class="text-white">
                        <th scope="col">Date</th>
                        <th scope="col">Invoice</th>
                        <th scope="col">Customer</th>
                        <th scope="col">Amount</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr class="text-light">
                        <td>25 June 2022</td>
                        <td>INV-1911</td>
                        <td>Kyaw Kyaw</td>
                        <td>$100</td>
                        <td>Paid</td>
                        <td><a class="btn btn-sm btn-primary" href="">Detail</a></td>
                    </tr>
                    <tr class="text-light">
                        <td>25 June 2022</td>
                        <td>INV-1922</td>
                        <td>Aung Aung</td>
                        <td>$250</td>
                        <td>$200</td>
                        <td><a class="btn btn-sm btn-primary" href="">Detail</a></td>
                    </tr>
                    <tr class="text-light">
                        <td>24 June 2022</td>
                        <td>INV-1923</td>
                        <td>Zaw Zaw</td>
                        <td>$120</td>
                        <td>Paid</td>
                        <td><a class="btn btn-sm btn-primary" href="">Detail</a></td>
                    </tr>
                    <tr class="text-light">
                        <td>24 June 2022</td>
                        <td>INV-1924</td>
                        <td>Su Su</td>
                        <td>$500</td>
                        <td>Paid</td>
                        <td><a class="btn btn-sm btn-primary" href="">Detail</a></td>
                    </tr>
                    <tr class="text-light">
                        <td>24 June 2022</td>
                        <td>INV-1925</td>
                        <td>Moe Moe</td>
                        <td>$300</td>
                        <td>$300</td>
                        <td><a class="btn btn-sm btn-primary" href="">Detail</a></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- Recent Sales End -->


    <!-- Widgets Start -->
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-sm-12 col-md-6">
                <div class="h-100 bg-secondary rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-2">
                        <h6 class="mb-0 text-primary">Messages</h6>
                        <a href="" class="btn btn-primary btn-sm">Show All</a>
                    </div>
                    <div class="d-flex align-items-center border-bottom py-3">
                        <img class="rounded-circle flex-shrink-0" src="{{ asset('image/myat_noe_potrait.jpg') }}" alt=""
                             style="width: 40px; height: 40px;">
                        <div class="w-100 ms-3">
                            <div class="d-flex w-100 justify-content-between">
                                <h6 class="mb-0 text-light">Myat Noe</h6>
                                <small class="text-light">15 minutes ago</small>
                            </div>
                            <span class="text-light text-white-50">Lorem ipsum dolor sit amet, consectetur...</span>
                        </div>
                    </div>
                    <div class="d-flex align-items-center border-bottom py-3">
                        <img class="rounded-circle flex-shrink-0" src="{{ asset('image/myat_noe_potrait(2).jpg') }}"
                             alt=""
                             style="width: 40px; height: 40px;">
                        <div class="w-100 ms-3">
                            <div class="d-flex w-100 justify-content-between">
                                <h6 class="mb-0 text-light">Aye Aye</h6>
                                <small class="text-light">15 minutes ago</small>
                            </div>
                            <span class="text-light text-white-50">Lorem ipsum dolor sit amet, consectetur adi...</span>
                        </div>
                    </div>
                    <div class="d-flex align-items-center border-bottom py-3">
                        <img class="rounded-circle flex-shrink-0" src="{{ asset('image/myat_noe_potrait(3).jpg') }}"
                             alt=""
                             style="width: 40px; height: 40px;">
                        <div class="w-100 ms-3">
                            <div class="d-flex w-100 justify-content-between">
                                <h6 class="mb-0 text-light">Su Su</h6>
                                <small class="text-light">15 minutes ago</small>
                            </div>
                            <span class="text-light text-white-50">Lorem ipsum dolor sit amet, consectetur adipisicing elit. A...</span>
                        </div>
                    </div>
                    <div class="d-flex align-items-center pt-3">
                        <img class="rounded-circle flex-shrink-0" src="{{ asset('image/myat_noe(6).jpg') }}" alt=""
                             style="width: 40px; height: 40px;">
                        <div class="w-100 ms-3">
                            <div class="d-flex w-100 justify-content-between">
                                <h6 class="mb-0 text-light">Poe</h6>
                                <small class="text-light">15 minutes ago</small>
                            </div>
                            <span class="text-light text-white-50">Lorem ipsum dolor sit amet, consectetur adipisicing elit...</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6">
                <div class="h-100 bg-secondary rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0 text-primary">To Do List</h6>
                        <a href="" class="btn btn-primary btn-sm">Show All</a>
                    </div>
                    <div class="d-flex mb-2">
                        <input class="form-control bg-dark border-0" type="text" placeholder="Enter task">
                        <button type="button" class="btn btn-primary ms-2"><i class="fa-solid fa-plus"></i></button>
                    </div>
                    <div class="d-flex align-items-center border-bottom py-2">
                        <input class="form-check-input m-0" type="checkbox">
                        <div class="w-100 ms-3">
                            <div class="d-flex w-100 align-items-center justify-content-between">
                                <span class="text-light">lorem ipsum task...</span>
                                <button class="btn btn-sm"><i class="fa fa-times"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex align-items-center border-bottom py-2">
                        <input class="form-check-input m-0" type="checkbox">
                        <div class="w-100 ms-3">
                            <div class="d-flex w-100 align-items-center justify-content-between">
                                <span class="text-light">lorem ipsum task...</span>
                                <button class="btn btn-sm"><i class="fa fa-times"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex align-items-center border-bottom py-2">
                        <input class="form-check-input m-0" type="checkbox" checked>
                        <div class="w-100 ms-3">
                            <div class="d-flex w-100 align-items-center justify-content-between">
                                <span class="text-light"><del>lorem ipsum task...</del></span>
                                <button class="btn btn-sm text-primary"><i class="fa fa-times"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex align-items-center border-bottom py-2">
                        <input class="form-check-input m-0" type="checkbox">
                        <div class="w-100 ms-3">
                            <div class="d-flex w-100 align-items-center justify-content-between">
                                <span class="text-light">lorem ipsum task...</span>
                                <button class="btn btn-sm"><i class="fa fa-times"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex align-items-center pt-2">
                        <input class="form-check-input m-0" type="checkbox">
                        <div class="w-100 ms-3">
                            <div class="d-flex w-100 align-items-center justify-content-between">
                                <span class="text-light">lorem ipsum task...</span>
                                <button class="btn btn-sm"><i class="fa fa-times"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Widgets End -->

@stop
@push('script')
    <script>
        // Worldwide Sales Chart
        let ctx1 = document.getElementById("worldwide-sales");
        let myChart1 = new Chart(ctx1, {
            type: "bar",
            data: {
                labels: ["2016", "2017", "2018", "2019", "2020", "2021", "2022"],
                datasets: [
                    {
                        label: "USA",
                        data: [15, 30, 55, 65, 60, 80, 95],
                        backgroundColor: "rgba(24, 210, 110, .7)",
                        borderWidth: 1
                    },
                    {
                        label: "UK",
                        data: [8, 35, 40, 60, 70, 55, 75],
                        backgroundColor: "rgba(24, 210, 110, .5)",
                        borderWidth: 1
                    },
                    {
                        label: "AU",
                        data: [12, 25, 45, 55, 65, 70, 60],
                        backgroundColor: "rgba(24, 210, 110, .3)",
                        borderWidth: 1
                    }
                ]
            },
            options: {
                responsive: true,
            }
        });

        // Sales & Revenue Chart
        let ctx2 = $("#viewers").get(0).getContext("2d");
        let myChart2 = new Chart(ctx2, {
            type: "line",
            data: {
                labels: [50, 60, 70, 80, 90, 100, 110, 120, 130, 140, 150],
                datasets: [{
                    label: "Sales",
                    fill: false,
                    borderColor: "rgba(24, 210, 110, .7)",
                    backgroundColor: "rgba(24, 210, 110, .5)",
                    data: [7, 8, 8, 9, 9, 9, 10, 11, 14, 14, 15],
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true
            }
        });

    </script>
@endpush
