@extends('artis.components.artisTemplate')

@section('content')
    <div class="main-panel">
        <link rel="stylesheet" href="/user/assets/css/riwayat.css">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="table-container">
                        <table class="table table-sortable">
                            <thead>
                                <tr class="table-row table-header">
                                    <th class="table-cell">Artis <i class="fas fa-sort" data-order="asc"></th>
                                    <th class="table-cell">Kategori <i class="fas fa-sort" data-order="asc"></th>
                                    <th class="table-cell">Tanggal <i class="fas fa-sort" data-order="asc"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="table-row baris">
                                    <td class="table-cell">
                                        <h6>Cindy</h6>
                                        <p class="text-muted m-0">Atulus</p>
                                    </td>
                                    <td class="table-cell">Dangdut</td>
                                    <td class="table-cell">04/09/2023</td>
                                </tr>
                                <tr class="table-row baris">
                                    <td class="table-cell">
                                        <h6>Bagus</h6>
                                        <p class="text-muted m-0">Dtulus</p>
                                    </td>
                                    <td class="table-cell">Apa</td>
                                    <td class="table-cell">01/09/2023</td>
                                </tr>
                                <tr class="table-row baris">
                                    <td class="table-cell">
                                        <h6>Agus</h6>
                                        <p class="text-muted m-0">Btulus</p>
                                    </td>
                                    <td class="table-cell">Ciee</td>
                                    <td class="table-cell">02/09/2023</td>
                                </tr>
                                <tr class="table-row baris">
                                    <td class="table-cell">
                                        <h6>Denis</h6>
                                        <p class="text-muted m-0">Ctulus</p>
                                    </td>
                                    <td class="table-cell">Bajigur</td>
                                    <td class="table-cell">10/10/2023</td>
                                </tr>
                                <tr class="table-row baris">
                                    <td class="table-cell">
                                        <h6>Genis</h6>
                                        <p class="text-muted m-0">Ctulus</p>
                                    </td>
                                    <td class="table-cell">Bajigur</td>
                                    <td class="table-cell">10/10/2023</td>
                                </tr>
                            </tbody>
                        </table>
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
