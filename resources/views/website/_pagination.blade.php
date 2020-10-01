<div class="clearfix"></div>
<div class="row">
    <div class="col-md-12">
        <!-- Pagination -->
        <div class="mt-3">
            <nav aria-label="Page navigation">
                <ul class="pagination">
                    <li class="page-item">
                        <a class="page-link"><i class="fa fa-angle-left"></i></a>
                    </li>
                    @for($i = 1 ; $i <= ceil($total_venues/10); $i++)
                        <li class="page-item">
                            <a class="page-link">{{$i}}</a>
                        </li>
                    @endfor
                    <li class="page-item">
                        <a class="page-link"><i class="fa fa-angle-right"></i></a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>
