@extends('admin.components.adminTemplate')
@section('content')
    <link rel="stylesheet" href="/admin/assets/css/riwayat.css">
    <!-- partial | ISI -->
    <div class="main-panel">
        <style>
            button {
                background: none;
                border: none;
            }
        </style>
        <div class="content-wrapper">
            <div class="col-lg-12 grid-margin stretch-card">
                <h3 class="judul mb-3">Pencairan Penghasilan</h3>
                <div class="table-container">
                    <table class="table table-sortable">
                        <thead>
                            <tr class="table-row table-header">
                                <th class="table-cell">Artis<i class="fas fa-sort" data-order="asc"></th>
                                <th class="table-cell">Tanggal<i class="fas fa-sort" data-order="asc"></th>
                                <th class="table-cell">Jumlah</th>
                                <th class="table-cell">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                                    <tr class="table-row baris">
                                        <td class="table-cell">
                                                    <p>Tulus</p>
                                        </td>
                                        <td class="table-cell">03/12/2023</td>
                                        <td class="table-cell text-success">Rp 500.000</td>
                                        <td class="table-cell">
                                            <button class="btn btnicon" data-bs-toggle="modal" data-bs-target="#detail">
                                                <i class="far fa-eye text-info"></i>
                                            </button>
                                            <button class="btn btnicon" onclick="">
                                                <i class="far fa-times-circle text-danger"></i>
                                            </button>
                                        </td>
                                    </tr>
                        </tbody>
                    </table>
                </div>
                <div class="modal fade" id="detail" data-bs-backdrop="static" data-bs-keyboard="false"
                    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content border-0" style="background-color: white">
                            <div class="modal-header border-0">
                                <h1 class="modal-title fs-5 judul" id="staticBackdropLabel">Detail</h1>
                                <button type="button" class="btn-unstyled" data-bs-dismiss="modal" aria-label="Close">
                                    <i class="mdi mdi-close-circle-outline btn-icon" style="color: #957DAD; font-size: 20px;"></i>
                                </button>
                            </div>
                            <div class="modal-body border-0">
                                <div class="col-md-12" style="font-size: 13px">
                                    <div class="mb-3">
                                        <p for="namakategori" class="form-label judulnottebal">Total Penghasilan</p>
                                        <h3 class="judul">Rp20.000.000</h3>
                                    </div>
                                    <div class="mb-3">
                                        <p for="konsep" class="form-label judulnottebal">Jumlah Pencairan</p>
                                        <p class="muted">Rp 20.000.000</p>
                                    </div>
                                </div>
            
                            </div>
                            <div class="modal-footer border-0">
                                <button type="button" class="btn rounded-3">
                                    <a href="" class="btn-link"
                                        style="color: inherit; text-decoration: none;">Setujui</a></button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="text-center">
                    <div class="text-center">
                        <ul class="pagination justify-content-center">
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>


    <script src="/user/assets/js/tablesort.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        /*===================================*/

        $(document).ready(function() {
            var itemsPerPage = 4;
            var currentPage = 1;

            function setURLParameter(page) {
                var newURL = window.location.href.split('?')[0] + '?page=' + page;
                window.history.replaceState({}, document.title, newURL);
            }

            function getURLParameter() {
                var urlParams = new URLSearchParams(window.location.search);
                return parseInt(urlParams.get('page')) || 1;
            }

            currentPage = getURLParameter();

            function showTableRows() {
                var start = (currentPage - 1) * itemsPerPage;
                var end = start + itemsPerPage;
                $(".baris").hide();
                $(".baris").slice(start, end).show();
            }

            function updatePagination() {
                $(".pagination").empty();
                var numPages = Math.ceil($(".baris").length / itemsPerPage);

                for (var i = 1; i <= numPages; i++) {
                    var activeClass = i === currentPage ? "active" : "";
                    var buttonText = i.toString();
                    var buttonClass = "page-link";
                    if (i === currentPage) {
                        buttonClass += " active";
                    }

                    var button = $("<button>")
                        .addClass("page-item " + activeClass)
                        .addClass(buttonClass)
                        .text(buttonText);

                    button.click(function() {
                        var page = parseInt($(this).text());
                        currentPage = page;
                        setURLParameter(currentPage);
                        showTableRows();
                        updatePagination();
                    });

                    $(".pagination").append($("<li>").append(button));
                }

                if (numPages <= 1) {
                    $(".pagination").hide();
                }
            }

            showTableRows();
            updatePagination();

            setURLParameter(currentPage);
        });
    </script>
@endsection